header<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carmen Müller</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<?php wp_head(); ?>
</head>

<header>
	<div id="page-header">
<?php the_custom_logo(); ?>
	</div>
	<nav class="page-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'page-menu' ) ); ?>
		</nav>	
</header>
