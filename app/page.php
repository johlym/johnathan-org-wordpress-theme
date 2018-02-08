<?php get_header(); ?>

<!-- body -->
    <div class="container">
        <div class="column">
            <div class="column-wrapper" id="infinite">
            
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
