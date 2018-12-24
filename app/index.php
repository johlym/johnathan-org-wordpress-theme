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

          <!-- start latest in category -->
          <div class="latest-in-cat">
            <div class="lic-top">
            <i class="far fa-fw fa-folder-open"></i> <h3>The latest</h3> <span>from each category.</span>
            </div>
            <div class="lic-bottom">
              <div class="lic-cat-list lic-links">
                <div class="lic-cat-list-title">
                <i class="far fa-fw fa-link"></i> <h4>Links</h4>
                </div>
                <ul class="fa-ul">
                <?php 
                  // get the latest link posts
                  $lic_links_args = array(
                    'nopaging'               => false,
                    'paged'                  => '1',
                    'posts_per_page'         => '5',
                    'tax_query'              => array(
                      'relation' => 'AND',
                      array(
                        'taxonomy'         => 'category',
                        'terms'            => 'links',
                        'field'            => 'slug',
                      ),
                    ),
                  );
                  $lic_links_query = new WP_Query( $lic_links_args );
                  
                  while($lic_links_query->have_posts()) : $lic_links_query->the_post(); 
                  $meta_value = get_post_meta( $post->ID, 'external_link', true ); ?>
                    <li><span class="fa-li"><i class="far fa-chevron-circle-right"></i></span><a href="<?php echo $meta_value; ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                </ul>
              </div>
              <div class="lic-cat-list lic-posts">
                <div class="lic-cat-list-title">
                <i class="far fa-fw fa-pencil"></i> <h4>Originals</h4>
                </div>
                <ul class="fa-ul">
                  <?php 
                    // get the latest link posts
                    wp_reset_query();
                    $lic_posts_args = array(
                      'nopaging'               => false,
                      'paged'                  => '1',
                      'posts_per_page'         => '5',
                      'tax_query'              => array(
                        'relation' => 'AND',
                        array(
                          'taxonomy'         => 'category',
                          'terms'            => 'originals',
                          'field'            => 'slug',
                        ),
                      ),
                    );
                    $lic_posts_query = new WP_Query( $lic_posts_args );
                    
                    while($lic_posts_query->have_posts()) : $lic_posts_query->the_post(); ?>
                      <li><span class="fa-li"><i class="far fa-chevron-circle-right"></i></span><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
                </ul>
              </div>
              <div class="lic-cat-list lic-reviews">
                  <div class="lic-cat-list-title">
                  <i class="far fa-fw fa-glasses"></i> <h4>Reviews</h4>
                  </div>
                <ul class="fa-ul">
                <?php 
                  // get the latest link posts
                  wp_reset_query();
                  $lic_reviews_args = array(
                    'nopaging'               => false,
                    'paged'                  => '1',
                    'posts_per_page'         => '5',
                    'tax_query'              => array(
                      'relation' => 'AND',
                      array(
                        'taxonomy'         => 'category',
                        'terms'            => 'reviews',
                        'field'            => 'slug',
                      ),
                    ),
                  );
                  $lic_reviews_query = new WP_Query( $lic_reviews_args );
                  
                  while($lic_reviews_query->have_posts()) : $lic_reviews_query->the_post(); ?>
                    <li><span class="fa-li"><i class="far fa-chevron-circle-right"></i></span><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                </ul>
              </div>
              <div class="lic-cat-list lic-videos">
                  <div class="lic-cat-list-title">
                  <i class="far fa-fw fa-film"></i> <h4>Videos</h4>
                  </div>
                <ul class="fa-ul">
                <?php 
                  // get the latest link posts
                  wp_reset_query();
                  $lic_reviews_args = array(
                    'nopaging'               => false,
                    'paged'                  => '1',
                    'posts_per_page'         => '5',
                    'tax_query'              => array(
                      'relation' => 'AND',
                      array(
                        'taxonomy'         => 'category',
                        'terms'            => 'videos',
                        'field'            => 'slug',
                      ),
                    ),
                  );
                  $lic_reviews_query = new WP_Query( $lic_reviews_args );
                  
                  while($lic_reviews_query->have_posts()) : $lic_reviews_query->the_post(); ?>
                    <li><span class="fa-li"><i class="far fa-chevron-circle-right"></i></span><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- end latest in category -->
        <?php } $current_post_number++;
      endwhile; 
    endif; ?>
    <div class="pagination">
      <?php wp_pagenavi(); ?>
    </div>
</div>
<!-- / body -->
<?php get_footer(); ?>
<!-- / template: index -->