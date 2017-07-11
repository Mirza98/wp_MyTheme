<?php get_header(); ?>
    <h1>page aubou us</h1>
	<?php 

	$lastblog =  new WP_Query('type=post&posts_per_page=1');
	
	if( $lastblog->have_posts() ):
		
		while( $lastblog->have_posts() ): $lastblog->the_post(); ?>
		
		  <div style="background: rgba(23,239,56,0.1);">
			<h3><?php the_title(); ?></h3>
			
			<hr>
		  </div>

		<?php endwhile;
		
	endif;
			
	?>


<h1>about us page</h1>


<?php get_footer(); ?>