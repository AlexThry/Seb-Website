<?php get_header(); ?>

<?php
wp_reset_query();

?>

<section class="h-screen w-screen mb-5">
    <?php get_head_banner() ?>


    <section class="xxs:-mt-16 xs:mt-0 ml-16 mr-16 md:ml-32 md:mr-32">
        <h1 class="text-5xl font-bold mb-10 cursor-default the-title text-center">
            <?php echo get_the_title(get_queried_object_id()); ?>
        </h1>
        <?php if (get_field('content-position', get_queried_object_id()) == 'up') : ?>
            <section class="the-content">
                <?php
                $blog_page = get_queried_object();

                // Vérifier si la page de blog existe
                if ($blog_page) {
                    $blog_page_id = $blog_page->ID;
                    $blog_content = get_post_field('post_content', $blog_page_id);

                    // Afficher le contenu de la page de blog
                    echo $blog_content;
                }

                ?>
            </section>
        <?php endif; ?>
        <section class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">

                <?php while (have_posts()) : the_post(); ?>
                    <div class="max-w-60 max-h-40">
                        <a href="<?php the_permalink() ?>" class="inline-block max-w-60">
                            <div class="relative flex-row h-40 w-60 overflow-hidden transition duration-150">

                                <?php
                                $color = get_field('thumbnail-text-color', get_the_ID());

                                $thumbnail = get_the_post_thumbnail(get_the_ID(), array('thumbnail', 'medium'));
                                $thumbnail_with_min_height = str_replace('<img', '<img class="h-40 w-auto"', $thumbnail);

                                echo $thumbnail_with_min_height;
                                ?>

                                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 hover:bg-gray-900 hover:backdrop-blur hover:bg-opacity-60 hover:opacity-100 transition duration-150">
                                    <p class="text-<?php echo $color ?> text-lg font-bold"><?php the_title() ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <div class="mt-5">
            <?php the_posts_pagination(array(
                'prev_text' => '<span class="text-center px-8 py-2 w-full hover:bg-yellow-500 hover:bg-opacity-80 hover:border-yellow-500 transition duration-150 border">Précédent</span>',
                'next_text' => '<span class="text-center px-8 py-2 w-full hover:bg-yellow-500 hover:bg-opacity-80 hover:border-yellow-500 transition duration-150 border">Suivant</span>',
                'before_page_number' => '<span class="text-center px-4 py-2 w-full hover:bg-yellow-500 hover:bg-opacity-80 hover:border-yellow-500 transition duration-150 border">',
                'after_page_number' => '</span>',
            )); ?>
        </div>
        <?php if (get_field('content-position', get_queried_object_id()) == 'down') : ?>
            <section class="the-content">
                <?php
                $blog_page = get_queried_object();

                // Vérifier si la page de blog existe
                if ($blog_page) {
                    $blog_page_id = $blog_page->ID;
                    $blog_content = get_post_field('post_content', $blog_page_id);

                    // Afficher le contenu de la page de blog
                    echo $blog_content;
                }

                ?>
            </section>
        <?php endif; ?>
    </section>


<?php
// pourquoi le footer remonte sur les autres éléments ?


?>

<?php get_footer(); ?>