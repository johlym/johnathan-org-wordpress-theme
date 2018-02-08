<!-- single post template -->
<article class="h-entry post-single" itemscope itemtype="http://schema.org/BlogPosting">
<h1 class="p-name" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <?php if ( has_post_thumbnail() ) {?>
  <figure class="post-image">
    <?php the_post_thumbnail('featured-image'); ?>
  </figure>
<?php  } ?>  
<div class="article-body">
  <div class="article-meta">
    <div class="meta-child">
      <i class="far fa-fw fa-user"></i>
      <?php echo get_the_author(); ?>
    </div>
    <div class="meta-child">
      <i class="far fa-fw fa-clock"></i>
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
      <a href="<?php the_permalink(); ?>" class="u-url"><?php echo get_the_date('F j, Y h:ma T'); ?></a>
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
        $word_count = str_word_count( strip_tags( $post_content ));
        echo $word_count; 
        if ($word_count == 1) {
          $appendix = " word"; 
        } else { 
          $appendix = " words";
        }
        echo $appendix;
      ?>
    </div>
  </div>
  <div class="article-content">
    <?php the_content(); ?>

  </div>
</div>

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
