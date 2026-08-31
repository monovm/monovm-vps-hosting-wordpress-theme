<?php
/**
 * Title: Internal search content
 * Slug: monovm-blueprint/hidden-search
 * Categories: monovm-blueprint, posts
 * Description: Internal translatable content composition for search results.
 * Viewport Width: 1280
 * Inserter: no
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
		<p class="has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'SEARCH / RESULTS', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:query-title {"type":"search","showPrefix":false,"fontSize":"3-x-large"} /-->
		<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search', 'monovm-blueprint' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search this site', 'monovm-blueprint' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'monovm-blueprint' ) ); ?>,"buttonUseIcon":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"query":{"inherit":true},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--80)">
		<!-- wp:post-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"x-large"} /-->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group"><!-- wp:post-date {"textColor":"muted","fontSize":"small","fontFamily":"technical"} /--><!-- wp:post-terms {"term":"category","textColor":"signal","fontSize":"small"} /--></div>
				<!-- /wp:group -->
				<!-- wp:post-excerpt {"moreText":<?php echo wp_json_encode( __( 'Open result', 'monovm-blueprint' ) ); ?>} /-->
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
				<!-- wp:heading {"level":2,"fontSize":"x-large"} --><h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'No matching content', 'monovm-blueprint' ); ?></h2><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Check the spelling, try fewer words, or search for a broader term.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search again', 'monovm-blueprint' ) ); ?>,"showLabel":true,"placeholder":<?php echo wp_json_encode( __( 'Try another search', 'monovm-blueprint' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'monovm-blueprint' ) ); ?>,"buttonUseIcon":false} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
