<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<!-- Custom code -->
	<link href="https://fonts.googleapis.com/css?family=Reenie+Beanie|Titillium+Web:400,600,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">

		<header>
			<nav>
				<?php
					wp_nav_menu( array(
						'menu' => 'Main Menu'
					) );
				?>
			</nav>
		</header>

		<div id="content" class="site-content">
