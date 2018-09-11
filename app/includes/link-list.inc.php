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