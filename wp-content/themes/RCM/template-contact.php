<?php /* Template Name: Contact Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-wrap">
			
			<div class="page-content-wrap" id="contact-page-content-wrap">	
						
				<h1 id="page-title" class="page-name"><?php the_title(); ?></h1>
							
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="page-content" id="contact-page-content">
		
						<?php the_content(); ?>
					
						<?php echo do_shortcode( '[contact-form-7 id="46" title="RCM Contact Form"]' ); ?>

					</div>

					<br class="clear">

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php endif; ?>
				
			</div>


<?php get_footer(); ?>