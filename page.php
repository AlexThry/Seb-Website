<?php get_header(); ?>

<?php
wp_reset_query();
while (have_posts()) :
	the_post();
?>
	<section class="h-screen w-screen mb-5">
		<?php get_head_banner() ?>

		<section class="-mt-32 xs:-mt-16 sm:mt-0 ml-16 mr-16 md:ml-32 md:mr-32">
			<h1 class="text-5xl font-bold mb-10 cursor-default the-title">
				<?php the_title(); ?>
			</h1>
			<div class="flex-col the-content ml-10 mr-10">
				<?php the_content(); ?>
			</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>