<?php get_header(); 
?>
<body>
<section id="main-page">
	<div class="linking">
<h1 class="catTag"><?php echo single_cat_title() ?></h1> 
<hr class="style">
  <?php 

dynamic_sidebar('gallery');


  if (have_posts()): 
      while (have_posts()): 
          the_post();

      ?>

    <?php get_template_part("partials/post-grid"); ?>

<?php
    endwhile; 
endif;
?>

     </section>    
</body>
  
</html>

<?php get_footer(); ?>

