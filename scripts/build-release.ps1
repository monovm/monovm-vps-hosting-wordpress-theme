param(
    [string]$Version = '1.0.0'
)

$ErrorActionPreference = 'Stop'

if ($Version -notmatch '^\d+\.\d+\.\d+(?:[-+][0-9A-Za-z.-]+)?$') {
    throw "Invalid release version: $Version"
}

$themeRoot = (Resolve-Path -LiteralPath (Join-Path $PSScriptRoot '..')).Path
$distRoot = Join-Path $themeRoot 'dist'
$resolvedDistParent = [System.IO.Path]::GetFullPath($distRoot)
$themePrefix = $themeRoot.TrimEnd([System.IO.Path]::DirectorySeparatorChar) + [System.IO.Path]::DirectorySeparatorChar

if (-not $resolvedDistParent.StartsWith($themePrefix, [System.StringComparison]::OrdinalIgnoreCase)) {
    throw 'The release output must stay inside the theme repository.'
}

function Get-ThemeRelativePath {
    param([string]$Path)

    $fullPath = [System.IO.Path]::GetFullPath($Path)
    if (-not $fullPath.StartsWith($themePrefix, [System.StringComparison]::OrdinalIgnoreCase)) {
        throw "Release input is outside the theme repository: $fullPath"
    }

    return $fullPath.Substring($themePrefix.Length).Replace('\', '/')
}

if (-not (Test-Path -LiteralPath $distRoot)) {
    New-Item -ItemType Directory -Path $distRoot | Out-Null
}

$zipPath = Join-Path $distRoot "monovm-blueprint-$Version.zip"
$checksumPath = "$zipPath.sha256"

foreach ($existing in @($zipPath, $checksumPath)) {
    $resolvedExisting = [System.IO.Path]::GetFullPath($existing)
    if (-not $resolvedExisting.StartsWith($resolvedDistParent, [System.StringComparison]::OrdinalIgnoreCase)) {
        throw "Refusing to replace an output outside dist: $resolvedExisting"
    }
    if (Test-Path -LiteralPath $resolvedExisting) {
        Remove-Item -LiteralPath $resolvedExisting -Force
    }
}

$topLevelFiles = @(
    'functions.php',
    'LICENSE',
    'readme.txt',
    'screenshot.png',
    'style.css',
    'theme.json'
)
$runtimeDirectories = @('assets', 'languages', 'parts', 'patterns', 'styles', 'templates')
$sourceFiles = [System.Collections.Generic.List[string]]::new()

foreach ($relative in $topLevelFiles) {
    $absolute = Join-Path $themeRoot $relative
    if (-not (Test-Path -LiteralPath $absolute -PathType Leaf)) {
        throw "Missing release file: $relative"
    }
    $sourceFiles.Add($absolute)
}

$styleContents = Get-Content -LiteralPath (Join-Path $themeRoot 'style.css') -Raw
$styleVersion = [regex]::Match($styleContents, '(?m)^Version:\s*(\S+)\s*$')
if (-not $styleVersion.Success -or $styleVersion.Groups[1].Value -ne $Version) {
    throw "Release version $Version does not match the Version header in style.css."
}

foreach ($directory in $runtimeDirectories) {
    $absoluteDirectory = Join-Path $themeRoot $directory
    if (Test-Path -LiteralPath $absoluteDirectory -PathType Container) {
        Get-ChildItem -LiteralPath $absoluteDirectory -Recurse -File | ForEach-Object {
            $sourceFiles.Add($_.FullName)
        }
    }
}

Add-Type -AssemblyName System.IO.Compression
Add-Type -AssemblyName System.IO.Compression.FileSystem

$stream = [System.IO.File]::Open($zipPath, [System.IO.FileMode]::CreateNew)
try {
    $archive = [System.IO.Compression.ZipArchive]::new(
        $stream,
        [System.IO.Compression.ZipArchiveMode]::Create,
        $false
    )
    try {
        foreach ($source in ($sourceFiles | Sort-Object -Unique)) {
            $relative = Get-ThemeRelativePath -Path $source
            $entryName = "monovm-blueprint/$relative"
            $entry = $archive.CreateEntry(
                $entryName,
                [System.IO.Compression.CompressionLevel]::Optimal
            )
            $entry.LastWriteTime = [System.DateTimeOffset]::new(
                1980,
                1,
                1,
                0,
                0,
                0,
                [System.TimeSpan]::Zero
            )

            $inputStream = [System.IO.File]::OpenRead($source)
            $entryStream = $entry.Open()
            try {
                $inputStream.CopyTo($entryStream)
            }
            finally {
                $entryStream.Dispose()
                $inputStream.Dispose()
            }
        }
    }
    finally {
        $archive.Dispose()
    }
}
finally {
    $stream.Dispose()
}

$zipInfo = Get-Item -LiteralPath $zipPath
if ($zipInfo.Length -gt 1.5MB) {
    throw "Release ZIP exceeds 1.5 MB: $($zipInfo.Length) bytes"
}

$hash = (Get-FileHash -LiteralPath $zipPath -Algorithm SHA256).Hash.ToLowerInvariant()
Set-Content -LiteralPath $checksumPath -Value "$hash  $($zipInfo.Name)" -Encoding ascii

[pscustomobject]@{
    Zip = $zipPath
    Bytes = $zipInfo.Length
    SHA256 = $hash
    Files = $sourceFiles.Count
}
