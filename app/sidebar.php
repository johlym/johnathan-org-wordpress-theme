<!-- sidebar -->
<div class="widget left-flex-child column-menu">
  <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
</div>
<?php if ( is_active_sidebar( 'ad-block' ) ) : ?>
    <!-- ad-block -->
    <?php dynamic_sidebar( 'ad-block' ); ?>
    <!-- / ad-block -->
<?php endif; ?>
<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
    <!-- left-sidebar -->
    <?php dynamic_sidebar( 'left-sidebar' ); ?>
    <!-- / left-sidebar -->
<?php endif; ?>

<!-- / sidebar -->
<div class="widget left-flex-child">An IndieWeb Webring<br />
<a href="https://xn--sr8hvo.ws/🐴📗/previous">←</a>
 🕸💍
<a href="https://xn--sr8hvo.ws/🐴📗/next">→</a>

</div>