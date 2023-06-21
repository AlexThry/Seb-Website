<?php get_header(); ?>

<?php
wp_reset_query();
while (have_posts()) :
	the_post();
?>
	<section class="h-screen w-screen mb-5">
		<?php get_head_banner() ?>

		<section class="-mt-32 xs:-mt-16 sm:mt-0 ml-16 mr-16 md:ml-32 md:mr-32">
			<div class="flex items-center">
				<a href="<?php echo site_url('mes-projets') ?>" class="mr-5">
					<svg class="fill-black hover:fill-yellow-500 transition duration-150 h-8 w-8" version="1.1" baseProfile="tiny" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" width="800px" height="800px" viewBox="0 0 42 42" xml:space="preserve">
						<polygon fill-rule="evenodd" points="27.066,1 7,21.068 26.568,40.637 31.502,35.704 16.865,21.068 32,5.933 " />
					</svg>
				</a>
				<h1 class="text-5xl font-bold cursor-default the-title text-c">
					<?php the_title(); ?>
				</h1>
			</div>
			<div class="the-content">
				<?php the_content(); ?>
			</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>