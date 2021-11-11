<?php get_header(); ?>
<div class="page-wrapper">
<div class="container">
    <section class="row">
        <div class="col-lg-3">
          <?php if(is_active_sidebar('page-sidebar')): ?>
               <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-9">
    <h1><?php the_title(); ?></h1>
    <?php if(has_post_thumbnail()): ?>
      <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>
    <?php get_template_part('inc/section','content');?>
    </div>
    </section>
</div>
    </div>
<?php get_footer(); ?>