<article class="h-entry post" itemscope itemtype="http://schema.org/BlogPosting">
  <?php if ( has_post_thumbnail() ) {?>
  <div class="post-image"><?php the_post_thumbnail('featured-image'); ?></div>
  <?php  } ?>
  <h1 class="p-name" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <i class="far fa-fw long-arrow-right"></i></h1>
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
    <span class="meta-child meta-permalink-link"> 
    <a href="<?php the_permalink(); ?>" class="u-url"><i class="far fa-fw fa-link"></i></a>
    </span>
  </div>
  <?php the_content(); ?>
  
</article>
<hr />