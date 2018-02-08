<article class="h-entry aside" itemscope itemtype="http://schema.org/BlogPosting">
<div class="article-body">
  <div class="article-meta">
    <div class="meta-child">
      <i class="far fa-fw fa-user"></i>
      <?php echo get_the_author(); ?>
    </div>
    <div class="meta-child">
      
      <i class="far fa-fw fa-clock"></i>
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
      <a href="<?php the_permalink(); ?>" class="u-url"><?php echo get_the_date('F j, Y h:ma'); ?></a>
      </time>
    </div>
    <div class="meta-child meta-category-link">
      <i class="far fa-fw fa-folder-open"></i>
      <?php $category = get_the_category(); ?>
      <a href="<?php echo get_category_link($category[0]->cat_ID) ?>"> <?php echo $category[0]->cat_name ?></a>
    </div>
    <div class="meta-child">
      <i class="far fa-fw fa-tachometer-alt"></i>
      <?php 
        $post_content = get_post_field( 'post_content', $post->ID );
        $char_count = strlen( strip_tags( $post_content ));
        echo $char_count; 
        if ($char_count == 1) {
          $appendix = "/280 characters"; 
        } else { 
          $appendix = "/280 characters";
        }
        echo $appendix;
      ?>
    </div>
  </div>
  <div class="article-content">
    <?php the_content(); ?>

  </div>
</div>
</article>
<hr />