<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-name
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="is-observer">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script>
      // Picture element HTML5 shiv
      document.createElement('picture');
    </script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
  your browser</a> to improve your experience and security.</p>
<![endif]-->


<header class="header">
  <div class="header__inner ">
    <div class="header__menu">
      <p class="body-p">Menu</p>      
    </div>
    <a href="<?php echo home_url(); ?>"><?php _get_template_part('templates/components/_logo'); ?></a>
  </div>
</header>

<div class="page-tranition"></div>

<?php _get_template_part('templates/components/_fly-out-nav'); ?>

<main-wrap data-barba="wrapper">
  <main data-barba="container" data-barba-namespace="<?php echo basename(get_permalink()) ?>">







