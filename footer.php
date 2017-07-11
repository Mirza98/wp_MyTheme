	<footer>
		<p>This is my footer</p>
		<?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
	</footer>

	<style type="text/css">
		footer{
			border-top: 1px solid rgba(255,255,255,.5);
		}
	</style>
	
	<?php wp_footer(); ?>
	
	</body>
</html>