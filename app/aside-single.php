<article class="h-entry aside" itemscope itemtype="http://schema.org/BlogPosting">
  <?php the_content(); ?>
  <div class="meta">
    <span class="meta-child">
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
        <?php echo get_the_date('F j, Y g:ma'); ?>
      </time>
    </span>
    <i class="far fa-fw fa-ellipsis-v"></i> 
    <span class="meta-child meta-permalink-link"> 
      <a href="<?php the_permalink(); ?>" class="u-url"><i class="far fa-fw fa-link"></i> Permalink</a>
    </span>
  </div>
  <div class="comments">
    <?php comments_template(); ?>
  </div>
</article>

<br /><br />
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