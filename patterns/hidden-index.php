<?php
/**
 * Title: Internal index content
 * Slug: monovm-vps/hidden-index
 * Categories: monovm-vps, posts
 * Description: Internal translatable content composition for the index template.
 * Viewport Width: 1280
 * Inserter: no
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
		<p class="has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'INDEX / CONTENT', 'monovm-vps' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"fontSize":"3-x-large"} -->
		<h1 class="wp-block-heading has-3-x-large-font-size"><?php echo esc_html__( 'Latest content', 'monovm-vps' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
		<p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__( 'Browse articles, pages, and technical notes published on this site.', 'monovm-vps' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"query":{"inherit":true},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--80)">
		<!-- wp:post-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:post-terms {"term":"category","textColor":"signal","fontSize":"small","fontFamily":"technical"} /-->
				<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"x-large"} /-->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group"><!-- wp:post-date {"textColor":"muted","fontSize":"small","fontFamily":"technical"} /--><!-- wp:post-author-name {"isLink":true,"textColor":"muted","fontSize":"small"} /--></div>
				<!-- /wp:group -->
				<!-- wp:post-excerpt {"moreText":<?php echo wp_json_encode( __( 'Read article', 'monovm-vps' ) ); ?>} /-->
				<!-- wp:separator {"backgroundColor":"line","className":"is-style-wide"} --><hr class="wp-block-separator has-text-color has-line-color has-alpha-channel-opacity has-line-background-color has-background is-style-wide"/><!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-query-pagination"><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /--></div>
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:heading {"level":2,"fontSize":"x-large"} --><h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'No content found', 'monovm-vps' ); ?></h2><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Try a different search or use the navigation to explore the site.', 'monovm-vps' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search', 'monovm-vps' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search this site', 'monovm-vps' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'monovm-vps' ) ); ?>,"buttonUseIcon":false} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
