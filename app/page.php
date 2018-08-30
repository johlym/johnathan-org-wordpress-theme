<!-- template: page -->
<?php get_header(); ?>
<!-- body -->
<div class="main part">
  <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'page-general', get_post_format() );
    endwhile; endif; 
  ?>
</div>
<!-- / body -->
<?php get_footer(); ?>
<!-- / template: page -->