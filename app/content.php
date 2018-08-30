<?php $meta_value = get_post_meta( $post->ID, 'external_link', true ); ?>
<?php $current_post = $wp_query->current_post; ?>

<?php if  (!empty( $meta_value )) { ?>
<article class="h-entry link in-the-loop" itemscope itemtype="http://schema.org/BlogPosting">
<?php } else { ?> 
<article class="h-entry in-the-loop" itemscope itemtype="http://schema.org/BlogPosting">
<?php } ?>
  <?php if ( has_post_thumbnail() ) {?>
  <div class="post-image"><?php the_post_thumbnail('featured-image'); ?></div>
  <?php } ?>

  <h1 class="p-name post-title" itemprop="headline">
    <?php if  (!empty( $meta_value )) { ?>
    <a href="<?php echo $meta_value; ?>"><?php the_title(); ?> <i class="far fa-long-arrow-right"></i></a> 
    <?php } else { ?> 
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
    <?php } ?>
  </h1>
  <div class="meta">
    <div class="meta-wrap">
      <div class="p-details">
        <strong>Posted by</strong> <span class="author"><?php echo get_the_author(); ?></span><br />
        <strong>On:</strong> <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
        <a href="<?php the_permalink(); ?>"><?php echo get_the_date('F d, Y h:i a'); ?></a></time><br />
        <strong>Under:</strong> <?php the_category(', '); ?><br />
      </div>
      <?php if ($current_post == 0): ?>
      <div class="ad">
      <?php if ( is_active_sidebar( 'ad-block' ) ) : ?>
        <?php dynamic_sidebar( 'ad-block' ); ?>
      <?php endif; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="content">
  <?php the_content(); ?>
  </div>
</article>
<hr>