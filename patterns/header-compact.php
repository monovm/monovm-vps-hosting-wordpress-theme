<?php
/**
 * Title: Compact header
 * Slug: monovm-blueprint/header-compact
 * Categories: monovm-blueprint, header
 * Description: A compact site identity, page navigation, and one editable action.
 * Viewport Width: 1280
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"align":"full","className":"site-header site-header--compact","style":{"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|70","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-header site-header--compact has-ink-color has-surface-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /--><!-- wp:site-title {"level":0,"fontSize":"large"} /--></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"surface","overlayTextColor":"ink","ariaLabel":<?php echo wp_json_encode( __( 'Primary navigation', 'monovm-blueprint' ) ); ?>,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
				<!-- wp:page-list /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"action","textColor":"canvas","fontSize":"small"} --><div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-canvas-color has-action-background-color has-text-color has-background wp-element-button" href="#"><?php echo esc_html__( 'View plans', 'monovm-blueprint' ); ?></a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
