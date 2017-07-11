<?php get_header(); ?>





<div class="popup">
<div class="overflov"></div>
</div>







<div class="naslov">
    <?php the_post_thumbnail(); ?>
</div>





<!-- pocetak srednjeg vrapera -->
 <div class="midlewraper">

        <h1 class="h1naslov"> <?php the_title(); ?>  </h1>
        <!-- <h2></h2> podnaslov -->
        <h6><?php the_time('F j, Y'); ?>, in <?php the_category(); ?></h6>
        <style type="text/css">
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
    }
</style>
          <div class="socmed">
             <i class="fa fa-facebook" aria-hidden="true"></i>
             <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>






        <!--first story-->

<div class="story">

 <?php the_content(); ?>




</div>





<style type="text/css">
	img{
		width: 100%;
		height: auto;
	}
	body{
		background: white;
	}
  .story h2{
    padding-left: 0px;
  }
</style>





</div>



<?php get_template_part('big-advert')?>


<style type="text/css">
  
.wraperreklama{
  margin: 200px 0px 200px 0px;
  float: left;
}
footer{
  float: left;
}
.trans-div1 h3{
       color: white;
       font-size: 0.9em;
       width: 90%;
       font-weight: 400;
       font-family: Arial;
       position: absolute;
       margin: 150px 0px 0px .5em;
       
  }
  .trans-div1 h3 a{
    color: white;
  }
</style>


<?php get_footer(); ?>