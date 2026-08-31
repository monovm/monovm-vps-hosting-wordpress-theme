<?php
/**
 * Title: Service grid
 * Slug: monovm-blueprint/service-grid
 * Categories: monovm-blueprint, services
 * Description: Numbered service rows for infrastructure and managed-service offers.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-ink-color has-surface-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"monovm-blueprint-kicker","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
		<p class="monovm-blueprint-kicker has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( '02 / SERVICES', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"2-x-large"} -->
		<h2 class="wp-block-heading has-2-x-large-font-size"><?php echo esc_html__( 'Choose the service boundary that fits the work.', 'monovm-blueprint' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
		<p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__( 'Use these rows to explain what each service includes, who manages it, and where customers should go next.', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;margin-top:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:columns {"verticalAlignment":"top"} -->
			<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"12%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:12%"><!-- wp:paragraph {"textColor":"signal","fontSize":"medium","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-medium-font-size"><?php echo esc_html__( '01', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"28%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:28%"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Virtual private servers', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"45%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Describe the resource choices, management boundary, and workloads covered by this service.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"15%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:15%"><!-- wp:paragraph --><p><a href="<?php echo esc_url( home_url( '/services/vps-hosting/' ) ); ?>"><?php echo esc_html__( 'Explore VPS options', 'monovm-blueprint' ); ?></a></p><!-- /wp:paragraph --></div><!-- /wp:column --></div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:columns {"verticalAlignment":"top"} -->
			<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"12%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:12%"><!-- wp:paragraph {"textColor":"signal","fontSize":"medium","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-medium-font-size"><?php echo esc_html__( '02', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"28%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:28%"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Cloud compute', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"45%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Explain how instances, networks, and storage are organized in your current cloud offer.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"15%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:15%"><!-- wp:paragraph --><p><a href="<?php echo esc_url( home_url( '/services/cloud-hosting/' ) ); ?>"><?php echo esc_html__( 'Review cloud compute', 'monovm-blueprint' ); ?></a></p><!-- /wp:paragraph --></div><!-- /wp:column --></div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:columns {"verticalAlignment":"top"} -->
			<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"12%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:12%"><!-- wp:paragraph {"textColor":"signal","fontSize":"medium","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-medium-font-size"><?php echo esc_html__( '03', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"28%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:28%"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Dedicated servers', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"45%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'State the available hardware scope, deployment process, and support boundary without implying live stock.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"15%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:15%"><!-- wp:paragraph --><p><a href="<?php echo esc_url( home_url( '/services/dedicated-servers/' ) ); ?>"><?php echo esc_html__( 'See server profiles', 'monovm-blueprint' ); ?></a></p><!-- /wp:paragraph --></div><!-- /wp:column --></div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|line","width":"1px"},"bottom":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:columns {"verticalAlignment":"top"} -->
			<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"12%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:12%"><!-- wp:paragraph {"textColor":"signal","fontSize":"medium","fontFamily":"technical"} --><p class="has-signal-color has-text-color has-technical-font-family has-medium-font-size"><?php echo esc_html__( '04', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"28%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:28%"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Managed infrastructure', 'monovm-blueprint' ); ?></h3><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"45%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'List the operational tasks your team performs and the responsibilities that remain with the customer.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"15%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:15%"><!-- wp:paragraph --><p><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php echo esc_html__( 'Understand management scope', 'monovm-blueprint' ); ?></a></p><!-- /wp:paragraph --></div><!-- /wp:column --></div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
