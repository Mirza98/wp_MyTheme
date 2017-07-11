<?php get_header(); ?>

<style type="text/css">
	body{}
	
</style>



 <div class="row">
	<h1>content-aside</h1>
	<div class="col-xs-12 col-sm-8">
		

<div style="background: rgba(0,0,123,0.1);">
			
	<h3>single aside TEST POST <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>  </h3>
	<div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
			
	<hr>
</div>



<style type="text/css">
	img{
		width: 50%;
		height: auto;
	}
</style>







	</div>

</div> 

<?php get_footer(); ?>