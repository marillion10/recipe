<?php

		/**
		 * The template for displaying category pages
		 *
		 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
		 *
		 * @package Bootscore
 */

		get_header();
		get_template_part('template-parts/header-image');
		?>

		<?php
		// Load next post to display

		get_template_part('template-parts/content', 'excerpt');
		the_post();
		?>

		<?php
get_footer();
