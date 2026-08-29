<?php
/**
 * Title: Plan comparison
 * Slug: monovm-vps/plan-comparison
 * Categories: monovm-vps, pricing
 * Description: A captioned plan table with editable example values and a mobile overflow cue.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","className":"monovm-vps-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"surface-alt","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-vps-section has-ink-color has-surface-alt-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"monovm-vps-kicker","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
		<p class="monovm-vps-kicker has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( '04 / COMPARE', 'monovm-vps' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"2-x-large"} -->
		<h2 class="wp-block-heading has-2-x-large-font-size"><?php echo esc_html__( 'Compare the complete specification.', 'monovm-vps' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
		<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'On a small screen, scroll the table horizontally to review every column.', 'monovm-vps' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"monovm-vps-table-wrap","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group monovm-vps-table-wrap has-border-color" style="border-color:var(--wp--preset--color--line);border-width:1px;margin-top:var(--wp--preset--spacing--70)">
			<!-- wp:table {"hasFixedLayout":false,"className":"is-style-stripes","fontFamily":"technical"} -->
			<figure class="wp-block-table is-style-stripes has-technical-font-family"><table><thead><tr><th><?php echo esc_html__( 'Plan', 'monovm-vps' ); ?></th><th><?php echo esc_html__( 'Price and period', 'monovm-vps' ); ?></th><th><?php echo esc_html__( 'CPU', 'monovm-vps' ); ?></th><th><?php echo esc_html__( 'Memory', 'monovm-vps' ); ?></th><th><?php echo esc_html__( 'Storage', 'monovm-vps' ); ?></th><th><?php echo esc_html__( 'Network', 'monovm-vps' ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html__( 'Example 01', 'monovm-vps' ); ?></td><td><?php echo esc_html__( '$00 / month', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td></tr><tr><td><?php echo esc_html__( 'Example 02', 'monovm-vps' ); ?></td><td><?php echo esc_html__( '$00 / month', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td></tr><tr><td><?php echo esc_html__( 'Example 03', 'monovm-vps' ); ?></td><td><?php echo esc_html__( '$00 / month', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td><td><?php echo esc_html__( 'Replace value', 'monovm-vps' ); ?></td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html__( 'Editable example plan comparison. Replace all prices, billing periods, and resource values before publishing.', 'monovm-vps' ); ?></figcaption></figure>
			<!-- /wp:table -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
