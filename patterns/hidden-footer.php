<?php
/**
 * Title: Internal default footer
 * Slug: monovm-vps/hidden-footer
 * Categories: monovm-vps, footer
 * Description: Internal translatable composition for the default footer template part.
 * Viewport Width: 1280
 * Block Types: core/template-part/footer
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","className":"site-footer","style":{"border":{"top":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|70","bottom":"var:preset|spacing|60","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-footer has-ink-color has-surface-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%"><!-- wp:site-title {"level":0,"fontSize":"x-large"} /--><!-- wp:site-tagline {"textColor":"muted"} /--><!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Clear infrastructure information, edited with native WordPress blocks.', 'monovm-vps' ); ?></p><!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":2,"fontSize":"medium"} --><h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Explore', 'monovm-vps' ); ?></h2><!-- /wp:heading --><!-- wp:navigation {"overlayMenu":"never","ariaLabel":<?php echo wp_json_encode( __( 'Explore navigation', 'monovm-vps' ) ); ?>,"layout":{"type":"flex","orientation":"vertical"}} --><!-- wp:page-list /--><!-- /wp:navigation --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":2,"fontSize":"medium"} --><h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Support', 'monovm-vps' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Add your support hours and preferred contact route.', 'monovm-vps' ); ?></p><!-- /wp:paragraph --><!-- wp:navigation {"overlayMenu":"never","ariaLabel":<?php echo wp_json_encode( __( 'Support navigation', 'monovm-vps' ) ); ?>,"layout":{"type":"flex","orientation":"vertical"}} --><!-- wp:navigation-link {"label":<?php echo wp_json_encode( __( 'Documentation', 'monovm-vps' ) ); ?>,"url":"#","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":<?php echo wp_json_encode( __( 'Service status', 'monovm-vps' ) ); ?>,"url":"#","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":<?php echo wp_json_encode( __( 'Contact support', 'monovm-vps' ) ); ?>,"url":"#","kind":"custom","isTopLevelLink":true} /--><!-- /wp:navigation --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":2,"fontSize":"medium"} --><h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Legal', 'monovm-vps' ); ?></h2><!-- /wp:heading --><!-- wp:navigation {"overlayMenu":"never","ariaLabel":<?php echo wp_json_encode( __( 'Legal navigation', 'monovm-vps' ) ); ?>,"layout":{"type":"flex","orientation":"vertical"}} --><!-- wp:navigation-link {"label":<?php echo wp_json_encode( __( 'Privacy policy', 'monovm-vps' ) ); ?>,"url":"#","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":<?php echo wp_json_encode( __( 'Terms of service', 'monovm-vps' ) ); ?>,"url":"#","kind":"custom","isTopLevelLink":true} /--><!-- /wp:navigation --></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"align":"wide","backgroundColor":"line","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-line-color has-alpha-channel-opacity has-line-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Copyright notice — replace this text with your organization’s legal notice.', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:social-links {"iconColor":"ink","iconColorValue":"#EDF8F8","openInNewTab":true,"showLabels":false,"className":"is-style-logos-only"} --><ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"feed"} /--></ul><!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
