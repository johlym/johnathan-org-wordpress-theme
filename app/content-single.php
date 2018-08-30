<article class="h-entry link in-the-loop" itemscope itemtype="http://schema.org/BlogPosting">
  <?php if ( has_post_thumbnail() ) {?>
  <div class="post-image"><?php the_post_thumbnail('featured-image'); ?></div>
  <?php } ?>
  <h1 class="p-name post-title" itemprop="headline">
    <?php the_title(); ?>
  </h1>
  <div class="meta">
    <div class="sticky-meta-wrap">
      <div class="p-details">
        <div class="detail author"><strong>Posted by</strong> <span class="author-name"><?php echo get_the_author(); ?></span></div>
        <div class="detail date"><strong>On:</strong> <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
        <a href="<?php the_permalink(); ?>"><?php echo get_the_date('F d, Y h:i a'); ?></a></time></div>
        <div class="detail category"><strong>Under:</strong> <?php the_category(', '); ?><br /></div>
        <div class="detail reading-progress"><strong>Reading Progress:</strong> <span class="progress">0</span>%</div>
      </div>
      <div class="ad">
      <?php if ( is_active_sidebar( 'ad-block' ) ) : ?>
        <?php dynamic_sidebar( 'ad-block' ); ?>
      <?php endif; ?>
      </div>
    </div>
    
  </div>
  <div class="content">
  <?php the_content(); ?>
  </div>
</article>
<div style="clear: both;"></div>
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
