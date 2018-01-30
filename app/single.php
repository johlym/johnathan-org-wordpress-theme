<?php get_header(); ?>

<!-- body -->
    <div class="container">
        <div class="column">
            <div class="column-wrapper">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                if( get_post_format() === 'aside' ) {
                    get_template_part( 'aside-single', get_post_format() );
                }
                else { 
                    get_template_part( 'content-single', get_post_format() );
                }
            endwhile; endif; 
            ?>
            </div>
        </div>
    </div>
<!-- / body -->

<?php get_footer(); ?>
