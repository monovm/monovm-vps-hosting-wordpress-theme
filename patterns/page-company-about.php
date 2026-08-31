<?php
/**
 * Title: Infrastructure company page
 * Slug: monovm-blueprint/page-company-about
 * Categories: monovm-blueprint, about
 * Description: An editable company page for positioning, operating principles, services, proof, customer context, and articles.
 * Viewport Width: 1440
 * Keywords: about, company, story, operations
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-canvas-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"textColor":"signal","fontSize":"small","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'COMPANY / OPERATING MODEL', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"fontSize":"3-x-large"} --><h2 class="wp-block-heading has-3-x-large-font-size"><?php echo esc_html__( 'Explain who operates the infrastructure and how.', 'monovm-blueprint' ); ?></h2><!-- /wp:heading --><!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} --><div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Purpose', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Replace this paragraph with the problem your company exists to solve and the customers it is equipped to serve.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Operating principles', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Describe the verified practices that guide capacity, security, support, and communication.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div>
<!-- /wp:group -->

<?php require get_theme_file_path( 'patterns/service-grid.php' ); ?>
<?php require get_theme_file_path( 'patterns/trust-strip.php' ); ?>
<?php require get_theme_file_path( 'patterns/benefits-features.php' ); ?>
<?php require get_theme_file_path( 'patterns/testimonials.php' ); ?>
<?php require get_theme_file_path( 'patterns/blog-tutorials.php' ); ?>
<?php require get_theme_file_path( 'patterns/final-cta.php' ); ?>
