<?php
/**
 * Seed the public WordPress Playground demo.
 *
 * This file is embedded into blueprint.json by the build script. It is not
 * included in the installable theme package.
 */

require_once '/wordpress/wp-load.php';

/**
 * Render one registered theme pattern into portable block markup.
 *
 * @param string $slug Pattern filename without its extension.
 * @return string
 */
function monovm_blueprint_demo_pattern( $slug ) {
	$path = get_theme_file_path( 'patterns/' . sanitize_file_name( $slug ) . '.php' );

	if ( ! file_exists( $path ) ) {
		throw new RuntimeException( 'Missing demo pattern: ' . $slug );
	}

	ob_start();
	require $path;

	return trim( (string) ob_get_clean() );
}

/**
 * Create or update a demo page by slug.
 *
 * @param array $page Page definition.
 * @param array $ids  Previously created page IDs, keyed by slug.
 * @return int
 */
function monovm_blueprint_demo_upsert_page( $page, $ids ) {
	$existing = get_page_by_path( $page['slug'], OBJECT, 'page' );
	$parent   = isset( $page['parent'] ) ? (int) $ids[ $page['parent'] ] : 0;
	$data     = array(
		'post_title'     => $page['title'],
		'post_name'      => $page['slug'],
		'post_content'   => $page['content'],
		'post_status'    => 'publish',
		'post_type'      => 'page',
		'post_parent'    => $parent,
		'menu_order'     => $page['order'],
		'comment_status' => 'closed',
	);

	if ( $existing ) {
		$data['ID'] = $existing->ID;
		$result     = wp_update_post( wp_slash( $data ), true );
	} else {
		$result = wp_insert_post( wp_slash( $data ), true );
	}

	if ( is_wp_error( $result ) ) {
		throw new RuntimeException( $result->get_error_message() );
	}

	return (int) $result;
}

$sample_page = get_page_by_path( 'sample-page', OBJECT, 'page' );
if ( $sample_page ) {
	wp_delete_post( $sample_page->ID, true );
}

$hello_world = get_page_by_path( 'hello-world', OBJECT, 'post' );
if ( $hello_world ) {
	wp_delete_post( $hello_world->ID, true );
}

$pages = array(
	array(
		'title'   => 'Home',
		'slug'    => 'home',
		'content' => '',
		'order'   => 0,
	),
	array(
		'title'   => 'Services',
		'slug'    => 'services',
		'content' => monovm_blueprint_demo_pattern( 'service-grid' ) . "\n\n" . monovm_blueprint_demo_pattern( 'benefits-features' ) . "\n\n" . monovm_blueprint_demo_pattern( 'final-cta' ),
		'order'   => 10,
	),
	array(
		'title'   => 'VPS Hosting',
		'slug'    => 'vps-hosting',
		'content' => monovm_blueprint_demo_pattern( 'page-vps-service' ),
		'parent'  => 'services',
		'order'   => 11,
	),
	array(
		'title'   => 'Cloud Hosting',
		'slug'    => 'cloud-hosting',
		'content' => monovm_blueprint_demo_pattern( 'page-cloud-service' ),
		'parent'  => 'services',
		'order'   => 12,
	),
	array(
		'title'   => 'Dedicated Servers',
		'slug'    => 'dedicated-servers',
		'content' => monovm_blueprint_demo_pattern( 'page-dedicated-servers' ),
		'parent'  => 'services',
		'order'   => 13,
	),
	array(
		'title'   => 'Pricing',
		'slug'    => 'pricing',
		'content' => monovm_blueprint_demo_pattern( 'page-pricing' ),
		'order'   => 20,
	),
	array(
		'title'   => 'Network Locations',
		'slug'    => 'network-locations',
		'content' => monovm_blueprint_demo_pattern( 'page-network-locations' ),
		'order'   => 30,
	),
	array(
		'title'   => 'About',
		'slug'    => 'about',
		'content' => monovm_blueprint_demo_pattern( 'page-company-about' ),
		'order'   => 40,
	),
	array(
		'title'   => 'Contact',
		'slug'    => 'contact',
		'content' => monovm_blueprint_demo_pattern( 'page-contact' ),
		'parent'  => 'about',
		'order'   => 41,
	),
	array(
		'title'   => 'Support',
		'slug'    => 'support',
		'content' => monovm_blueprint_demo_pattern( 'page-support-center' ),
		'order'   => 50,
	),
	array(
		'title'   => 'Blog',
		'slug'    => 'blog',
		'content' => '',
		'order'   => 60,
	),
);

$page_ids = array();
foreach ( $pages as $page ) {
	$page_ids[ $page['slug'] ] = monovm_blueprint_demo_upsert_page( $page, $page_ids );
}

$posts = array(
	array(
		'title'   => 'How to choose a VPS resource profile',
		'slug'    => 'choose-a-vps-resource-profile',
		'excerpt' => 'A practical framework for comparing CPU, memory, storage, and transfer allowances.',
	),
	array(
		'title'   => 'What to verify before selecting a data center',
		'slug'    => 'verify-a-data-center-location',
		'excerpt' => 'Turn location labels into useful questions about routing, operations, and support.',
	),
	array(
		'title'   => 'A clear way to explain infrastructure security',
		'slug'    => 'explain-infrastructure-security',
		'excerpt' => 'Separate platform safeguards, customer responsibilities, and operational processes.',
	),
);

foreach ( $posts as $index => $post ) {
	$existing = get_page_by_path( $post['slug'], OBJECT, 'post' );
	$content  = '<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">' . esc_html( $post['excerpt'] ) . '</p><!-- /wp:paragraph -->' .
		'<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Start with the requirement</h2><!-- /wp:heading -->' .
		'<!-- wp:paragraph --><p>Use this demonstration article as a starting point for verified, customer-focused guidance. Replace the sample copy with current technical and commercial information before publication.</p><!-- /wp:paragraph -->' .
		'<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Compare evidence, not labels</h2><!-- /wp:heading -->' .
		'<!-- wp:paragraph --><p>Document the assumptions behind each recommendation, link to maintained specifications, and give readers a clear next step.</p><!-- /wp:paragraph -->';
	$data     = array(
		'post_title'     => $post['title'],
		'post_name'      => $post['slug'],
		'post_excerpt'   => $post['excerpt'],
		'post_content'   => $content,
		'post_status'    => 'publish',
		'post_type'      => 'post',
		'post_date'      => gmdate( 'Y-m-d H:i:s', strtotime( '-' . ( $index + 1 ) . ' days' ) ),
		'comment_status' => 'closed',
	);

	if ( $existing ) {
		$data['ID'] = $existing->ID;
		$result     = wp_update_post( wp_slash( $data ), true );
	} else {
		$result = wp_insert_post( wp_slash( $data ), true );
	}

	if ( is_wp_error( $result ) ) {
		throw new RuntimeException( $result->get_error_message() );
	}
}

update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $page_ids['home'] );
update_option( 'page_for_posts', $page_ids['blog'] );
update_option( 'permalink_structure', '/%postname%/' );
update_option( 'blogname', 'Atlas Compute' );
update_option( 'blogdescription', 'Virtual infrastructure, clearly presented' );

flush_rewrite_rules();

