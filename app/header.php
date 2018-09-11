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
    <link href="https://micro.blog/johlym" rel="me" />
    <link href="https://github.com/johlym" rel="me" />
    <link href="https://twitter.com/_johlym" rel="me" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">
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

