<?php get_header(); ?>
  <div class="single-title">
      <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
          <h1><?php the_title(); ?> </h1>
          
          </div>
      </div>
  </div>
<div class="container">
   
    <?php get_template_part('inc/section','blogcontent');?>
    <?php wp_link_pages();?>
</div>

<?php get_footer(); ?>