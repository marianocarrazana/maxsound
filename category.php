<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="content wrapper">

			<h1><?php single_cat_title(); ?></h1>

			<div class="frow"><?php get_template_part('loop'); ?></div>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
