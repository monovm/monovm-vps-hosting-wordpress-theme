<?php
/**
 * Title: Cloud service page
 * Slug: monovm-blueprint/page-cloud-service
 * Categories: monovm-blueprint, services
 * Description: A complete cloud service starter page with architecture, benefits, security, regions, FAQs, and next steps.
 * Viewport Width: 1440
 * Keywords: cloud, compute, infrastructure, service page
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-canvas-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"textColor":"signal","fontSize":"small","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'SERVICE BLUEPRINT / CLOUD', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"fontSize":"3-x-large"} --><h2 class="wp-block-heading has-3-x-large-font-size"><?php echo esc_html__( 'Explain cloud infrastructure without abstraction overload.', 'monovm-blueprint' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted","fontSize":"large"} --><p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__( 'Present compute, storage, network, operations, and regional availability as one coherent service journey.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php require get_theme_file_path( 'patterns/service-grid.php' ); ?>
<?php require get_theme_file_path( 'patterns/server-specifications.php' ); ?>
<?php require get_theme_file_path( 'patterns/benefits-features.php' ); ?>
<?php require get_theme_file_path( 'patterns/security-ddos.php' ); ?>
<?php require get_theme_file_path( 'patterns/data-center-locations.php' ); ?>
<?php require get_theme_file_path( 'patterns/faq.php' ); ?>
<?php require get_theme_file_path( 'patterns/final-cta.php' ); ?>
