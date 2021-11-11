<?php
       $the_query = new WP_Query( array( 'cat' => 7, 'nopaging'=>true, 'posts_per_page'=>5 ) );
       $slides = array();
      ?>
     
<?php if ( $the_query->have_posts() ) : ?>
 

 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php
    
     if(has_post_thumbnail()):
    $temp = array();
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src( $thumb_id,'full', true);
    $thumb_url = $thumb_url_array[0];
    $temp['title'] = get_the_title();
    $temp['excerpt'] = get_the_excerpt();
    $temp['image'] = $thumb_url;
    $slides[] = $temp;
    
    
    ?>

    <?php endif ?>
 <?php endwhile; ?>


 <?php wp_reset_postdata(); ?>

<?php else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php if(count($slides)>0):?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      
            <div class="carousel-inner">
            <?php $i = 0;  foreach($slides as $slide): extract($slide); ?>
                <div class="carousel-item  <?php if($i==0):  ?> active <?php endif ?>" data-interval="5000">
                <img src="<?php echo $image; ?>" class="d-block w-100" alt="<?php echo esc_attr($title); ?>">
                <div class="carousel-caption d-none d-sm-block d-md-block">
                    <h1><?php echo $title; ?></h1>
                    <p class="slide-excerpt"><?php echo $excerpt; ?></p>
                    <button type="button" class="btn btn-primary">   APPLY ONLINE   </button>
                </div>
                </div> 
                <?php $i++; ?>
           <?php endforeach ?>
           </div>
         
 
</div>

<?php endif ?>