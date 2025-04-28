<?php
/**
 * Title: Referral Promotion
 * Slug: therapize/referral-promotion
 * Categories: therapize
 * Keywords: referral, promotion
 *
 * @package therapize
 */

$strings = array(
	'title'       => __( 'Refer Friends and Get Rewarded', 'therapize' ),
	'byline'      => __( 'We appreciate your loyalty and would like to offer you a little thanks for spreading the word!', 'therapize' ),
	'tiers'       => array(
		'item' => __( 'Referral', 'therapize' ),
		'nths' => array(
			'1' => __( '1st', 'therapize' ),
			'2' => __( '2nd', 'therapize' ),
			'3' => __( '3rd', 'therapize' ),
			'4' => __( '4th', 'therapize' ),
			'5' => __( '5th', 'therapize' ),
			'6' => __( '6th', 'therapize' ),
		),
	),
	'tandc_title' => __( 'Terms and conditions', 'therapize' ),
);

$eyebrow_image = THERAPIZE_URL . 'assets/svg/pattern-images/spread-the-love.svg';
$primary_image = THERAPIZE_URL . 'assets/svg/pattern-images/shape-01.svg';

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"className":"loyalty","layout":{"type":"constrained"},"metadata":{"name":"Loyalty"}} -->
	<div class="wp-block-group alignfull loyalty">
		<!-- wp:group {"align":"full","backgroundColor":"theme-green-dark","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-theme-green-dark-background-color has-background">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:columns {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}},"spacing":{"blockGap":{"left":"0"}}},"textColor":"theme-white"} -->
				<div class="wp-block-columns has-theme-white-color has-text-color has-link-color">
					<!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
					<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:40%">
						<!-- wp:group {"layout":{"type":"constrained","contentSize":"30rem"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"loyalty_loveBadge"} -->
							<figure class="wp-block-image size-large loyalty_loveBadge">
								<img src="<?php echo esc_html( $eyebrow_image ); ?>" alt="Megaphone with the words shouting out &quot;SPREAD THE LOVE!&quot;" />
							</figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"60%"} -->
					<div class="wp-block-column" style="flex-basis:60%">
						<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"}},"fontSize":"display-small","fontFamily":"body"} -->
						<h2 class="wp-block-heading has-text-align-center has-body-font-family has-display-small-font-size" style="font-style:normal;font-weight:800;text-transform:uppercase"><?php echo esc_html( $strings['title'] ); ?></h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"bottom":"var:preset|spacing|50"},"padding":{"right":"0","left":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"1rem"}},"className":"has-overflow-hidden"} -->
				<div class="wp-block-columns has-overflow-hidden" style="border-radius:1rem;margin-bottom:var(--wp--preset--spacing--50);padding-right:0;padding-left:0">
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"loyalty_image"} -->
						<figure class="wp-block-image size-full loyalty_image">
							<img src="<?php echo esc_html( $primary_image ); ?>" alt=""/>
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"theme-white"} -->
					<div class="wp-block-column has-theme-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);flex-basis:50%">
						<!-- wp:paragraph {"align":"center"} -->
						<p class="has-text-align-center"><?php echo esc_html( $strings['byline'] ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
							<div class="wp-block-group" style="padding-right:0;padding-left:0">
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
								<div class="wp-block-group">
									<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"fontSize":"small"} -->
									<div class="wp-block-group has-small-font-size">
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['nths']['1'] ); ?></p>
										<!-- /wp:paragraph -->
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['item'] ); ?></p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
									<!-- wp:cover {"overlayColor":"theme-black","minHeight":3,"minHeightUnit":"rem","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"100rem"}},"className":"has-square-aspect-ratio","layout":{"type":"default"}} -->
									<div class="wp-block-cover has-square-aspect-ratio" style="border-radius:100rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:3rem">
										<span aria-hidden="true" class="wp-block-cover__background has-theme-black-background-color has-background-dim-100 has-background-dim"></span>
										<div class="wp-block-cover__inner-container">
											<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}}},"textColor":"theme-white","fontSize":"medium"} -->
											<p class="has-text-align-center has-theme-white-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:700">£25</p>
											<!-- /wp:paragraph -->
										</div>
									</div>
									<!-- /wp:cover -->
								</div>
								<!-- /wp:group -->
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
								<div class="wp-block-group">
									<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"fontSize":"small"} -->
									<div class="wp-block-group has-small-font-size">
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['nths']['2'] ); ?></p>
										<!-- /wp:paragraph -->
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['item'] ); ?></p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
									<!-- wp:cover {"overlayColor":"theme-black","minHeight":3,"minHeightUnit":"rem","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"100rem"}},"className":"has-square-aspect-ratio","layout":{"type":"default"}} -->
									<div class="wp-block-cover has-square-aspect-ratio" style="border-radius:100rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:3rem">
										<span aria-hidden="true" class="wp-block-cover__background has-theme-black-background-color has-background-dim-100 has-background-dim"></span>
										<div class="wp-block-cover__inner-container">
											<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}}},"textColor":"theme-white","fontSize":"medium"} -->
											<p class="has-text-align-center has-theme-white-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:700">£50</p>
											<!-- /wp:paragraph -->
										</div>
									</div>
									<!-- /wp:cover -->
								</div>
								<!-- /wp:group -->
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
								<div class="wp-block-group">
									<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"fontSize":"small"} -->
									<div class="wp-block-group has-small-font-size">
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['nths']['3'] ); ?></p>
										<!-- /wp:paragraph -->
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['item'] ); ?></p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
									<!-- wp:cover {"overlayColor":"theme-black","minHeight":3,"minHeightUnit":"rem","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"100rem"}},"className":"has-square-aspect-ratio","layout":{"type":"default"}} -->
									<div class="wp-block-cover has-square-aspect-ratio" style="border-radius:100rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:3rem">
										<span aria-hidden="true" class="wp-block-cover__background has-theme-black-background-color has-background-dim-100 has-background-dim"></span>
										<div class="wp-block-cover__inner-container">
											<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}}},"textColor":"theme-white","fontSize":"medium"} -->
											<p class="has-text-align-center has-theme-white-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:700">£75</p>
											<!-- /wp:paragraph -->
										</div>
									</div>
									<!-- /wp:cover -->
								</div>
								<!-- /wp:group -->
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
								<div class="wp-block-group">
									<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"fontSize":"small"} -->
									<div class="wp-block-group has-small-font-size">
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['nths']['4'] ); ?></p>
										<!-- /wp:paragraph -->
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['item'] ); ?></p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
									<!-- wp:cover {"overlayColor":"theme-black","minHeight":3,"minHeightUnit":"rem","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"100rem"}},"className":"has-square-aspect-ratio","layout":{"type":"default"}} -->
									<div class="wp-block-cover has-square-aspect-ratio" style="border-radius:100rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:3rem">
										<span aria-hidden="true" class="wp-block-cover__background has-theme-black-background-color has-background-dim-100 has-background-dim"></span>
										<div class="wp-block-cover__inner-container">
											<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}}},"textColor":"theme-white","fontSize":"medium"} -->
											<p class="has-text-align-center has-theme-white-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:700">£100</p>
											<!-- /wp:paragraph -->
										</div>
									</div>
									<!-- /wp:cover -->
								</div>
								<!-- /wp:group -->
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
								<div class="wp-block-group">
									<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"fontSize":"small"} -->
									<div class="wp-block-group has-small-font-size">
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['nths']['5'] ); ?></p>
										<!-- /wp:paragraph -->
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['item'] ); ?></p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
									<!-- wp:cover {"overlayColor":"theme-black","minHeight":3,"minHeightUnit":"rem","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"100rem"}},"className":"has-square-aspect-ratio","layout":{"type":"default"}} -->
									<div class="wp-block-cover has-square-aspect-ratio" style="border-radius:100rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:3rem">
										<span aria-hidden="true" class="wp-block-cover__background has-theme-black-background-color has-background-dim-100 has-background-dim"></span>
										<div class="wp-block-cover__inner-container">
											<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}}},"textColor":"theme-white","fontSize":"medium"} -->
											<p class="has-text-align-center has-theme-white-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:700">£125</p>
											<!-- /wp:paragraph -->
										</div>
									</div>
									<!-- /wp:cover -->
								</div>
								<!-- /wp:group -->
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
								<div class="wp-block-group">
									<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"fontSize":"small"} -->
									<div class="wp-block-group has-small-font-size">
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['nths']['6'] ); ?></p>
										<!-- /wp:paragraph -->
										<!-- wp:paragraph -->
										<p><?php echo esc_html( $strings['tiers']['item'] ); ?></p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
									<!-- wp:cover {"overlayColor":"theme-black","minHeight":3,"minHeightUnit":"rem","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"100rem"}},"className":"has-square-aspect-ratio","layout":{"type":"default"}} -->
									<div class="wp-block-cover has-square-aspect-ratio" style="border-radius:100rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:3rem">
										<span aria-hidden="true" class="wp-block-cover__background has-theme-black-background-color has-background-dim-100 has-background-dim"></span>
										<div class="wp-block-cover__inner-container">
											<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}}},"textColor":"theme-white","fontSize":"medium"} -->
											<p class="has-text-align-center has-theme-white-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:700">£150</p>
											<!-- /wp:paragraph -->
										</div>
									</div>
									<!-- /wp:cover -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
							<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|theme-black"}}}},"textColor":"theme-black","fontFamily":"body"} -->
							<h3 class="wp-block-heading has-text-align-center has-theme-black-color has-text-color has-link-color has-body-font-family" style="font-style:normal;font-weight:800;text-transform:uppercase">Share Now!</h3>
							<!-- /wp:heading -->
							<!-- wp:social-links {"iconColor":"theme-green","iconColorValue":"#ffb129","iconBackgroundColor":"theme-black","iconBackgroundColorValue":"#181818","openInNewTab":true,"size":"has-large-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
							<ul class="wp-block-social-links has-large-icon-size has-icon-color has-icon-background-color is-style-default">
								<!-- wp:social-link {"url":"","service":"facebook"} /-->
								<!-- wp:social-link {"url":"","service":"linkedin"} /-->
								<!-- wp:social-link {"url":"","service":"whatsapp"} /-->
							</ul>
							<!-- /wp:social-links -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"textColor":"theme-white","layout":{"type":"constrained"},"fontSize":"small"} -->
					<div class="wp-block-group has-theme-white-color has-text-color has-link-color has-small-font-size" style="padding-bottom:var(--wp--preset--spacing--50)">
						<!-- wp:paragraph {"align":"center"} -->
						<p class="has-text-align-center"><?php echo esc_html( $strings['tandc_title'] ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:list -->
						<ul>
							<!-- wp:list-item -->
							<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
