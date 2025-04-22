<?php
/**
 * Title: Posts: Latest 3
 * Slug: therapize/posts-latest-3
 * Categories: therapize
 * Keywords: posts, latest, section
 *
 * @package therapize
 */

$strings = array(
	'title'    => __( 'Latest Posts', 'therapize' ),
	'button'   => __( 'See All', 'therapize' ),
	'readmore' => __( 'Read More', 'therapize' ),
);

?>
<!-- wp:group {"metadata":{"name":"Posts"},"className":"pattern-posts-latest-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group pattern-posts-latest-3">
	<!-- wp:heading {"textAlign":"center","fontSize":"xxx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php echo esc_html( $strings['title'] ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:query {"queryId":24,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"textAlign":"center","level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"italic","fontWeight":"700"}},"fontFamily":"body"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:bigup-blocks/vector-shapes -->
			<div class="wp-block-bigup-blocks-vector-shapes alignfull" style="--bottomColour:#f2f3ef;--topColour:#f2f3ef;--lineColor:#33786b;--lineVisible:visible;--lineWidth:1rem">
				<svg class="vectorShapeWave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 100" data-top-colour="#f2f3ef" data-bottom-colour="#f2f3ef" data-line-colour="#33786b" data-line-visible="visible" data-line-width="1rem">
					<path class="vectorShapeWave_top" fill="var(--topColour)" d="M0 0v50s319-54 960 0c641 55 960 0 960 0V0Z"></path>
					<path class="vectorShapeWave_bottom" fill="var(--bottomColour)" d="M960 50c641 55 960 0 960 0v50H0V50s319-54 960 0Z"></path>
					<path class="vectorShapeWave_line" stroke-width="var(--lineWidth)" stroke="var(--lineColor)" style="visibility:var(--lineVisible)" fill="none" stroke-linecap="round" d="M0 50s312-55 960 0 960 0 960 0"></path>
				</svg>
			</div>
			<!-- /wp:bigup-blocks/vector-shapes -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:post-excerpt {"moreText":"<?php echo esc_html( $strings['readmore'] ); ?>","showMoreOnNewLine":true} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/reviews/"><?php echo esc_html( $strings['button'] ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
