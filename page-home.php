<?php get_header(); ?>



<style type="text/css">
  
.wraper-smal h1 a{
  color: black;
}
.wraper-smal h1 a:hover{
  color: purple;
}



.trans-div1 h3{
  margin-top: 280px;
}



@media screen and (max-width: 880px)   {
.trans-div1 h3{
  margin-top: 160px;
}

.trans-div1 h3 ul{
  margin: 0px;
  padding: 0px;
}
.trans-div1 h3 ul li{
  margin: 0px;
  padding: 0px;
}

.trans-div1 h3 ul li a{
  margin: 0px;
  padding: 0px;
  color: white;
}

}

</style>














<header>
  <h1>THE VERGE</h1>


</header>

<div class="nav">
  <div class="nav-wraper">
  <h1>THE VERGE</h1>

  <div id="sidebar">
    <ul>
      <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </ul>



    <div id="sidebar-btn">
        <span class="spanf"></span>
        <span class="spanmi"></span>
        <span class="spanl"></span>
    </div>
</div>




<div class="nav-soc">
  <ul class="ul-nav">
    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>  
  </ul>
</div>

</div>

</div>









<div class="popup">
<div class="overflov"></div>
</div>













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














<div class="bigwrap second-bigwrap">




    
        <div class="uzi left ">
        <?php 
			$args = array(
			    'type' => 'post',
			    'posts_per_page' => 1,
			    'offset' => 2
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

            <div class="text red">
              <?php the_title(sprintf('<h2 style="color:white;" class="entry-title"><a style="color:white;" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
              <h3>TECH</h3>
            </div>

            <?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
        </div>
  
    <!-- <a href="faradayfutureff91.html">
        <div class="siri right">
            <div class="bigtext textleft specialtext pink">
              <h2>Faraday Future konaćno predstavio novi automobil FF91 sa 1050 konjskih snaga</h2>
              <h3>CES 2017</h3>
            </div>

            <div class="img textright specialimg">
              <img src="imagines/oneciscenje.jpg">
            </div>
        </div>
    </a> -->
  
        <div class="siri right">
        <?php 
			$args = array(
			    'type' => 'post',
			    'posts_per_page' => 1,
			    'offset' => 3
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

            <div class="bigtext pink">
              <?php the_title(sprintf('<h2 style="color:white;" class="entry-title"><a style="color:white;" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
              <h3>CES 2017</h3>
            </div>
             <?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
        </div>
    


</div>












<div class="bigwrap3">
    
        <div class="smal3">
        <?php 
			$args = array(
			    'type' => 'post',
			    'posts_per_page' => 1,
			    'offset' => 4
			);	
			$lastBlog = new WP_Query( $args );
				if( $lastBlog->have_posts() ):
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

            <div class="img3">
              <a href= <?php echo the_permalink(); ?> >
              <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
              <img class="my-special-img" src="<?php echo $urlImg; ?>">
              </a>
            </div>

            <div class="text3 green">
              <?php the_title(sprintf('<h2 style="color:white;" class="entry-title"><a style="color:white;" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
              <h3>TECH</h3>
            </div>
             <?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
        </div>




        <div class="smal3">
        <?php 
			$args = array(
			    'type' => 'post',
			    'posts_per_page' => 1,
			    'offset' => 5
			);	
			$lastBlog = new WP_Query( $args );
				if( $lastBlog->have_posts() ):
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

            <div class="img3">
                <a href= <?php echo the_permalink(); ?> >
                <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                <img class="my-special-img" src="<?php echo $urlImg; ?>">
                </a>
            </div>

             <div class="text3 pink">
              <?php the_title(sprintf('<h2 style="color:white;" class="entry-title"><a style="color:white;" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?> 
              <h3>CES 2017</h3>
            </div>
            <?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
        </div>
   


    
        <div class="smal3 last">
        <?php 
			$args = array(
			    'type' => 'post',
			    'posts_per_page' => 1,
			    'offset' => 6
			);	
			$lastBlog = new WP_Query( $args );
				if( $lastBlog->have_posts() ):
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

            <div class="img3">
              <a href= <?php echo the_permalink(); ?> >
              <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
              <img class="my-special-img" src="<?php echo $urlImg; ?>">
              </a>
            </div>

            <div class="text3 green">
              <?php the_title(sprintf('<h2 style="color:white;" class="entry-title"><a style="color:white;" href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
              <h3>CES 2017</h3>
            </div>
             <?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
        </div>
    





</div>








</div>

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
        <style type="text/css">
  .wraper-smal  h4{
      color: black;
      margin-top: -16px;
      padding-top: 0px;
 /*   }
    .wraper-smal  h4 .post-categories{
      margin: 0px;
      padding: 0px;
      width: 60px;
      display: inline-block;
    }
    .wraper-smal  h4 .post-categories li{
      margin: 0px;
      padding: 0px;
    }
    .wraper-smal  h4 .post-categories li a{
      margin: 10px 0px 0px 0px;
      padding: 0px;
      font-size: 1em;
      color: rgba(204, 0, 102,.9);
      font-family: 'Titillium Web', sans-serif;
      color: #ff0055;
      font-weight: 200;
      border-top: 0px; 
    }
    .wraper-smal  h4 .post-categories li a::after{
       width: 0px;
       height: 0px;
    }*/
        </style>
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
                <h3><?php the_category(); ?></h3>
                
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

  <style type="text/css">
    footer{
      margin-top: 60px;
    }
  </style>


<?php get_footer(); ?>