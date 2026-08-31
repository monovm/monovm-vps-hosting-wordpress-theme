<?php
/**
 * Title: Compact footer
 * Slug: monovm-blueprint/footer-compact
 * Categories: monovm-blueprint, footer
 * Description: A compact footer with site identity, legal links, and an editable copyright line.
 * Viewport Width: 1280
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","className":"site-footer site-footer--compact","style":{"border":{"top":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|70","bottom":"var:preset|spacing|60","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-footer site-footer--compact has-ink-color has-canvas-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"medium"} /--><!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Copyright notice — replace with your organization and year.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"never","ariaLabel":<?php echo wp_json_encode( __( 'Legal navigation', 'monovm-blueprint' ) ); ?>,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"fontSize":"small"} -->
			<!-- wp:navigation-link {"label":<?php echo wp_json_encode( __( 'Privacy', 'monovm-blueprint' ) ); ?>,"url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":<?php echo wp_json_encode( __( 'Terms', 'monovm-blueprint' ) ); ?>,"url":"#","kind":"custom","isTopLevelLink":true} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
