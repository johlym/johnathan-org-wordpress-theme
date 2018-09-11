<!-- template: index -->
<?php get_header(); ?>
<!-- body -->
<div class="main part">
  <div class="intro">
  <?php if ( is_active_sidebar( 'intro-block' ) ) : ?>
  <?php dynamic_sidebar( 'intro-block' ); ?>
  <?php endif; ?>
  </div>
    <?php 
    if ( have_posts() ) : 
      $current_post_number = 1;
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      while ( have_posts() ) : the_post(); 
      echo the_date('F j, Y', '<div class="date-divider"><span>', '</span></div>', 'FALSE');
        get_template_part( 'content', get_post_format() );
        if ($current_post_number == 1 && $paged == 1) { ?>
          <!-- start link list block -->
          <div class="link-list-block">
            <hr class="link-list-divider" />
            <div class="link-list-header">
              <h4>More links worth checking out</h4> <i class="far fa-fw fa-external-link"></i>
            </div>
            <div class="link-list">
              <?php
                // WP_Query arguments
                $ll_query_args = array(
                  'post_type'              => array( 'list_link' ),
                  'paged'                  => '1',
                  'posts_per_page'         => '10',
                );

                // The Query
                $ll_query = new WP_Query( $ll_query_args );
                
                while($ll_query->have_posts()) : $ll_query->the_post(); 
                  $meta_value = get_post_meta( $post->ID, 'external_link', true ); ?>
                  <p><a href="<?php echo $meta_value; ?>"><?php the_title(); ?></a> <i class="far fa-fw fa-arrow-right icon"></i></p>
                <?php endwhile; 
              ?>
            </div>
            <hr class="link-list-divider" />
          </div>
          <!-- end link list block -->
        <?php } $current_post_number++;
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
<!-- / template: index -->