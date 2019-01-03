<!-- template: content-single -->
<?php 
$meta_value = get_post_meta( $post->ID, 'external_link', true );
$post_categories = get_the_category();
$the_category = substr(strtolower($post_categories[0]->cat_name), 0, -1);

if ($the_category == "link") {
  $icon = "link";
} else if ($the_category == "original") {
  $icon = "pencil";
} else if ($the_category == "review") {
  $icon = "glasses";
} else if ($the_category == "video") {
  $icon = "video";
} else {
  $icon = "";
}
?>

<article class="h-entry in-the-loop" itemscope itemtype="http://schema.org/BlogPosting">
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
  <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
  <?php echo get_the_date('F j, Y'); ?> at <?php echo get_the_date('h:i a'); ?> (<a href="<?php the_permalink(); ?>">permalink</a>)
  </time>
  <div class="post-content-wrapper">
    <div class="content e-content">
      <?php the_content(); ?>
    </div>
    <div class="meta">
      <div class="meta-wrap">
        <div class="ad">
        <?php if ( is_active_sidebar( 'ad-block' ) ) : ?>
          <?php dynamic_sidebar( 'ad-block' ); ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="tags"><?php
    echo get_the_tag_list('<p>This entry was tagged: ',', ','</p>');
  ?></div>
  <div class="author">
    <h3>About the Author</h3>
    <div class="author-wrap">
      <span itemscope itemprop="image" alt="Photo of <?php the_author_meta( 'display_name' ); ?>" class="photo">
      <?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' ); } ?>
      </span>

      <h4 class="author-name vcard">
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
          <?php the_author_meta( 'display_name' ); ?>
        </span>
      </h4>

      <p><?php the_author_meta('description') ?></p>

      <div class="author-social">
      <a href="https://twitter.com/<?php echo get_the_author_meta('twitter'); ?>"><i class="fab fa-fw fa-twitter"></i> <?php echo get_the_author_meta('twitter'); ?></a>
      </div>
    </div>
  </div>
</article>
<div class="next-previous-post">
  <div class="next-post">
      <?php $next_post = get_adjacent_post(false, '', false); 
      if(!empty($next_post)) { ?>
        <h3>Previous: <br /><a href="<?php echo get_permalink($next_post->ID) ?>" title="<?php echo $next_post->post_title ?>"><?php echo $next_post->post_title ?></h3></a>
      <?php } ?>
  </div>

  <div class="previous-post">
      <?php $previous_post = get_adjacent_post(false, '', true); 
      if(!empty($previous_post)) { ?>
        <h3>Next: <br /><a href="<?php echo get_permalink($previous_post->ID) ?>" title="<?php echo $previous_post->post_title ?>"><?php echo $previous_post->post_title ?></h3></a>
      <?php } ?>
  </div>
</div>
<!-- / template: content-single -->
