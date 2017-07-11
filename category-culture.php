

<?php get_header(); ?>







<?php get_template_part('my_header'); ?>










<style type="text/css">
	body{
    background: black;
    width: 100%;   
    width:100%;
    max-width: 100%;
  
}


.wp-post-image{
    width: auto;
    height: 100%;
    
}




</style>







         <!-- pocetak velikog vrapera -->
              <div class="bigwraper">





<div class="colorfull">







 <div class="bigwrap">


    
        <div class="siri left">
        <?php 
			$args = array(
			    'type' => 'post',
			    'posts_per_page' => 1
			);	
			$lastBlog = new WP_Query( $args );
				if( $lastBlog->have_posts() ):
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
						
					
                        <div class="img">
                            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                            <img class="my-special-img" src="<?php echo $urlImg; ?>">
                        </div>

                        <div class="bigtext red">
                            <?php the_title(sprintf('<h2 style="color:white;" class="entry-title"><a style="color:white;" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
                            <h3>CES 2017</h3>
                        </div>
                        	
					
					<?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
		</div>


    
    




    
        <div class="uzi right">
        <?php 
			$args = array(
			    'type' => 'post',
			    'posts_per_page' => 1,
			    'offset' => 1
			);	
			$lastBlog = new WP_Query( $args );
				if( $lastBlog->have_posts() ):
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
					
                <div class="img">
                    <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                    <img class="my-special-img" src="<?php echo $urlImg; ?>">
                </div>

            <div class="text yelov">
               <?php the_title(sprintf('<h2 style="color:white;" class="entry-title"><a style="color:white;" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
              <h3>TECH</h3>
            </div>

            <?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
        </div>
    

</div>



</div>
<!-- zatvvaranje sarenog cuda -->






                       <!-- pocetak srednjeg vrapera -->
              <div class="midlewraper">
<div class="first-div-za-razmak"></div>












<!-- recommender part =========================================================================================================== -->
<style type="text/css">
	

	.link{
		color: black;
	}
	.link:hover{
		color: purple;
	}
</style>

<div class="onrightwraper">
<div class="divonright">
  <h1 class="najnovije">Najnovije</h1>

<?php 
	$args = array(
	    'type' => 'post',
		'posts_per_page' => 3,
	    
	    );	
		$lastBlog = new WP_Query( $args );
			if( $lastBlog->have_posts() ):
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>



  <div class="advert3">
    <h3>TECH</h3>
    <hr>
   
        <div class="imagine3">
          <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
            <img class="my-special-img" src="<?php echo $urlImg; ?>">
        </div>  

      <div class="wraper-smal3"> 
         <?php the_title(sprintf('<h1 class="entry-title"><a class="link" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?> 
      </div>

</div>

<?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>

























</div>
</div>
<!-- zatvaranje vrapera -->





































<!-- smal advert part ===================================================================================================================================0 -->



<?php 
	$args = array(
	    'type' => 'post',
		'posts_per_page' => 8,
	    
	    );	
		$lastBlog = new WP_Query( $args );
			if( $lastBlog->have_posts() ):
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>


<div class="advert">
    <h3>TECH</h3>
    <hr>
   
        <div class="imagine">
            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
            <img class="my-special-img" src="<?php echo $urlImg; ?>">
        </div>  

        <div class="wraper-smal"> 
          <?php the_title(sprintf('<h1 class="entry-title"><a style="color:black;" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?> 
        </div>

</div>
<?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>


















<!-- dio za velike reklame msm sarene adverte=========================================================================================================== -->


<div class="wraperreklama">

   <!--prva reklama-->
    <div class="reklama1" id="reklama1">
    <?php 
			$args = array(
			    'type' => 'post',
			    'posts_per_page' => 1,
			    'offset' => 3
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
               <h3>NEWS</h3>
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
			    'offset' => 4
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
               <h3>NEWS</h3>
             </div>

            <?php endwhile;
				endif;
				wp_reset_postdata(); ?>
    </div>


</div>





























<!-- smal advert part ===================================================================================================================================0 -->



<?php 
	$args = array(
	    'type' => 'post',
		'posts_per_page' => 8,
	    
	    );	
		$lastBlog = new WP_Query( $args );
			if( $lastBlog->have_posts() ):
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>


<div class="advert">
    <h3>TECH</h3>
    <hr>
   
        <div class="imagine">
            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
            <img class="my-special-img" src="<?php echo $urlImg; ?>">
        </div>  

        <div class="wraper-smal"> 
          <?php the_title(sprintf('<h1 class="entry-title"><a style="color:black;" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?> 
        </div>

</div>
<?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
























</div>
<!-- zatvaranje večikog bijelog wrapera -->




















































	









	</div>


	
    <div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>



<?php get_footer(); ?>