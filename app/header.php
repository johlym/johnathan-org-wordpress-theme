<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="initial-scale=1, viewport-fit=cover">
    <link href="https://micro.blog/johlym" rel="me" />
    <link href="https://github.com/johlym" rel="me" />
    <link href="https://twitter.com/_johlym" rel="me" />
    <?php wp_head(); ?>
</head>

<body class="body"> 

<div class="mobile-header">
    <div class="mobile-title"><?php echo get_bloginfo( 'name' ); ?></div>
    <div class="mobile-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>    
    </div>
</div>

<!-- / header -->