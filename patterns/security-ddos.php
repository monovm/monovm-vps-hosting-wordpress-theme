<?php
/**
 * Title: Security and DDoS
 * Slug: monovm-blueprint/security-ddos
 * Categories: monovm-blueprint, services
 * Description: A four-stage flow for documenting real traffic and security controls.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-ink-color has-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"monovm-blueprint-kicker","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
		<p class="monovm-blueprint-kicker has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( '08 / SECURITY CONTROLS', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"2-x-large"} -->
		<h2 class="wp-block-heading has-2-x-large-font-size"><?php echo esc_html__( 'Describe how traffic is handled, stage by stage.', 'monovm-blueprint' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
		<p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__( 'Document only the controls you operate. Add the scope, limitations, and verification source for any protection statement.', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","className":"monovm-blueprint-flow","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"blockGap":{"left":"0"}}}} -->
		<div class="wp-block-columns alignwide monovm-blueprint-flow" style="margin-top:var(--wp--preset--spacing--80)">
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"className":"monovm-blueprint-panel","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} --><div class="wp-block-group monovm-blueprint-panel has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--line);border-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"textColor":"signal","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family"><?php echo esc_html__( 'STAGE 01', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Inbound traffic', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Identify the networks and traffic types included in your documented process.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"className":"monovm-blueprint-panel","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} --><div class="wp-block-group monovm-blueprint-panel has-border-color has-surface-alt-background-color has-background" style="border-color:var(--wp--preset--color--line);border-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"textColor":"signal","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family"><?php echo esc_html__( 'STAGE 02', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Filtering layer', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'List the checks or mitigation controls that are actually present, including their limits.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"className":"monovm-blueprint-panel","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} --><div class="wp-block-group monovm-blueprint-panel has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--line);border-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"textColor":"signal","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family"><?php echo esc_html__( 'STAGE 03', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Isolated service', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Explain the isolation boundary and which responsibilities remain with the customer.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"className":"monovm-blueprint-panel","style":{"border":{"color":"var:preset|color|line","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} --><div class="wp-block-group monovm-blueprint-panel has-border-color has-surface-alt-background-color has-background" style="border-color:var(--wp--preset--color--line);border-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"textColor":"signal","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family"><?php echo esc_html__( 'STAGE 04', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Monitoring and response', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Describe the signal, escalation path, and response window your team has verified.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"muted","fontSize":"small"} -->
		<p class="has-muted-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'DDoS capacity, coverage, response, and compliance statements require a current source and defined scope.', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
