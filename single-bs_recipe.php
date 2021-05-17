<?php
get_template_part('template-parts/header-image');

/*
	 * Template Post Type: post
	 */

get_header();  ?>

<div id="content" class="site-content container py-5 mt-4">
	<div id="primary" class="content-area">

		<!-- Hook to add something nice -->
		<?php bs_after_primary(); ?>

		<div class="row">
			<div class="col-md-8 col-xxl-9">

				<main id="main" class="site-main">

					<header class="entry-header">
						<?php the_post(); ?>
						<?php bootscore_category_badge(); ?>
						<?php the_title('<h1>', '</h1>'); ?>
						<p class="entry-meta">
							<small class="text-muted">
								<?php bs_recipe_meta(); ?>
							</small>
						</p>
						<?php bootscore_post_thumbnail(); ?>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php bootscore_bs_servings(); ?>
					</div>
					<?php comments_template(); ?>

				</main> <!-- #main -->

			</div><!-- col -->
			<?php get_sidebar(); ?>

			<div class="container">
				<div class="row">

					<div class="col-6"><?php bootscore_bs_headline(); ?>
						<?php bootscore_bs_ingridients(); ?></div>
					<div class="col-6"><?php bootscore_bs_instr_headline(); ?>
						<?php bootscore_bs_instructions(); ?></div>
				</div>
			</div>

			<footer class="entry-footer clear-both">
				<div>
					<?php bootscore_tags(); ?>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item">
							<?php previous_post_link('%link'); ?>
						</li>
						<li class="page-item">
							<?php next_post_link('%link'); ?>
						</li>
					</ul>
				</nav>
			</footer>


		</div><!-- row -->
	</div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>