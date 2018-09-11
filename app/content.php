<?php 
$meta_value = get_post_meta( $post->ID, 'external_link', true );
$current_post = $wp_query->current_post; 
$post_categories = get_the_category();
$the_category = substr(strtolower($post_categories[0]->cat_name), 0, -1);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ($current_post == 0 && $paged == 1) {
  $first = 1;
}
?>

<article class="h-entry in-the-loop <?php if (!empty($first)) { echo "first"; }?>" itemscope itemtype="http://schema.org/BlogPosting">
  <?php if ( has_post_thumbnail() ) {?>
  <div class="post-image"><?php the_post_thumbnail('featured-image'); ?></div>
  <?php } ?>

  <div class="post-category-wrapper">
    <span class="post-category post-category-<?php echo $the_category; ?>"><?php echo $the_category; ?></span>
  </div>
  <h1 class="p-name post-title" itemprop="headline">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
  </h1>
  <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
    &nbsp;
  </time>
  <div class="post-content-wrapper">
    <div class="content">
    <?php the_content(); ?>
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
<div style="clear: both;"></div>