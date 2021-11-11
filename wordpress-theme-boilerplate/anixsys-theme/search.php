<?php get_header(); ?>
<div class="page-wrapper">
<div class="container">
  
    <h1>Search Results for '<?php echo get_search_query(); ?>'</h1>
    <?php if(has_post_thumbnail()): ?>
      <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>
    <?php get_template_part('inc/section','searchresults');?>
   
</div>
    </div>
<?php get_footer(); ?>