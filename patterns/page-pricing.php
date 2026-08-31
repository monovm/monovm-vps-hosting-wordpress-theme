<?php
/**
 * Title: Pricing and plans page
 * Slug: monovm-blueprint/page-pricing
 * Categories: monovm-blueprint, pricing
 * Description: A complete plans page with pricing cards, comparison details, specifications, FAQs, and a closing action.
 * Viewport Width: 1440
 * Keywords: pricing, plans, comparison, specifications
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-canvas-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"textColor":"signal","fontSize":"small","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'BUYER GUIDE / PLANS', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"fontSize":"3-x-large"} --><h2 class="wp-block-heading has-3-x-large-font-size"><?php echo esc_html__( 'Make every plan difference easy to verify.', 'monovm-blueprint' ); ?></h2><!-- /wp:heading --></div>
<!-- /wp:group -->

<?php require get_theme_file_path( 'patterns/pricing-cards.php' ); ?>
<?php require get_theme_file_path( 'patterns/plan-comparison.php' ); ?>
<?php require get_theme_file_path( 'patterns/server-specifications.php' ); ?>
<?php require get_theme_file_path( 'patterns/faq.php' ); ?>
<?php require get_theme_file_path( 'patterns/final-cta.php' ); ?>
