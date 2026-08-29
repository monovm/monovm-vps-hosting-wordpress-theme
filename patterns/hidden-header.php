<?php
/**
 * Title: Internal default header
 * Slug: monovm-vps/hidden-header
 * Categories: monovm-vps, header
 * Description: Internal translatable composition for the default header template part.
 * Viewport Width: 1280
 * Block Types: core/template-part/header
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","className":"site-header","style":{"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|70","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-header has-ink-color has-surface-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","className":"site-header__inner","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide site-header__inner">
		<!-- wp:group {"className":"site-identity","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group site-identity">
			<!-- wp:site-logo {"width":44,"shouldSyncIcon":false} /-->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"large"} /--><!-- wp:site-tagline {"textColor":"muted","fontSize":"small"} /--></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"site-header__actions","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
		<div class="wp-block-group site-header__actions">
			<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"surface","overlayTextColor":"ink","ariaLabel":<?php echo wp_json_encode( __( 'Primary navigation', 'monovm-vps' ) ); ?>,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
				<!-- wp:page-list /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"action","textColor":"canvas","fontSize":"small"} --><div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-canvas-color has-action-background-color has-text-color has-background wp-element-button" href="#main"><?php echo esc_html__( 'Explore content', 'monovm-vps' ); ?></a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
