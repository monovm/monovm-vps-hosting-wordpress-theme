<?php
/**
 * Title: Testimonials
 * Slug: monovm-blueprint/testimonials
 * Categories: monovm-blueprint, testimonials
 * Description: Explicit quote and attribution placeholders without fictional identities or ratings.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-ink-color has-surface-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"960px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"monovm-blueprint-kicker","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
		<p class="monovm-blueprint-kicker has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( '09 / CUSTOMER EVIDENCE', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"2-x-large"} -->
		<h2 class="wp-block-heading has-2-x-large-font-size"><?php echo esc_html__( 'Add a real, sourced customer perspective.', 'monovm-blueprint' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:quote {"className":"is-style-plain","style":{"border":{"left":{"color":"var:preset|color|signal","width":"2px"}},"spacing":{"padding":{"left":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"fontSize":"x-large"} -->
		<blockquote class="wp-block-quote is-style-plain has-x-large-font-size" style="border-left-color:var(--wp--preset--color--signal);border-left-width:2px;margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--70)"><!-- wp:paragraph --><p><?php echo esc_html__( 'Customer quote', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><cite><?php echo esc_html__( 'Customer name / Company', 'monovm-blueprint' ); ?></cite></blockquote>
		<!-- /wp:quote -->

		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:quote {"className":"is-style-plain","fontSize":"medium"} --><blockquote class="wp-block-quote is-style-plain has-medium-font-size"><!-- wp:paragraph --><p><?php echo esc_html__( 'Optional customer quote', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><cite><?php echo esc_html__( 'Customer name / Company', 'monovm-blueprint' ); ?></cite></blockquote><!-- /wp:quote --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:quote {"className":"is-style-plain","fontSize":"medium"} --><blockquote class="wp-block-quote is-style-plain has-medium-font-size"><!-- wp:paragraph --><p><?php echo esc_html__( 'Optional customer quote', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><cite><?php echo esc_html__( 'Customer name / Company', 'monovm-blueprint' ); ?></cite></blockquote><!-- /wp:quote --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
		<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Publish only with the customer’s permission and a source your organization can verify.', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
