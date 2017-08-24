<?php /* Template Name: Natural Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-wrap">
			
			<div class="page-content-wrap" id="natural-page-content-wrap">	
						
				<h1 id="page-title" class="page-name"><?php the_title(); ?></h1>
							
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="page-content" id="natural-page-content">
		
						<?php the_content(); ?>
					
					</div>

					<br class="clear">

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php endif; ?>
				
			</div>


<?php get_footer(); ?>
