<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title() ?></title>
    <?php wp_head() ?>
    <script src="<?php get_theme_file_uri('/assets/js/app.js') ?>"></script>
</head>


<body <?php body_class() ?>>
    <?php 
    global $header_color;
    $header_color = get_field('header-button-color', get_queried_object_id());
    ?>
    <?php if (!is_front_page()) : ?>

        <nav class="fixed backdrop-blur z-10 w-full nav-bar-header transition duration-300" data-color="<?php echo $header_color ?>">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="<?php echo get_home_url() ?>" class="flex items-center">
                    <span class="self-center text-2xl font-semibold text-<?php echo $header_color ?> whitespace-nowrap dark:text-<?php echo $header_color ?>"><?php bloginfo('name') ?></span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-<?php echo $header_color ?> md:hidden hover:bg-yellow-500 hover:text-black" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-4 md:mt-0 md:border-0">

                        <li>
                            <a href="<?php echo site_url() ?>" class="mb-1 md:mb-0 block border text-center text-<?php echo $header_color ?> px-8 py-2 w-full border-<?php echo $header_color ?> hover:bg-yellow-500 hover:border-yellow-500 hover:text-black transition duration-150" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('mes-projets') ?>" class="mb-1 md:mb-0 block rounded-none text-center px-8 py-2 w-full hover:bg-yellow-500 hover:border-yellow-500 hover:text-black transition duration-150 <?= (is_home() || is_single()) ? 'bg-yellow-500 bg-opacity-80 text-black' : 'text-' . $header_color ?>" aria-current="page">Mes projets</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('about') ?>" class="mb-1 md:mb-0 block text-center text-<?php echo $header_color ?> px-8 py-2 w-full hover:bg-yellow-500 hover:border-yellow-500 hover:text-black transition duration-150" aria-current="page">À propos</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('contact') ?>" class="mb-1 md:mb-0 block text-center px-8 py-2 w-full hover:bg-yellow-500 hover:border-yellow-500 hover:text-black transition duration-150 <?= (get_the_ID() == 53) ? 'bg-yellow-500 bg-opacity-80 text-black' : 'text-' . $header_color ?>" aria-current="page">contact</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>


    <?php endif; ?>