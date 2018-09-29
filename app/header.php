<!-- template: header -->
<!doctype html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-957608-16"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-957608-16');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="initial-scale=1, viewport-fit=cover">
    
    <script type="text/javascript">
      window.MemberfulOptions = {site: "https://johnathandotorg.memberful.com"};

      (function() {
        var s   = document.createElement('script');

        s.type  = 'text/javascript';
        s.async = true;
        s.src   = 'https://d35xxde4fgg0cx.cloudfront.net/assets/embedded.js';

        setup = function() { window.MemberfulEmbedded.setup(); }

        s.addEventListener("load", setup, false);

        ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
      })();
    </script>
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

