<?php

get_template_part('template-parts/header-image');

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content container py-5 mt-5">
	<div id="primary" class="content-area">

		<!-- Hook to add something nice -->
		<?php bs_after_primary(); ?>

		<div class="row">
			<div class="col">

				<main id="main" class="site-main">

					<!-- Title & Description -->
					<header class="page-header mb-4">
						<h1><?php bloginfo(); ?></h1>

					</header>

					<!-- Grid Layout -->
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="card horizontal mb-4">
								<div class="row">

									<div class="col">
										<div class="card-body">

											<?php get_template_part('template-parts/content-bs_recipe', 'excerpt'); ?>
											<!-- Title -->

											<!-- Tags -->
											<?php bootscore_tags(); ?>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<!-- Pagination -->
					<div>
						<?php bootscore_pagination(); ?>
					</div>

				</main><!-- #main -->

			</div><!-- col -->

			<?php get_sidebar(); ?>
		</div><!-- row -->


		<!-- Recipe Image slider -->
		<center>
			<div class="flexslider2"><?php bs_recipe_gallery(); ?></div>
		</center>
		<!-- Recipe Image slider -->

	</div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
