<?php
get_header();
get_template_part('template-parts/header-image');
?>

<!-- tag.php -->
<main class="container pt-5">
	<?php if (!get_header_image()) : ?>
		<h1 class="mt-5"><?php single_term_title(); ?></h1>
	<?php endif; ?>

	<div class="row mb-5">
		<div class="col-md-8 mb-5">
			<!-- Do we have any posts to display? -->
			<h1><?php single_term_title(); ?></h1>

			<?php if (have_posts()) : ?>
				<!-- Yay, we have posts do display! -->
				<?php while (have_posts()) : ?>
					<!-- Start post -->
					<?php
					// Load next post to display
					the_post();
					get_template_part('template-parts/content-bs_recipe', 'excerpt');
					?>
					<!-- End post -->
				<?php endwhile; ?>
			<?php else : ?>
				<h4 class="mt-5">Sorry, no recipes found on this side.</h4>
			<?php endif; ?>
		</div><!-- /.col-md-9 -->
		<aside class="col-md-3 sidebar"><?php get_sidebar('recipe'); ?></aside>
	</div><!-- /.row -->
</main><!-- /.container -->

<?php
get_footer();
