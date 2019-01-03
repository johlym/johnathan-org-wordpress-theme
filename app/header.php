<!-- template: header -->
<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="initial-scale=1, viewport-fit=cover">
  <?php wp_head(); ?>
</head>
<body class="body"> 
<div class="header part">
  <div class="site-title">
  <h1><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
  <span class="byline"><?php echo get_bloginfo( 'description', 'display' ); ?></span>
  </div>
  <div class="site-menu">
  <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
  </div>
</div>
<!-- / template: header -->

