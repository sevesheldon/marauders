<?php get_header(); ?>

<div id='container'>
	<!-- Slider -->
	<?php get_template_part( 'extras/slider' ); ?>
	<!-- / Slider -->
					
	<?php get_template_part('loop'); ?>
</div>

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>