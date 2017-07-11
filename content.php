<?php get_header(); ?>


<style type="text/css">
	body{
		background: white;
	}
  header{
    background: black;
  }
</style>



            
<header>
<div class="headerwrap">
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
		<h4><?php the_time('F j, Y'); ?>, in <?php the_category(); ?></h4>





		<style type="text/css">
.naslov h3{
  margin-left: -13px;
}
.naslov h3::after{
  margin-top: -25px;
}
.naslov .first::after{
  margin-top: -25px;
}

.naslov a{
      font-size: 0.8em;
      margin: 0px;
      color: #ff0066;
      padding-top: 6px;
      display: inline-block;
      font-family: Arial;
      font-family: 'Open Sans', sans-serif;
      margin-right: 10px;
      font-weight: 200;
      padding-right: 6px;
      padding-left: 20px;
      border-top: 0.1em solid #ff0066;
      margin-left: 4px;
      margin-left: -10px;
      
       }
.naslov a::after{
     content: "";
     width: 0.1em;
     height: 26px;
     display: block;
     background: #ff0066;
     transform: rotate(-30deg);
     float: right;
     margin-top: -8px;
     margin-right: -13px;
     }




    .naslov h4{
      color: black;
    }
    .post-categories{
      margin: 0px;
      padding: 0px;
      width: 60px;
      display: inline-block;
    }
    .post-categories li{
      margin: 0px;
      padding: 0px;
    }
    .post-categories li a{
      margin: 10px 0px 0px 0px;
      padding: 0px;
      font-size: 1em;
      color: rgba(204, 0, 102,.9);
      font-family: 'Titillium Web', sans-serif;
      color: #ff0055;
      font-weight: 200;
      border-top: 0px; 
    }
    .post-categories li a::after{
       width: 0px;
       height: 0px;
    }

    </style>




      <div class="socmed">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </div>

    </div>

    <div class="story">
        <?php the_content(); ?>
    </div>


    <style type="text/css">
	img{
    height: auto;
	}
  .story a{
     color: #ff0066;

/*font-family: Helvetica;*/
}
.story a:hover{
     color:#b30059;

/*font-family: Helvetica;*/
}


#sidebar a:hover{
  color: #ff0066;
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