

<div class="recomended">
  

<h1>RECOMENDED</h1>




<?php 
  $args = array(
      'type' => 'post',
    'posts_per_page' => 3,
      
      );  
    $lastBlog = new WP_Query( $args );
      if( $lastBlog->have_posts() ):
        while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>


<div class="advert">
    <h3>TECH</h3>
    <hr>
   
        <div class="imagine">
          <a href= <?php echo the_permalink(); ?> >
                            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                            <img class="my-special-img" src="<?php echo $urlImg; ?>">
                            </a>
        </div>  

      <div class="wraper-smal"> 
          <?php the_title(sprintf('<h1 class="entry-title"><a class="link" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?> 
          <h4><?php the_time('F j'); ?>, in <?php the_category(); ?></h4>
        
      </div>
</div>

<style type="text/css">
  .entry-title a{
    color: #666666;
  }
  .entry-title a:hover{
    color: #b30059;;
  }
</style>

<?php endwhile;
          
        endif;
        wp_reset_postdata();
    ?>






</div>



