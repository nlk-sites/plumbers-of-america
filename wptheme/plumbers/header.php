<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Bill_Howe
 */
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="<?php bloginfo( 'template_url' ); ?>/js/pirobox_extended/css_pirobox/style_2/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	// js script includes moved to functions.php
?>
</head>

<body <?php body_class(); ?>>

	<div class="hd">
		<div class="wrap">
        	<div class="logo">
            	<h1 class="hide">Plumbers</h1>
                <a href="<?php bloginfo('url') ?>/" title="Plumbers"><img src="<?php bloginfo('template_url') ?>/images/logo2.png" width="328" height="65" alt="Plumbers" /></a>
            </div>
            <?php $phone = plumbers_phonenumber(); ?>
            <div class="phone<?php if ( $phone == '1.800.555.5555' ) echo ' def'; ?>">
            	<h2><?php echo plumbers_phonenumber(); ?></h2>
            </div>

           	<?php wp_nav_menu( array( 'container_class' => 'centeredmenu', 'theme_location' => 'primary' ) ); ?>
            <div class="search">
                <?php get_search_form(); ?>
                <?php /*
                <form action="#">
                    <label for="search">search...</label>
                    <input type="text" class="text" name="search" id="search" />
                    <input type="image" class="image" src="<?php bloginfo('template_url') ?>/images/icons/search.png" />
                </form>
                */ ?>
            </div>
            <?php if(is_front_page()) { ?>

            <?php /*
            <div class="gp home">
                <!-- Place this tag where you want the +1 button to render -->
                <g:plusone count="false" href="<?php bloginfo('url'); ?>"></g:plusone>
            </div>
            */ ?>

            <?php }
            ?>
            <div class="social">
                <?php /*<a target="_blank" href="<?php bloginfo('url'); ?>/feed/" class="rss">RSS</a> */ ?>
                <a target="_blank" href="http://www.facebook.com/plumberscompanies" class="fb">Facebook</a>
                <a target="_blank" href="http://twitter.com/BHowePlumbing" class="tw">Twitter</a>
                <a target="_blank" href="http://www.youtube.com/user/plumbersPlumbing" class="yt">YouTube</a>
                <a target="_blank" href="https://plus.google.com/111275633734585780210/about" class="gp">Google+</a>
            </div>
        </div>
    </div>
