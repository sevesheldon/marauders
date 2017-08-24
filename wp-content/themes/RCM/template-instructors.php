<?php /* Template Name: Instructors Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-wrap">
			
			<div class="page-content-wrap" id="instructors-page-content-wrap">	
				
				<div class="page-name" id="instructors-page-name">
		
					<h1 id="page-title"><?php the_title(); ?></h1>
		
				</div>
					
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="page-content" id="instructors-page-content">
		
						<?php the_content(); ?>
						
						<div class="instructors-container">	
		
						<?php if( have_rows('instructors') ): ?>
								<?php while( have_rows('instructors') ): the_row(); 
										$image_object = get_sub_field('image');
										$image_size = 'thumbnail';
										$image_url = $image_object['sizes'][$image_size];
										?>

										<div class="instructors-content">
				    		    			
				    		    			<img src="<?php echo $image_url; ?>" />
				    		    				
				    		    			<h3><?php the_sub_field('name'); ?></h3>

				    		    			<p><?php the_sub_field('bio'); ?></p>

					    		    	</div>
				    		    		
								<?php endwhile; ?>
						<?php endif; ?>

						</div>	
					
					</div>

					<br class="clear">

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php endif; ?>
				
			</div>



<?php get_footer(); ?>
