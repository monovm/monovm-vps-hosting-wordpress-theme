<?php
/**
 * Title: Final call to action
 * Slug: monovm-vps/final-cta
 * Categories: monovm-vps, call-to-action
 * Description: A high-contrast closing command bar with one editable action.
 * Viewport Width: 1440
 */
?>

<!-- wp:group {"align":"full","className":"monovm-vps-command-bar","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|70"}}},"backgroundColor":"action","textColor":"canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-vps-command-bar has-canvas-color has-action-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%">
			<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"fontSize":"small","fontFamily":"technical"} -->
			<p class="has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'NEXT STEP', 'monovm-vps' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"textColor":"canvas","fontSize":"2-x-large"} -->
			<h2 class="wp-block-heading has-canvas-color has-text-color has-2-x-large-font-size"><?php echo esc_html__( 'Ready to plan your next deployment?', 'monovm-vps' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Link this action to your own plan, quote, or contact destination. The theme does not process orders.', 'monovm-vps' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"canvas","textColor":"ink","width":100} --><div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-ink-color has-canvas-background-color has-text-color has-background wp-element-button" href="#"><?php echo esc_html__( 'Start a deployment conversation', 'monovm-vps' ); ?></a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
