<?php get_header(); ?>

<?php get_template_part('my_header'); ?>




<h1>eroor page</h1>

<div id="button"></div>

<style type="text/css">
	#button{
		width: 100px;
		height: 100px;
		background: red;
	}
</style>

<script type="text/javascript">
	

jQuery(document).ready(function($){

    $( "#button" ).on( "click", function() {
       console.log("jjjjjjjjj");
    });

});



</script>


<?php get_footer(); ?>