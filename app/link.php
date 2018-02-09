<!-- loop post template -->
<article class="h-entry link" itemscope itemtype="http://schema.org/BlogPosting">
<h1 class="p-name" itemprop="headline"><i class="fal fa-paper-plane"></i> <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h1>
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
      <?php echo get_the_date('F j, Y h:ma T'); ?>
      </time>
    </div>
    <div class="meta-child meta-category-link">
      <i class="far fa-fw fa-folder-open"></i>
      <?php $category = get_the_category(); ?>
      <a href="<?php echo get_category_link($category[0]->cat_ID) ?>"> <?php echo $category[0]->cat_name ?></a>
    </div>
    <div class="meta-child meta-category-link">
      <i class="far fa-fw fa-link"></i>
      <?php $permalink = esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) );
      $permalink_host = parse_url ( $permalink, PHP_URL_HOST );
      echo $permalink_host;  ?>
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
</article>
<hr />