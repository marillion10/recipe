<?php if (get_header_image()) : ?>
	<?php
		if (is_category()) {
			$title = single_cat_title(__('', 'recipe'), false);

		} else if (is_tax('bs_recipe_tag')) {
			$title = single_term_title(__('', 'recipe'), false);

		} else if (is_post_type_archive('')) {
			$title = get_bloginfo('', false);

		} else if (is_tax('bs_recipe_category')) {
			$title = single_term_title(__('', 'recipe'), false);

		}else if (is_single()) {
			$title = __('Recipe', 'recipe');

		}else if (is_search()) {
			$title = sprintf(
				// translators: Search results for query %s
				__('Search results for "%s"', 'recipe'),
				htmlspecialchars($_REQUEST['s'])
			);

		} else {
			$title = get_the_title();

		}
	?>
	<div id="site-header">
		<img src="<?php header_image(); ?>"
			width="<?php echo absint(get_custom_header()->width); ?>"
			height="<?php echo absint(get_custom_header()->height); ?>"
			alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
			class="img-fluid"
		>
		<div class="header-text-wrapper">
			<div class="header-text display-5 mt-5"><?php echo $title; ?></div>
		</div>
	</div>
<?php endif; ?>
