<!-- template: header -->
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="initial-scale=1, viewport-fit=cover">
    <link href="https://micro.blog/johlym" rel="me" />
    <link href="https://github.com/johlym" rel="me" />
    <link href="https://twitter.com/_johlym" rel="me" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:400,700,900" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<body class="body"> 
<div class="header part">
  <div class="site-title">
  <h1><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
  <span class="byline">by Johnathan Lyman</span>
  </div>
  <div class="site-menu">
  <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
  </div>

  <!-- <?php if ( is_active_sidebar( 'ad-block' ) ) : ?>
  <?php dynamic_sidebar( 'ad-block' ); ?>
  <?php endif; ?> -->
</div>
<!-- / template: header -->

