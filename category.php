<?php get_header(); 

  

?>



<?php 
        foreach((get_the_category()) as $category){
        $cat = $category->name;
        if( $cat == 'Tech' || $cat == 'Culture' || $cat == 'Science'){
        		echo $cat;
        }else{
        	echo "non culture";
        	echo $category->name;
        }
        
        }
        ?>

    

   <h1>This is category page</h1>

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>


	   
 
		    <?php get_template_part('content','test'); ?>

		<?php endwhile;
		
	endif;
			
	?>


<?php get_footer(); ?>