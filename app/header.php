<!-- template: header -->
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="initial-scale=1, viewport-fit=cover">
    <link href="https://micro.blog/johlym" rel="me" />
    <link href="https://github.com/johlym" rel="me" />
    <link href="https://twitter.com/_johlym" rel="me" />
    <?php wp_head(); ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-2388420144037757",
        enable_page_level_ads: true
      });
    </script>
</head>

<body class="body"> 


<div class="mobile-header">
  <div class="column-1">
    <div class="mobile-title">
      <h1><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>  
    </div>
    <div class="mobile-menu">
      <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>  
    </div>
  </div>
  <div class="column-2">

  </div>
    
</div>
<div class="container">
  <div class="header">
    <div class="site-title">
    <h1><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
    </div>
  </div>
</div>
<!-- / template: header -->

