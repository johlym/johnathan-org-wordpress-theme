<article class="h-entry post in-the-loop" itemscope itemtype="http://schema.org/BlogPosting">
  <?php if ( has_post_thumbnail() ) {?>
  <div class="post-image"><?php the_post_thumbnail('featured-image'); ?></div>
  <?php  } ?>
  <h1 class="p-name" itemprop="headline">
    <?php $meta_value = get_post_meta( $post->ID, 'external_link', true ); 
    if  (!empty( $meta_value )) { ?><a href="<?php echo $meta_value; ?>"><?php the_title(); ?></a> <i class="far fa-long-arrow-right"></i><?php }
    else { ?> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php } ?>
  </h1>
  <div class="meta">
    <span class="meta-child">
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
      <a href="<?php the_permalink(); ?>"><?php echo get_the_date('l, F d, Y h:i a'); ?></a> | <?php the_category(', '); ?>
      </time>
    </span>
  </div>
  <?php the_content(); ?>
  
</article>