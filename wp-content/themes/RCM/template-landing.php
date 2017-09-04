<?php /* Template Name: Landing Page Template */ get_header('landing'); ?>

<?php get_header('landing'); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="page-content" id="landing-content">
					<?php the_content(); ?>
				</div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer('landing'); ?>
