<?php
/**
 * Title: Dedicated servers page
 * Slug: monovm-blueprint/page-dedicated-servers
 * Categories: monovm-blueprint, services
 * Description: A detailed dedicated-server starter page covering hardware, comparison, security, support, and FAQs.
 * Viewport Width: 1440
 * Keywords: dedicated server, bare metal, hardware, service page
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-canvas-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"textColor":"signal","fontSize":"small","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'SERVICE BLUEPRINT / DEDICATED', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"fontSize":"3-x-large"} --><h2 class="wp-block-heading has-3-x-large-font-size"><?php echo esc_html__( 'Turn hardware choices into a readable service page.', 'monovm-blueprint' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted","fontSize":"large"} --><p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__( 'Describe available profiles, deployment expectations, protection, and the support boundary without implying live inventory.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php require get_theme_file_path( 'patterns/server-specifications.php' ); ?>
<?php require get_theme_file_path( 'patterns/plan-comparison.php' ); ?>
<?php require get_theme_file_path( 'patterns/security-ddos.php' ); ?>
<?php require get_theme_file_path( 'patterns/benefits-features.php' ); ?>
<?php require get_theme_file_path( 'patterns/support-channels.php' ); ?>
<?php require get_theme_file_path( 'patterns/faq.php' ); ?>
<?php require get_theme_file_path( 'patterns/final-cta.php' ); ?>
