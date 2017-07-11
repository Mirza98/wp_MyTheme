<div class="wraperreklama">

   <div class="reklama1" id="reklama1">
    <?php 
      $args = array(
          'type' => 'post',
          'posts_per_page' => 1,
          'offset' => 1
      );  
      $lastBlog = new WP_Query( $args );
        if( $lastBlog->have_posts() ):
          while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

             <div class="img1">
                <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                <img src="<?php echo $urlImg; ?>">
             </div>

             <div class="trans-div1 pink">
               <?php the_title(sprintf('<h2 class="entry-title"><a style="color:white;" class="link" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
               <h3><?php the_category(); ?></h3>
             </div>

            <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
  

   <!--druga reklama-->
    <div class="reklama2" id="reklama2">
    <?php 
      $args = array(
          'type' => 'post',
          'posts_per_page' => 1,
          'offset' => 2
      );  
      $lastBlog = new WP_Query( $args );
        if( $lastBlog->have_posts() ):
          while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

            <div class="img2">
                <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                <img src="<?php echo $urlImg; ?>">
            </div>

            <div class="trans-div1 red">
                <?php the_title(sprintf('<h2 class="entry-title"><a style="color:white;" class="link" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
                <h3><?php the_category(); ?></h3>
                
             </div>
          
            <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>

    <!--druga reklama-->
    <div class="reklama2" id="reklama2">
    <?php 
      $args = array(
          'type' => 'post',
          'posts_per_page' => 1,
          'offset' => 3
      );  
      $lastBlog = new WP_Query( $args );
        if( $lastBlog->have_posts() ):
          while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

            <div class="img2">
                <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                <img src="<?php echo $urlImg; ?>">
            </div>

            <div class="trans-div1 yelov">
                <?php the_title(sprintf('<h2 class="entry-title"><a style="color:white;" class="link" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
                <h3><?php the_category(); ?></h3>
                
             </div>
          
            <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>


</div>
