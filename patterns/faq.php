<?php
/**
 * Title: VPS frequently asked questions
 * Slug: monovm-blueprint/faq
 * Categories: monovm-blueprint, text
 * Description: Common editable VPS questions built with native Details blocks.
 * Viewport Width: 960
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","textColor":"ink","layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-ink-color has-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"className":"monovm-blueprint-kicker","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
	<p class="monovm-blueprint-kicker has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( '10 / QUESTIONS', 'monovm-blueprint' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"fontSize":"2-x-large"} -->
	<h2 class="wp-block-heading has-2-x-large-font-size"><?php echo esc_html__( 'Answer the questions that shape a server decision.', 'monovm-blueprint' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Edit each answer to match your current service terms, technical scope, and support process.', 'monovm-blueprint' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80)">
		<!-- wp:details -->
		<details class="wp-block-details"><summary><?php echo esc_html__( 'Which operating systems are available?', 'monovm-blueprint' ); ?></summary><!-- wp:paragraph --><p><?php echo esc_html__( 'List the supported operating-system images, version policy, and any customer-supplied image option.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details -->
		<details class="wp-block-details"><summary><?php echo esc_html__( 'Can I change the server resources later?', 'monovm-blueprint' ); ?></summary><!-- wp:paragraph --><p><?php echo esc_html__( 'Describe which resources can change, the expected process, and any restart or migration requirement.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details -->
		<details class="wp-block-details"><summary><?php echo esc_html__( 'What is included in the network allocation?', 'monovm-blueprint' ); ?></summary><!-- wp:paragraph --><p><?php echo esc_html__( 'State the port, transfer allowance, measurement period, overage terms, and traffic-policy link.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details -->
		<details class="wp-block-details"><summary><?php echo esc_html__( 'Who is responsible for backups and updates?', 'monovm-blueprint' ); ?></summary><!-- wp:paragraph --><p><?php echo esc_html__( 'Clarify the customer and provider responsibilities for backups, operating-system updates, and recovery tests.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details -->
		<details class="wp-block-details"><summary><?php echo esc_html__( 'How do I request support?', 'monovm-blueprint' ); ?></summary><!-- wp:paragraph --><p><?php echo esc_html__( 'Add the configured support destinations, availability window, response expectations, and best use for each channel.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></details>
		<!-- /wp:details -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
