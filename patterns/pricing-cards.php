<?php
/**
 * Title: Pricing cards
 * Slug: monovm-vps/pricing-cards
 * Categories: monovm-vps, pricing
 * Description: Three editable example plans with explicit billing periods and resources.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","className":"monovm-vps-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-vps-section has-ink-color has-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"monovm-vps-kicker","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
		<p class="monovm-vps-kicker has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( '03 / EXAMPLE PLANS', 'monovm-vps' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"2-x-large"} -->
		<h2 class="wp-block-heading has-2-x-large-font-size"><?php echo esc_html__( 'Start with a resource profile you can explain.', 'monovm-vps' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><?php echo esc_html__( 'All prices, limits, and destinations below are editable placeholders. Replace them with current, verified information before publishing.', 'monovm-vps' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"blockGap":{"left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--80)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"monovm-vps-panel","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
				<div class="wp-block-group monovm-vps-panel has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--line);border-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
					<!-- wp:paragraph {"textColor":"signal","fontSize":"small","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'EXAMPLE PLAN 01', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Starter', 'monovm-vps' ); ?></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"fontSize":"2-x-large","fontFamily":"technical"} --><p class="has-technical-font-family has-2-x-large-font-size"><?php echo esc_html__( '$00', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'per month / example billing period', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:list {"className":"is-style-plain"} --><ul class="is-style-plain"><li><?php echo esc_html__( 'Replace CPU value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace memory value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace storage value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace network value', 'monovm-vps' ); ?></li></ul><!-- /wp:list -->
					<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} --><div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Choose Starter', 'monovm-vps' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"monovm-vps-panel monovm-vps-featured-plan","style":{"border":{"color":"var:preset|color|signal","width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
				<div class="wp-block-group monovm-vps-panel monovm-vps-featured-plan has-border-color has-surface-alt-background-color has-background" style="border-color:var(--wp--preset--color--signal);border-width:2px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
					<!-- wp:paragraph {"textColor":"signal","fontSize":"small","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'EXAMPLE PLAN 02 / EMPHASIZED', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Standard', 'monovm-vps' ); ?></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"fontSize":"2-x-large","fontFamily":"technical"} --><p class="has-technical-font-family has-2-x-large-font-size"><?php echo esc_html__( '$00', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'per month / example billing period', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:list {"className":"is-style-plain"} --><ul class="is-style-plain"><li><?php echo esc_html__( 'Replace CPU value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace memory value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace storage value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace network value', 'monovm-vps' ); ?></li></ul><!-- /wp:list -->
					<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"width":100,"backgroundColor":"action","textColor":"canvas"} --><div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-canvas-color has-action-background-color has-text-color has-background wp-element-button" href="#"><?php echo esc_html__( 'Choose Standard', 'monovm-vps' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"monovm-vps-panel","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
				<div class="wp-block-group monovm-vps-panel has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--line);border-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
					<!-- wp:paragraph {"textColor":"signal","fontSize":"small","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'EXAMPLE PLAN 03', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Advanced', 'monovm-vps' ); ?></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"fontSize":"2-x-large","fontFamily":"technical"} --><p class="has-technical-font-family has-2-x-large-font-size"><?php echo esc_html__( '$00', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'per month / example billing period', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:list {"className":"is-style-plain"} --><ul class="is-style-plain"><li><?php echo esc_html__( 'Replace CPU value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace memory value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace storage value', 'monovm-vps' ); ?></li><li><?php echo esc_html__( 'Replace network value', 'monovm-vps' ); ?></li></ul><!-- /wp:list -->
					<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} --><div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Choose Advanced', 'monovm-vps' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
