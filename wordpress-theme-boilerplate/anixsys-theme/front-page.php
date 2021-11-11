<?php get_header(); ?>
<section>
<?php get_template_part('inc/section','slide');?>
</section>
<section>
<?php get_template_part('inc/section','action');?>
</section>
<section>
<?php get_template_part('inc/section','search');?>
</section>
<section>
    <div class="container">
 <div class="row">
     <div class="col-md-8">
     <?php get_template_part('inc/section','latest');?>
     </div>
     <div class="col-md-4 notice-board">
     <?php get_template_part('inc/section','notice');?>
     </div>
</div>
 </div>
</section>
<section>
    <div class="section-middle">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center section-middle-content">
            <?php if(is_active_sidebar('position-1')): ?>
                                    <?php dynamic_sidebar('position-1'); ?>
             <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section>
<div class="container">
<?php get_template_part('inc/section','events');?>
</div>
</section>

<?php get_footer(); ?>