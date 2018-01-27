<?php get_header(); ?>

<!-- body -->
    <div class="container">
        <div class="left">
          <?php get_sidebar(); ?>
        </div>
        <div class="right">
            <div class="right-wrapper" id="infinite">
            <?php 
            // Check if there are any posts to display
            if ( have_posts() ) : ?>
            
            <header class="archive-header">
            <h1 class="archive-title">
              <?php if (is_month()) {
                echo single_month_title( ' ', true ) . " Archives"; 
              } else {
                echo 'Category: ' . single_cat_title( '', false );
              }
              ?>
            </h1>
            
            
            <?php
            // Display optional category description
            if ( category_description() ) : ?>
            <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>
            </header>
            
            <?php
            
            // The Loop
            while ( have_posts() ) : the_post();
            
            get_template_part( 'content', get_post_format());
            
            endwhile; 
            
            else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            
            
            <?php endif; ?>
                          <br /><br />
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
