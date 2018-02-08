<article class="h-entry post" itemscope itemtype="http://schema.org/BlogPosting">
<h1 class="p-name" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <?php if ( has_post_thumbnail() ) {?>
  <figure class="post-image">
    <?php the_post_thumbnail('featured-image'); ?>
  </figure>
<?php  } ?>  
<div class="article-body">
  <div class="article-meta">
    <span class="meta-child">
      <i class="far fa-fw fa-user"></i>
      <?php echo get_the_author(); ?>
    </span>
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
</article>