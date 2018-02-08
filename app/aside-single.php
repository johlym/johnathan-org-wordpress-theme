<article class="h-entry aside" itemscope itemtype="http://schema.org/BlogPosting">
<div class="article-body">
  <div class="article-meta">
    <span class="meta-child">
      <i class="far fa-fw fa-clock"></i>
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
      <a href="<?php the_permalink(); ?>" class="u-url"><?php echo get_the_date('F j, Y'); ?></a>
      </time>
    </span>
    <span class="meta-child meta-category-link">
      <i class="far fa-fw fa-folder-open"></i>
      <?php $category = get_the_category(); ?>
      <a href="<?php echo get_category_link($category[0]->cat_ID) ?>"> <?php echo $category[0]->cat_name ?></a>
    </span>
  </div>
  <div class="article-content">
    <?php the_content(); ?>

  </div>
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
