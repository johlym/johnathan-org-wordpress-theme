<?php 
$meta_value = get_post_meta( $post->ID, 'external_link', true );
$current_post = $wp_query->current_post; 
$post_categories = get_the_category();
$the_category = substr(strtolower($post_categories[0]->cat_name), 0, -1);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ($current_post == 0 && $paged == 1) {
  $first = 1;
}

if ($the_category == "link") {
  $icon = "link";
} else if ($the_category == "post") {
  $icon = "pencil";
} else if ($the_category == "review") {
  $icon = "glasses";
} else if ($the_category == "video") {
  $icon = "video";
} else {
  $icon = "";
}
?>

<article class="h-entry in-the-loop <?php if (!empty($first)) { echo "first"; }?>" itemscope itemtype="http://schema.org/BlogPosting">
  <?php if ( has_post_thumbnail() ) {?>
  <div class="post-image"><?php the_post_thumbnail('featured-image'); ?></div>
  <?php } ?>

  <div class="post-category-wrapper">
    <span class="post-category post-category-<?php echo $the_category; ?>"><i class="far fa-fw fa-<?php echo $icon; ?>"></i> <?php echo $the_category; ?></span>
  </div>
  <h1 class="p-name post-title" itemprop="headline">
    <?php if  (!empty( $meta_value )) { ?>
    <a href="<?php echo $meta_value; ?>"><?php the_title(); ?></a> 
    <?php } else { ?> 
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
    <?php } ?>
  </h1>
  <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>" style="display: none"></time>
  <div class="post-content-wrapper">
    <div class="content">
    <?php the_content(); ?>
    <?php if  (!empty( $meta_value )) { ?>
    <span class="permalink-icon">
      <a href="<?php echo the_permalink(); ?>"><i class="far fa-fw fa-link"></i> permalink</a>
    </span>
    <?php } ?>
    </div>
    <div class="meta">
      <div class="meta-wrap">
        <?php if ($current_post == 0): ?>
        <div class="ad">
        <?php if ( is_active_sidebar( 'ad-block' ) ) : ?>
          <?php dynamic_sidebar( 'ad-block' ); ?>
        <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</article>