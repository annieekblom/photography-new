this is singular.php
<?php get_header();?>

<div class="single">

<div id="singular-page">
	<div id="center">
		<?php the_post_thumbnail(); ?>
	</div>	
		<h1><?php the_title(); ?></h1></br>
    <?php the_taxonomies(); ?>
		<?php the_content(); ?>
</div>
<?php //endwhile; endif; ?>
<?php get_footer(); ?>