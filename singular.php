<?php get_header();?>

<div class="single">
<?php dynamic_sidebar('gallery_page'); 
	  get_template_part("partials/post-grid.php");  
?>
</div>
<?php get_footer(); ?>