<?php
/**
 * Title: Internal 404 content
 * Slug: monovm-vps/hidden-404
 * Categories: monovm-vps, text
 * Description: Internal translatable content composition for the not-found template.
 * Viewport Width: 960
 * Inserter: no
 */
?>

<!-- wp:group {"align":"wide","className":"error-404__panel","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|80","bottom":"var:preset|spacing|90","left":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"backgroundColor":"surface","textColor":"ink","layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignwide error-404__panel has-border-color has-ink-color has-surface-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--line);border-width:1px;margin-top:var(--wp--preset--spacing--90);margin-bottom:var(--wp--preset--spacing--90);padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
	<p class="has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'ERROR / 404', 'monovm-vps' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"fontSize":"3-x-large"} -->
	<h1 class="wp-block-heading has-3-x-large-font-size"><?php echo esc_html__( 'Page not found', 'monovm-vps' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
	<p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__( 'The requested address may have changed or may no longer be available. Search the site or use the primary navigation to continue.', 'monovm-vps' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search', 'monovm-vps' ) ); ?>,"showLabel":true,"placeholder":<?php echo wp_json_encode( __( 'Search this site', 'monovm-vps' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'monovm-vps' ) ); ?>,"buttonUseIcon":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} /-->
</div>
<!-- /wp:group -->
