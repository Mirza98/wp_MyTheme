

<?php get_header(); ?>





<?php get_template_part('my_header'); ?>





<style type="text/css">
body{
    background: black;
    width: 100%;   
    width:100%;
    max-width: 100%; 
}
.sec_title{
    display: none;
}                  
.bigtext h1{
	margin-left: 0px;
	padding-left: 0px;
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
                            <a href= <?php echo the_permalink(); ?> >
                            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                            <img class="my-special-img" src="<?php echo $urlImg; ?>">
                            </a>
                        </div>

                        <div class="bigtext blue">
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
                    <a href= <?php echo the_permalink(); ?> >
                            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                            <img class="my-special-img" src="<?php echo $urlImg; ?>">
                            </a>
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







<!-- ===================opis kategorije===================================================================0 -->
<div class="cat_des">
	<p><?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?> </p>

</div>
<style type="text/css">
	.cat_des{
		width: 96%;
		max-width: 700px;
		margin: 0 auto;
		padding: 0px 2%;
		margin-bottom: 60px;
	}
	.cat_des p{
		width: 100%;
		text-align: center;
		font-size: 1em;
        font-family: 'Open Sans', sans-serif;
	}
</style>










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
          <a href= <?php echo the_permalink(); ?> >
                            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                            <img class="my-special-img" src="<?php echo $urlImg; ?>">
                            </a>
        </div>  

      <div class="wraper-smal3"> 
         <?php the_title(sprintf('<h1 class="entry-title"><a class="link" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?> 
         <h4><?php the_time('F j'); ?>, in <?php the_category(); ?></h4>
      </div>
       <style type="text/css">
      .wraper-smal3  h4{
      color: black;
      margin-top: -16px;
      padding-top: 0px;
    }
        .wraper-smal3  h4 .post-categories{
      margin: 0px;
      padding: 0px;
      width: 60px;
      display: inline-block;
    }
    .wraper-smal3 h4 .post-categories li{
      margin: 0px;
      padding: 0px;
    }
    .wraper-smal3 h4 .post-categories li a{
      margin: 10px 0px 0px 0px;
      padding: 0px;
      font-size: 1em;
      color: rgba(204, 0, 102,.9);
      font-family: 'Titillium Web', sans-serif;
      color: #ff0055;
      font-weight: 200;
      border-top: 0px; 
    }
    .wraper-smal3 h4 .post-categories li a::after{
       width: 0px;
       height: 0px;
    }
      </style>

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
		'posts_per_page' => 2,
		'offset' => 1,
		'category__in' => array(8),
	    
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
          <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?> 
          <h4><?php the_time('F j'); ?>, in <?php the_category(); ?></h4>
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
            <a href= <?php echo the_permalink(); ?> >
                            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                            <img class="my-special-img" src="<?php echo $urlImg; ?>">
                            </a>
        </div>  

        <div class="wraper-smal"> 
          <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?> 
           <h4><?php the_time('F j'); ?>, in <?php the_category(); ?></h4>

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