<div style=" float:left;">


<h1 class="the-latest">
	THE LATEST
</h1>
<style type="text/css">
/*	.the-latest{
		font-family: Arial;
	}

.entry-title a{
    color: black;
  }
  .entry-title a:hover{
   color:  #b30059;
  }
*/
  /*.the-latest{
  	margin-left: 10px;
  }*/



.entry-title a{
  font-family: Helvetica;
  font-family:  'Open Sans', sans-serif;
  font-size: .9em;
  
}
.entry-title .black-a{
  color: #424242;

}


</style>

<?php 
	$args = array(
	    'type' => 'post',
		'posts_per_page' => 5,
	    
	    );	
		$lastBlog = new WP_Query( $args );
			if( $lastBlog->have_posts() ):
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>



<div class="advert">
    <h3><?php the_category(sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?></h3>

        <div class="imagine">
          <a href= <?php echo the_permalink(); ?> >
                            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                            <img class="my-special-img" src="<?php echo $urlImg; ?>">
                            </a>
        </div>  

      <div class="wraper-smal"> 
        <?php the_title(sprintf('<h1 class="entry-title"><a class="black-a" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?> 
        <h4><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></h4>
        
      </div>

</div>
<?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>

</div>









