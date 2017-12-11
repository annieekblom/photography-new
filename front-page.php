front-page
<?php get_header();?>

<body>
	<div id="box-container">
		<div class="square-box" id="title1">
			<h2>About</h2>
		</div>
		<div class="square-box" id="content1">
			<span id="widget">
				<div class="padding">
					<?php dynamic_sidebar('widget'); ?>
				</div>
			</span>
		</div>
		<div class="square-box" id="title2">
			<h2>Work</h2>
		</div>
		<div class="square-box" id="content2">
			<div class="padding2">
				<div class="types">
 			 	<?php get_template_part("partials/content"); ?>
 			 	
				</div>
			</div>
		</div>
		<div class="square-box" id="title3">
			<h2>Content</h2>
		</div>
		<div class="square-box" id="content3">
			<div class="padding3">
				<?php dynamic_sidebar('contact_page'); ?>
			</div>	
		</div>
	</div>
</body>

<?php get_footer(); ?>