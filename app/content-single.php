<article class="h-entry post" itemscope itemtype="http://schema.org/BlogPosting">
  <?php if ( has_post_thumbnail() ) {?>
  <div class="post-image"><?php the_post_thumbnail('featured-image'); ?></div>
  <?php  } ?>
  <h1 class="p-name" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <div class="meta">
    <span class="meta-child">
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
        <?php echo get_the_date('F j, Y g:ma'); ?>
      </time>
    </span>
    <span class="meta-child meta-category-link">
      <?php $category = get_the_category(); ?>
      <a href="<?php echo get_category_link($category[0]->cat_ID) ?>"><i class="far fa-fw fa-folder-open"></i> <?php echo $category[0]->cat_name ?></a>
    </span>
  </div>
  <?php the_content(); ?>
  <div class="related">
    <h3>Related Posts</h3>
    <?php echo do_shortcode( '[jetpack-related-posts]'); ?>
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
