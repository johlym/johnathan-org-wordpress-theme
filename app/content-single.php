<article class="h-entry post" itemscope itemtype="http://schema.org/BlogPosting">
  <?php if ( has_post_thumbnail() ) {?>
  <div class="post-image"><?php the_post_thumbnail('featured-image'); ?></div>
  <?php  } ?>
  <h1 class="p-name" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <div class="meta">
    <span class="meta-child">
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
      <?php echo get_the_date('l, F d, Y h:i a'); ?>
      </time>
    </span>
  </div>
  <?php the_content(); ?>
</article>
<div class="after-post-widgets">
<?php if ( is_active_sidebar( 'apw-block' ) ) : ?>
    <!-- apw-block -->
    <?php dynamic_sidebar( 'apw-block' ); ?>
    <!-- / apw-block -->
<?php endif; ?>
</div>
<div class="pagination">
  <div class="later">
  <?php previous_post_link( '<i class="far fa-angle-double-left"></i> %link' ); ?>
  </div>
  <div class="count">
    &nbsp;
  </div>
  <div class="earlier">
  <?php next_post_link( '%link <i class="far fa-angle-double-right"></i>' ); ?>
  </div>
</div>
