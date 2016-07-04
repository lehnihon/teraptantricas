<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<header id="header">
		<div class="container">
			<div class="row header-logo">
				<div class="col-md-2 col-md-offset-5 logo-center">
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Home</a></li
						><li><a href="<?php echo esc_url( home_url( '/' )."atelie-culinario" ); ?>">Vintage Poker</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."eventos"; ?>">Agenda</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>">Fotos</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."blog"; ?>">Contato</a></li></ul>
					</div>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>"/></a>
				</div>
				<div class="col-md-offset-3 col-md-2 redes">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="https://www.instagram.com/aromasabor/"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/restaurantearomasabor/?fref=ts"></a></li>
					</ul>					
				</div>
			</div><!-- .row -->
			<div class="row header-menu">
				<div class="col-md-12">
					<nav>
						<ul class="menu-principal clearfix">
						<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Home</a></li
						><li><a href="<?php echo esc_url( home_url( '/' )."atelie-culinario" ); ?>">Vintage Poker</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."eventos"; ?>">Agenda</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>">Fotos</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."blog"; ?>">Contato</a></li>
						</ul>
					</nav><!-- #site-navigation -->						
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


