<article class="h-entry post-single" itemscope itemtype="http://schema.org/BlogPosting">
<?php if ( has_post_thumbnail() ) {?>
  <figure class="post-image"><?php the_post_thumbnail('featured-image'); ?></figure>
  <?php  } ?>
  <h1 class="p-name" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
 
  
  <?php the_content(); ?>
  <div class="meta">
    <span class="meta-child">
      <time class="dt-publisheddt-published" itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">
        <?php echo get_the_date('F j, Y g:ma'); ?>
      </time>
    </span>
    <i class="far fa-fw fa-ellipsis-v"></i>
    <span class="meta-child meta-category-link">
      <?php $category = get_the_category(); ?>
      <a href="<?php echo get_category_link($category[0]->cat_ID) ?>"><i class="far fa-fw fa-folder-open"></i> <?php echo $category[0]->cat_name ?></a>
    </span>
    <i class="far fa-fw fa-ellipsis-v"></i>
    <span class="meta-child meta-comments-link">
    <a href="<?php comments_link(); ?>"><i class="far fa-fw fa-comments"></i> <?php printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></a>
    </span>
    <i class="far fa-fw fa-ellipsis-v"></i>
    <span class="meta-child meta-permalink-link"> 
    <a href="<?php the_permalink(); ?>" class="u-url"><i class="far fa-fw fa-link"></i> Permalink</a>
    </span>
    <i class="far fa-fw fa-ellipsis-v"></i> 
    <span class="meta-child meta-permalink-link"> 
      <span class="word-count">
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
      </span>
    </span>
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
