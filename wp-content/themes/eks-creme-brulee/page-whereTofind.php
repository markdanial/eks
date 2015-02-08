<?php 

/* 

Template Name: Where to find us

 */ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="main">
					<div class="paragraph where"><?php the_content(); ?></div>
				</div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
