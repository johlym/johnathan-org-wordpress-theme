<?php get_header(); ?>

<!-- body -->
    <div class="container">
        <div class="column">
            <div class="column-wrapper" id="infinite">
              <?php 
              $count = 0;
              $aside_args = array( 'category' => 432, 'posts_per_page' => 5 );
              $aside_posts = get_posts( $aside_args );
              if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                  if ($count === 1) {
                    ?>
                    <div class="aside-breaker">
                      <h4>
                        <i class="far fa-fw fa-pencil-alt"></i>  
                        Thoughts and Links
                      </h4>
                      <ul class="aside-breaker__list">
                      <?php foreach ( $aside_posts as $post ) {
                        setup_postdata( $post ); ?>
                        <li class="aside-breaker__list-item">
                          <span class="aside-breaker__list-item__datestamp">
                            <a href="<?php the_permalink(); ?>" class="u-url"><?php echo get_the_date('F j, Y'); ?></a>
                          </span>
                          <?php the_content(); ?>
                        </li>
                      <?php } ?> 
                      </ul>
                    </div><?php
                  wp_reset_postdata();
                  }
                  if ( get_post_format() !== 'aside') :
                    get_template_part( 'content', get_post_format() );
                  endif;
                  $count++;
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
