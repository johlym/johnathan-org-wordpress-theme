<!-- template: aside -->
<article class="h-entry aside" itemscope itemtype="http://schema.org/BlogPosting">
  <?php the_content(); ?>
  <div class="meta">
    <span class="meta-child">
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
        <?php echo get_the_date('F j, Y g:ma'); ?>
      </time>
    </span>
    
    <span class="meta-child meta-permalink-link"> 
      <a href="<?php the_permalink(); ?>" class="u-url"><i class="far fa-fw fa-link"></i></a>
    </span>
  </div>
</article>
<!-- / template: aside -->