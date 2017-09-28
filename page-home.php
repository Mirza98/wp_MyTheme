<?php get_header(); ?>



<style type="text/css">




  
.wraper-smal h1 a{
  color: #424242;
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













<?php get_template_part('my_header'); ?>




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


.sec_title{
    display: none;
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
                            <h3><?php the_category(); ?></h3>
                        </div>
                        <style type="text/css">
                          .siri .bigtext h2{
                            
                            margin-top: -2px;
                            /*margin-left: 26px;*/
                          }


                          h3 .post-categories{
                            margin: 0px;
                            padding: 0px;
                      
                          }
                          
                          h3 .post-categories li{
                            margin: 0px;
                            padding: 0px;
                          }
                          h3 .post-categories li a{
                            margin: 0px;
                            padding: 0px;
                            margin-top: -2px;
                            font-size: 1em;
                          }
                        </style>
                        	
					
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
              <h3><?php the_category(); ?></h3>
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
              <h3><?php the_category(); ?></h3>
            </div>

            <?php endwhile;
					
				endif;
				wp_reset_postdata();
		?>
        </div>
  










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
              <h3><?php the_category(); ?></h3>
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
              <h3><?php the_category(); ?></h3>
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
              <h3><?php the_category(); ?></h3>
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
               <h3><?php the_category(); ?></h3>
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
		color: #424242;
	}
	.link:hover{
		color: #b30059;;
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
          <h4> in <?php the_category(); ?>  <span class="line"><?php the_time('F j'); ?></span></h4>
        </div>


        <style type="text/css">
  .wraper-smal  h4{
      color: black;
      margin-top: -16px;
      padding-top: 0px;
    }


  h4 span{
    color: #828282;
  }
  h4 .line{
    /*display: inline-block;*/
  }
  h4 .line::before{
     content: "";
     width: 0.1em;
     height: 16px;
     margin-right: 6px;
     margin-left: 6px;
     margin-bottom: -4px;
     display: inline-block;
     background: #828282;
     
  
     
  }






    
 /*   
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

            <div class="trans-div1 blue">
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
          <h4> in <?php the_category(); ?>  <span class="line"><?php the_time('F j'); ?></span></h4>
        </div>
        <style type="text/css">
          .wraper-smal h4{
            font-size: 12px;
          }
        </style>
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

















<style type="text/css">


/*
.nav {
 background: #e6005c;
}



#sidebar{
       background: rgba(0,0,0,.85);
       width: 250px;
       height: 100%;
       display: block;
       position: absolute;
       left: -250px;
       top: 0px;
       transition:left 0.3s cubic-bezier(0, 0, 0.74, 1);
       z-index: 9999;
       margin-left: 0px;    
    }

#sidebar.visible{
      left: 0px;
      transition:left 0.3s cubic-bezier(0, 0, 0.74, 1);
}
         

 ul {
    padding: 0px;
    margin-top: 110px;
         }

 ul li{
      list-style: none;
         }

 ul li a {
      display: block;
      width: 220px;
      text-decoration: none;
      padding:3px 10px 3px 10px;
      margin-bottom: 20px;
      color: white;
      font-size: 1.2em;
      font-family: Arial;
         }

 ul li a i{
      margin-right: 5px;
         }



 ul li a:hover {
    
  }

.blue{
   color : #0066ff;

  }


.rightside{
       display: inline-block;
       margin: 0px;
       padding: 0px;
       margin-right: 3px;
       float: right;
       height: 45px;
       width: 70px;
    }

.rightside li{
       width: 35px;
       float: left;
       padding: 12px 0px;
    }


















 #sidebar-btn{
      display: inline-block;
      vertical-align: middle;
      width: 22px;
      height: 50px;
      cursor: pointer;
      margin: 12px;
      position: absolute;
      top: 2px;
      right: -50px;
      overflow: hidden;
      margin-top: 12px;
      margin-left: 5px;
         }

 #sidebar-btn span{
      height: 4px;
      margin-bottom: 5px;
      display: block;
      cursor: pointer;
      border-radius: 2px;
         }


#sidebar-btn span:nth-child(2){
    width: 75%;
         }










.nav-soc{
  margin: 0px;
  padding: 0px;
  display: block;
  
}

.nav-soc .ul-nav li {
  display: inline-block;
}

.nav-soc .ul-nav li a i{
  color: white;

}
*/
</style>





































<?php get_footer(); ?>