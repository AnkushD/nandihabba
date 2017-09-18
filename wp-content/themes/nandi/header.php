<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>

<link rel="icon" href="/wp-content/themes/nandi/assets/images/favicon-1.png" type="image/x-icon" />
<link rel="shortcut icon" href="/wp-content/themes/nandi/assets/images/favicon-1.png" type="image/x-icon" />


<meta prefix="og: http://ogp.me/ns#" property="og:url"           content="http://nandihabba.com/" />
<meta prefix="og: http://ogp.me/ns#" property="og:type"          content="website" />
<meta prefix="og: http://ogp.me/ns#" property="og:title"         content="Nandi Habba 2017" />
<meta prefix="og: http://ogp.me/ns#" property="og:description"   content="Enjoy local foods, drinks, arts, culture, games and sports at Nandi Habba 2017!" />
<meta prefix="og: http://ogp.me/ns#" property="og:image"         content="http://nandihabba.com/wp-content/themes/nandi/assets/images/SOCIAL.png" />


<meta name="twitter:card" content="summary_large_image">
<!-- <meta name="twitter:site" content="@s"> -->
<meta name="twitter:creator" content="@nkush">
<meta name="twitter:title" content="Twitter nandi habba">
<meta name="twitter:description" content="Twitter description">
<meta name="twitter:image" content="http://nandihabba.com/wp-content/themes/nandi/assets/images/SOCIAL.png" />


<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <!--
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
    -->

	<header id="masthead" class="site-header n-site-header clearfix" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>


        <div class="n-left-header">
            <ul class="list-inline">
                <li class="n-brand-icon">
                    <a href="/">
                        <img src="/wp-content/themes/nandi/assets/images/NH_LOGO.svg" alt="nandi_logo" />
                    </a>
                </li>
                <li class="n-date">
                     <span>28 - 29 Oct </span>
                     <span>2017</span>
                </li>
                <li class="n-action">
                    <a class="btn n-angled-btn js-ticket-tooltip" href="#/">COUNT ME IN!</a>
                </li>
            </ul>
        </div>

        <div class="dropdown n-share-dropdown n-header-share-dropdown">
            <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Recommend Nandi Habba
                <span class="fa fa-share"></span>
            </a>

            <ul class="dropdown-menu pull-right" aria-labelledby="dLabel">
                <div id="header-share"></div>
            </ul>
        </div>
    
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">

