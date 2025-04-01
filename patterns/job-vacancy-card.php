<?php
/**
 * Title: Job Vacancy Card
 * Slug: therapize/job-vacancy-card
 * Categories: therapize
 * Keywords: job, card
 *
 * @package therapize
 */

$strings = array(
	'title'        => __( 'Mortgage and Protection Adviser', 'therapize' ),
	'location'     => __( 'Hampshire', 'therapize' ),
	'pay'          => __( '£20,000 - £130,000', 'therapize' ),
	'type'         => __( 'Permanent, Full-time', 'therapize' ),
	'requirements' => __( '3+ Years Experience', 'therapize' ),
	'button'       => __( 'View', 'therapize' ),
);

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"1rem"},"elements":{"link":{"color":{"text":"var:preset|color|theme-white"}}}},"backgroundColor":"theme-green-dark","textColor":"theme-white","className":"has-overflow-hidden has-shadow-soft","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-overflow-hidden has-shadow-soft has-theme-white-color has-theme-green-dark-background-color has-text-color has-background has-link-color" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"left","level":3,"textColor":"theme-white"} -->
	<h3 class="wp-block-heading has-text-align-left has-theme-white-color has-text-color"><?php echo esc_html( $strings['title'] ); ?></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"theme-green","fontFamily":"body"} -->
	<h5 class="wp-block-heading has-text-align-left has-theme-green-color has-text-color has-body-font-family" style="text-transform:uppercase"><?php echo esc_html( $strings['location'] ); ?></h5>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html( $strings['pay'] ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html( $strings['type'] ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html( $strings['requirements'] ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill">
			<a class="wp-block-button__link wp-element-button" href="#protection"><?php echo esc_html( $strings['button'] ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
