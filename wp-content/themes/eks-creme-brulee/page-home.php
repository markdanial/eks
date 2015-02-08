<?php 

/* 

Template Name: Home

 */ 

get_header(); ?>

	<main role="main clear">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="home-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="top-img clear">
					<img src="<?php the_field('photo1'); ?>" />
					<img src="<?php the_field('photo2'); ?>" />
					<img src="<?php the_field('photo3'); ?>" />
				</div>					
			</article>
			<!-- /article -->

		<?php endwhile; ?>
		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
