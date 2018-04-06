<!-- template: page -->
<?php get_header(); ?>

<!-- body -->
    <div class="container">
        <div class="left">
          <?php get_sidebar(); ?>
        </div>
        <div class="right">
            <div class="right-wrapper">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
              get_template_part( 'page-general', get_post_format() );
            endwhile; endif; 
            ?>
            </div>
        </div>
    </div>
<!-- / body -->

<?php get_footer(); ?>
<!-- / template: page -->