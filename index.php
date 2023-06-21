<?php get_header(); ?>

<?php
wp_reset_query();

?>

<main class="h-screen w-screen mb-5">
    <?php get_head_banner() ?>


    <section class="-mt-32 xs:-mt-16 sm:mt-0 ml-16 mr-16 md:ml-32 md:mr-32 text-center">
        <h1 class="text-5xl font-bold mb-10 cursor-default the-title">
            <?php echo get_the_title(get_queried_object_id()); ?>
        </h1>
        <section class="the-content-page">
            <?php
            if (get_field('content-position', get_queried_object_id()) == 'up') {
                $blog_page = get_queried_object();

                // Vérifier si la page de blog existe
                if ($blog_page) {
                    $blog_page_id = $blog_page->ID;
                    $blog_content = get_post_field('post_content', $blog_page_id);

                    // Afficher le contenu de la page de blog
                    echo $blog_content;
                }
            }
            ?>
        </section>
        <div class="flex flex-wrap gap-3 justify-center">

            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink() ?>" class="-my-2">
                    <div class="relative mb-3 flex-row h-40 w-60 overflow-hidden transition duration-150">

                        <?php
                        $color = get_field('thumbnail-text-color', get_the_ID());

                        $thumbnail = get_the_post_thumbnail(get_the_ID(), array('thumbnail', 'medium'));
                        $thumbnail_with_min_height = str_replace('<img', '<img class="h-40 w-auto"', $thumbnail);

                        echo $thumbnail_with_min_height;
                        ?>

                        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 hover:backdrop-blur-sm hover:opacity-100 transition duration-150">
                            <p class="text-<?php echo $color ?> text-lg font-bold"><?php the_title() ?></p>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
        <div class="mt-5">
            <?php the_posts_pagination(array(
                'prev_text' => '<span class="text-center px-8 py-2 w-full hover:bg-yellow-500 hover:bg-opacity-80 hover:border-yellow-500 transition duration-150 border">Précédent</span>',
                'next_text' => '<span class="text-center px-8 py-2 w-full hover:bg-yellow-500 hover:bg-opacity-80 hover:border-yellow-500 transition duration-150 border">Suivant</span>',
                'before_page_number' => '<span class="text-center px-4 py-2 w-full hover:bg-yellow-500 hover:bg-opacity-80 hover:border-yellow-500 transition duration-150 border">',
                'after_page_number' => '</span>',
            )); ?>
        </div>
        <section class="the-content-page">
            <?php
            if (get_field('content-position', get_queried_object_id()) == 'down') {
                $blog_page = get_queried_object();

                // Vérifier si la page de blog existe
                if ($blog_page) {
                    $blog_page_id = $blog_page->ID;
                    $blog_content = get_post_field('post_content', $blog_page_id);

                    // Afficher le contenu de la page de blog
                    echo $blog_content;
                }
            }
            ?>
        </section>
    </section>


</main>


<?php get_footer(); ?>