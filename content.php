<?php get_header(); ?>

<style type="text/css">
  
  img{
    height: auto;
  }
</style>
            
       
<header>
<div class="headerwrap">
  <h1>THE VERGE</h1>

  <div id="sidebar">
     
       <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    

      <div class="nav-soc secondari-soc">
        <ul class="ul-nav">
          <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>

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
</header>





<div class="popup">
<div class="overflov"></div>
</div>







 <!-- pocetak srednjeg vrapera -->
<div class="midlewraper">








        <!--prica-->

<div class="wraper">
			
    <div class="naslov">
        <div class="opissareni">
            <?php
              $count = 1;
              $posttags = get_the_tags();
              if ($posttags) {
                foreach($posttags as $tag) { 
                  if ($count == 1){ $count++; ?>
                    <h3 class="first"> 
                  <?php }else{ ?>
                  <h3>
                  <?php } 
                    echo $tag->name; ?>
                  </h3>
                <?php
                }
              }
            ?>
            
        </div>
        <h1><?php the_title(); ?></h1>
        <h2><?php echo get_secondary_title(); ?></h2>
	    	<h4><?php the_time('F j, Y'); ?>, in <?php the_category(); ?></h4>

        <div class="socmed">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>

    </div>




    <div class="story">
        <?php the_content(); ?>
    </div>










<style type="text/css">


  .story p{
    letter-spacing: 0px;
  }
  
  .sec_title{
    display: none;
  }
</style>






<?php get_template_part('recommended'); ?>




<!-- dio koji ukljucuje the latest dio============== -->
<?php get_template_part('latest'); ?>



 <!-- zatvaranje srednjeg vrapera -->
</div>


</div>




<footer>
<div class="totop">
<a class="to-top" href="#">BACK TO TOP</a>
</div>

     <h1 class="footername"></h1>

</footer>
















</body>
</html>