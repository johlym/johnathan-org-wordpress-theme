<!-- template: single -->
<?php get_header(); ?>

<!-- body -->
    <div class="main part">
    <?php 
    if ( have_posts() ) : 
      while ( have_posts() ) : the_post(); 
        get_template_part( 'content-single', get_post_format() );
      endwhile; 
    endif; ?>
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
<!-- / body -->

<?php get_footer(); ?>
<!-- / template: single -->