<?php

get_template_part('template-parts/header-image');

		/**
		 * The template for displaying category pages
		 *
		 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
		 *
		 * @package Bootscore
 */

		get_header();
		?>

		<?php
		// Load next post to display
		the_post();
		get_template_part('template-parts/content', 'excerpt');
		?>

		<?php
get_footer();
