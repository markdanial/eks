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
				
				<div class="flavors vanilla"><?php the_field('flavor1'); ?></div>
				<div class="flavors chocolate"><?php the_field('flavor2'); ?></div>
				<div class="flavors caramel"><?php the_field('flavor3'); ?></div>
				<div class="flavors seasonal">
					<?php the_field('seasonalflavor'); ?>
					<div class="sticker">
						seasonal flavor
					</div>
				</div>

				<div class="main">
					<div class="sub-header"><?php the_field('homeheader'); ?></div>
					<div class="paragraph"><?php the_field('hometext'); ?></div>
				</div>
				
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
