 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package VW Restaurant Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-restaurant-lite'); ?></a></div>

  <div class="topheader">
    <div class="container">
      <div class="top-contact col-md-6 col-xs-12 col-sm-6">
        <?php if( get_theme_mod( 'vw_restaurant_lite_contact','' ) != '') { ?>
          <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('vw_restaurant_lite_contact',__('(518) 356-5373','vw-restaurant-lite') )); ?></span>
         <?php } ?>
      </div>   
      <div class="top-email col-md-6 col-xs-12 col-sm-6">
        <?php if( get_theme_mod( 'vw_restaurant_lite_email','' ) != '') { ?>
          <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('vw_restaurant_lite_email',__('example@123.com','vw-restaurant-lite')) ); ?></span>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="header">
    <div class="container">
      <div class="logo col-md-2 col-sm-2">                        
        <?php if( has_custom_logo() ){ vw_restaurant_lite_the_custom_logo();
         }else{ ?>                        
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
        <?php $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?> 
          <p class="site-description"><?php echo esc_html($description); ?></p>       
        <?php endif; }?>
      </div>    

      <div class="menubox col-md-8 col-sm-8 ">                       
        <div class="nav">
            <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
        </div>
      </div>

      <div class="social-media col-md-2 col-sm-2 wow bounceInDown">
        <?php if( get_theme_mod('vw_restaurant_lite_headertwitter') != '' ){ ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_restaurant_lite_headertwitter','https://twitter.com/' ) ); ?>"><i class="fab fa-twitter"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('vw_restaurant_lite_headerpinterest') != '' ){ ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_restaurant_lite_headerpinterest','https://pinterest.com/' ) ); ?>"><i class="fab fa-pinterest-p"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('vw_restaurant_lite_headerfacebook') != '' ){ ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_restaurant_lite_headerfacebook','https://www.facebook.com/' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('vw_restaurant_lite_headeryoutube') != '' ){ ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_restaurant_lite_headeryoutube','' ) ); ?>"><i class="fab fa-youtube"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('vw_restaurant_lite_headerinstagram') != '' ){ ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_restaurant_lite_headerinstagram','' ) ); ?>"><i class="fab fa-instagram"></i></a>
        <?php } ?>
      </div> 
    </div>
  </div>