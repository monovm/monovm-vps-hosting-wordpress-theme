<?php
/**
 * Title: Blog and tutorials
 * Slug: monovm-blueprint/blog-tutorials
 * Categories: monovm-blueprint, posts
 * Description: A lead article and chronological tutorial list using two Core Query Loops.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","className":"monovm-blueprint-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|70","bottom":"var:preset|spacing|90","left":"var:preset|spacing|70"}}},"backgroundColor":"surface","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull monovm-blueprint-section has-ink-color has-surface-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"monovm-blueprint-kicker","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"signal","fontSize":"small","fontFamily":"technical"} -->
		<p class="monovm-blueprint-kicker has-signal-color has-text-color has-technical-font-family has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( '11 / LEARN', 'monovm-blueprint' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"2-x-large"} -->
		<h2 class="wp-block-heading has-2-x-large-font-size"><?php echo esc_html__( 'Guides for planning and operating infrastructure.', 'monovm-blueprint' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"blockGap":{"left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--80)">
			<!-- wp:column {"width":"58%"} -->
			<div class="wp-block-column" style="flex-basis:58%">
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small","fontFamily":"technical"} -->
				<p class="has-muted-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'LATEST ARTICLE', 'monovm-blueprint' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
						<!-- wp:post-date {"textColor":"muted","fontSize":"small","fontFamily":"technical"} /-->
						<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->
						<!-- wp:post-excerpt {"moreText":<?php echo wp_json_encode( __( 'Read the article', 'monovm-blueprint' ) ); ?>} /-->
					<!-- /wp:post-template -->

					<!-- wp:query-no-results -->
						<!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Publish a post to feature the latest article here.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph -->
					<!-- /wp:query-no-results -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"42%"} -->
			<div class="wp-block-column" style="flex-basis:42%">
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small","fontFamily":"technical"} -->
				<p class="has-muted-color has-text-color has-technical-font-family has-small-font-size"><?php echo esc_html__( 'MORE TUTORIALS', 'monovm-blueprint' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|line","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
							<!-- wp:post-date {"textColor":"muted","fontSize":"small","fontFamily":"technical"} /-->
							<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
						</div>
						<!-- /wp:group -->
					<!-- /wp:post-template -->

					<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-query-pagination"><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-next /--></div>
					<!-- /wp:query-pagination -->

					<!-- wp:query-no-results -->
						<!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php echo esc_html__( 'Additional posts will appear here in chronological order.', 'monovm-blueprint' ); ?></p><!-- /wp:paragraph -->
					<!-- /wp:query-no-results -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
