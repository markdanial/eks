<?php 

/* 

Template Name: Product

 */ 

get_header(); ?>

	<main role="main clear">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="flavor-saver">
					<div class="flavors vanilla"><?php the_field('flavor1'); ?></div>
					<div class="flavors chocolate"><?php the_field('flavor2'); ?></div>
					<div class="flavors caramel"><?php the_field('flavor3'); ?></div>
					<div class="flavors seasonal">
						<?php the_field('seasonal_flavor'); ?>
						<div class="sticker">
							seasonal flavor
						</div>
					</div>
				</div>

				<div class="main">
					<!-- <div class="sub-header"><?php the_title(); ?></div> -->
					<div class="paragraph"><?php the_field('text'); ?></div>
				</div>
				
				
			</article>
			<!-- /article -->

		<?php endwhile; ?>
		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
