<?php
/**
 * The template for displaying the single staff member facebook link.
 *
 * This template can be overridden by copying it to yourtheme/sslp-templates/single-staff-member/staff-facebook.php
 *
 * @since 2.1
 *
 * @package    Simple_Staff_List
 * @subpackage Simple_Staff_List/public/templates
 * @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$facebook = get_post_meta( $post->ID, '_staff_member_fb', true );
if ( '' !== $facebook ) {
	echo '<span class="facebook"><a class="staff-member-facebook" href="' . esc_attr( $facebook ) . '" title="Find ' . esc_attr( get_the_title() ) . ' on Facebook">' . file_get_contents( STAFFLIST_URI . 'public/svg/facebook.svg' ) . '</a></span>';
}
