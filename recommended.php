



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
  /*.entry-title a{
    font-size: 1em;
    color: #666666;
  }
  .entry-title a:hover{
    color: #b30059;;
  }*/
 /* .recomended .advert h1 {
    font-family: 'Open Sans', sans-serif; 
    font-family: Helvetica, sans-serif;
    font-family: "adelle-sans",Helvetica,sans-serif;
    font-size: .9em;
    font-weight: 600;
    padding: 0px;
    margin: 8px 0px;
    line-height: 1.2em;
    letter-spacing: 0px;
}
.entry-title a{
  color: #626262;
}*/

</style>

<?php endwhile;
          
        endif;
        wp_reset_postdata();
    ?>






</div>



<style type="text/css">
  
/*


.recomended{
        width: 88%;
        height: auto;
        margin: 5em 6%;
        float: left;
        padding-top: 10px;
        margin-right: 2%;
        padding-right: 1px;
        padding-bottom: 0px;
        float: left;

}


.recomended::before{
        margin-top: -35px;
        margin-left: -8px;
}

.recomended h1{
        margin: 8px 0px .2em 0em;
        font-size: 1.3em;
        font-weight: 200;
    
              }


.recomended .advert{
       width: 100%;
       height: 370px;
       float: left;
       padding: 0px;
       overflow: hidden;
       margin: 6px 0px;
      
}



.recomended .advert hr{
       display: none;
        }
.recomended .advert h3{
       display: none;
        }


.recomended .advert .imagine{
       width: 94%;
       height: 72%;
       overflow: hidden;
       margin: 0px;
       padding: 0px;

}       


.recomended .advert img{
    margin: 0px;
    padding: 0px;
    width: 120%;
    margin-left: -5%;
}


.recomended .wraper-smal{
       width: 100%;
       float: left;
       margin-top: 7px;
       font-size: .8em;
        
       } 

.recomended .advert .wraper-smal h1{
        font-family:  'Open Sans', sans-serif; 
        font-size: 1.4em;
        line-height: 1.4em;
        font-weight: 600;
        color: rgba(0,0,0,.9);
        padding: 0px;
        margin: 0px;
        margin-top: 6px;
        }

.recomended .advert h1:hover{
        color: #b30059;
        }





.recomended .advert h4{
       display: none;
        }
.recomended .advert p{
        display: none;
        }   







@media screen and (max-width: 480px)   {

.recomended .advert{
      width: 100%;
      height: 260px;
      float: left;
      padding: 0px;
      overflow: hidden;
      margin: 6px 0px;
}
.recomended .advert .imagine{
      width: 94%;
      height: 64%;
      overflow: hidden;
      margin: 0px;
      padding: 0px;

} 


}


*/



</style>