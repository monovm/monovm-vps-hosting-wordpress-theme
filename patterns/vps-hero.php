<?php
/**
 * Title: VPS hero
 * Slug: monovm-blueprint/vps-hero
 * Categories: monovm-blueprint, featured
 * Description: A split hero with clear actions and an editable server blueprint.
 * Viewport Width: 1440
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-ink-color has-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:paragraph {"className":"monovm-blueprint-kicker","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
			<p class="monovm-blueprint-kicker has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( '01 / VIRTUAL SERVERS', 'monovm-blueprint' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"3-x-large"} -->
			<h1 class="wp-block-heading has-3-x-large-font-size"><?php echo esc_html__( 'Virtual servers without the fog.', 'monovm-blueprint' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
			<p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__( 'Choose a location, operating system, and resource profile. Keep the specification clear as your workload changes.', 'monovm-blueprint' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)">
				<!-- wp:button {"backgroundColor":"action","textColor":"canvas"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-canvas-color has-action-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php echo esc_html__( 'Compare VPS plans', 'monovm-blueprint' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"textColor":"ink","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-ink-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/network-locations/' ) ); ?>"><?php echo esc_html__( 'View server locations', 'monovm-blueprint' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:group {"className":"monovm-blueprint-blueprint monovm-blueprint-panel","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group monovm-blueprint-blueprint monovm-blueprint-panel has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--line);border-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
				<p class="has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'NODE PROFILE / EDITABLE EXAMPLE', 'monovm-blueprint' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Deployment blueprint', 'monovm-blueprint' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:separator {"backgroundColor":"line","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-line-color has-alpha-channel-opacity has-line-background-color has-background is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted","fontSize":"small","fontFamily":"technical"} --><p class="has-muted-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'REGION', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size"><?php echo esc_html__( 'Region / city', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted","fontSize":"small","fontFamily":"technical"} --><p class="has-muted-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'PLATFORM', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size"><?php echo esc_html__( 'Virtualization type', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted","fontSize":"small","fontFamily":"technical"} --><p class="has-muted-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'COMPUTE', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size"><?php echo esc_html__( '4 vCPU / 8 GB example', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted","fontSize":"small","fontFamily":"technical"} --><p class="has-muted-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'STORAGE', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size"><?php echo esc_html__( '160 GB example', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Replace every example value with a current, verified specification.', 'monovm-blueprint' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
