<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
      <?php
        wp_title( '|', 'true', 'right' );

        bloginfo( 'name' );
      ?>
    </title>

    <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>

    <!--[if (gt IE 8) | (IEMobile)]><!-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->



<?php wp_head(); ?> 
</head>
<body>

<div id="outer-wrap">
<div id="inner-wrap">
  <div class="container">
    <div class="site-header">

      <header id="top" role="banner">
          <div class="block">
              <h1 class="block-title"><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/eoin-leonard.png" alt="site logo" width="70" height="70" class="logo"></a></h1>
              <a class="nav-btn" id="nav-open-btn" href="#nav">Site Navigation</a>
          </div>
      </header>

      <nav id="nav" role="navigation">
          <div class="block">
              <h2 class="block-title">Menu</h2>
              <ul>
                  <?php
                    $args = array (
                      'menu' => 'global-menu'
                      );

                    wp_nav_menu( $args );
                  ?>
              </ul>
              <a class="close-btn" id="nav-close-btn" href="#top">Close</a>
          </div>
      </nav>
    </div>