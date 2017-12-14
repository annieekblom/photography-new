<p style="display: none">don't remove this tag</p>
<?php get_header();?>

	<div id="box-container">
		<div class="square-box" id="title1">
			<a href="#about"><h2>About</h2></a>
		</div>
		<div class="square-box" id="content1">
			<span id="widget">
				<div class="padding">
					<?php dynamic_sidebar('widget'); ?>
				</div>
			</span>
		</div>
		<div class="square-box" id="title2">
			<a href="#work"><h2>Work</h2></a>
		</div>
		<div class="square-box" id="content2">
			<div class="padding2">
				<div class="types">
 			 	<?php get_template_part("partials/content"); ?>
 			 	
				</div>
			</div>
		</div>
		<div class="square-box" id="title3">
			<a href="#contact"><h2>Contact</h2></a>
		</div>
		<div class="square-box" id="content3">
			<div class="padding3">
				<?php dynamic_sidebar('contact_page'); ?>
			</div>	
		</div>
	</div>
</body>

<?php get_footer(); ?>