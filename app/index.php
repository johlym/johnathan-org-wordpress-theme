<!-- template: index -->
<?php get_header(); ?>
<!-- body -->
<div class="container">
    <div class="left">
      <?php get_sidebar(); ?>
    </div>
    <div class="right">
        <div class="right-wrapper" id="infinite">
          <?php 
          if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
              if ( get_post_format() === 'aside') :
                get_template_part( 'aside', get_post_format() );
              elseif ( get_post_format() === 'link') :
                get_template_part( 'link', get_post_format() );
              else :
                get_template_part( 'content', get_post_format() );
              endif;
            endwhile; 
          endif; ?>
                      <br /><br />
                      <div class="hey-look" id="hey-look"></div>
        <div class="pagination">
          <div class="later">
            <?php previous_posts_link( '<i class="far fa-angle-double-left"></i> Previous Page' ); ?>
          </div>
          <div class="count">
            &nbsp;
          </div>
          <div class="earlier">
          <?php next_posts_link( 'Next Page <i class="far fa-angle-double-right"></i>' ); ?>
          </div>
        </div>
        </div>
    </div>
</div>

<!-- / body -->

<?php get_footer(); ?>
<!-- / template: index -->