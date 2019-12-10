<?php
/**
 * The default template for displaying header
 *
 * @package WordPress
 * @subpackage WP Sierra Theme
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

<header>

	<?php do_action( 'wpsierra_header' ); ?>

	<?php wpsierra_search_full(); ?>
	<div class="placeholder"></div>
</header>
