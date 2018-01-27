<!-- sidebar -->


<div class="title-box left-flex-child">
    <div class="intro">
        <div class="intro-image">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/headshot.jpg" 
            srcset="<?php echo get_bloginfo('template_directory'); ?>/assets/images/headshot.jpg 1x, 
            <?php echo get_bloginfo('template_directory'); ?>/assets/images/headshot_2x.jpg 2x, 
            <?php echo get_bloginfo('template_directory'); ?>/assets/images/headshot_3x.jpg 3x" alt="Johnathan Lyman" class="photo" >
        </div>
        <h1><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        My name is <a href="/about" class="h-card" rel="me">Johnathan Lyman</a> and <span class="p-note">I am an engineer at <a href="//papertrail.com">Papertrail</a>, 
        a huge Apple nerd and semi-regular blogger. I enjoy bubble tea way too much and find Farming Simulator relaxing.</span>
        <a href="/about">Find out more</a>.
    </div>
</div>
<div class="widget left-flex-child column-menu">
    <h3>Navigation</h3>
    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
</div>
<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'left-sidebar' ); ?>
    <!-- / left-sidebar -->
<?php endif; ?>
<div class="widget left-flex-child">
    <i class="far fa-copyright"></i> 
    2014 – <?php echo date('Y'); ?> Johnathan Lyman. All 
    <?php echo wp_count_posts( 'post' )->publish; ?> posts and 
    <?php echo wp_count_posts( 'page' )->publish; ?> pages were made with 
    <i class="far fa-heart"></i> and <i class="far fa-coffee"></i> in Seattle.<br /><br />
    <small>Theme version <code>1.9.0</code></small>
</div>
<div class="widget left-flex-child">
    Powered by: <br />
    <a class="pb-link" href="https://link.johnathan.org/linode"><i class="fab fa-linode"></i></a>
    <a class="pb-link" href="https://wordpress.org"><i class="fab fa-wordpress"></i></a>
    <a class="pb-link" href="https://letsencrypt.org"><i class="far fa-lock"></i></a>
    <a class="pb-link" href="https://dnsimple.com"><img class="pb-small" src="<?php echo get_bloginfo('template_directory'); ?>/assets/svg/dnsimple.com.svg" /></a>
    <a class="pb-link" href="https://link.johnathan.org/keycdn"><i class="fab fa-keycdn"></i></a>
    <a href="https:////fontawesome.com" class="pb-link"><i class="fab fa-font-awesome-flag"></i></a>
</div>
<div class="widget left-flex-child">
    <i class="far fa-tachometer-alt"></i> Uptime: <span class="uptime-number"><i class="far fa-sync fa-spin"></i></span> <a href="//status.johnathan.org"><i class="far fa-external-link"></i></a>
</div>
<!-- / sidebar -->