<div class="mt-4">
    <div class="latest-header">
        <div class="latest-title">LATEST NEWS</div>
    </div>

    <?php 
       $the_query = new WP_Query( array( 'cat' => 8, 'nopaging'=>true, 'posts_per_page'=>5 ) );
       if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
              <div class="row mt-4">
                <div class="col-md-4">
                <img src="<?php the_post_thumbnail_url();?>" class="card-img-top" alt="placeholder">
                </div>
                    <div class="col-md-8 latest-content">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        <div><?php the_excerpt(10) ?></div>
                    </div>
            </div>
            <?php endwhile ?>
             <?php endif ?>
             <?php wp_reset_postdata(); ?>


</div>