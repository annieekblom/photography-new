<?php get_header(); 
?>
<body>

<section id="main-page">
<h1>Work Gallery</h1> 

  <?php 


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

