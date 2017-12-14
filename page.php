<?php get_header();?>
<div id="newPage">
<?php if( have_posts() ) {

    while ( have_posts() ){
			the_post(); 

    }
}
?>
	<h1><?php the_title() ?></h1><hr>
	<div id="pageAttributes">	
		<?php   the_post_thumbnail(); ?>
	<div id="content-page">
		<?php the_content();
		 	  the_author(); ?>
	</div>	 	  
	
	</div>
</div>	
<?php get_footer(); ?>