<div class="mt-4">
    <div class="latest-header">
        <div class="latest-title">NOTICE BOARD</div>
    </div>

    <?php 
       $the_query = new WP_Query( array( 'cat' => 9, 'nopaging'=>true, 'posts_per_page'=>5 ) );
       if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
              <div class="row mt-4 notice-content">
                    <div class="col-md-12">
                        <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                        <div><?php the_excerpt(10) ?></div>
                    </div>
            </div>
            <?php endwhile ?>
             <?php endif ?>
             <?php wp_reset_postdata(); ?>


</div>