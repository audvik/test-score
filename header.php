<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyber
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="h-screen antialiased bg-gray-100">
	<?php wp_body_open(); ?>
	<!--<header class="bg-white shadow-sm">
		<div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
			<h2 class="text-lg leading-6 font-semibold text-gray-900">
				//some promotion with closable button
			</h2>
		</div>
	</header>-->
	<?php if(! is_front_page() ):
		get_template_part( 'template-parts/top-navbar' ); 
		endif;
	?>
	<div id="page" class="site">
