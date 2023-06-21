<?php

function get_head_banner() {
    if (get_field('header-video', get_queried_object_id())) : ?>
        <header class="h-1/3 w-screen overflow-hidden video-header" id="header">
            <video autoplay muted loop id="myVideo" class="min-w-full">
                <source src="<?php the_field('header-video', get_queried_object_id()) ?>" type="video/mp4">
            </video>
        </header>
    <?php else : ?>
        <header class="h-1/3 w-screen image-header" id="header" style="background-image: url('<?php
                                                                                    $field = get_field('header-image', get_queried_object_id());
                                                                                    if ($field) {
                                                                                        echo $field;
                                                                                    }
                                                                                    ?>')">
        </header>
    <?php endif; 
}

function sebWeb_files() {
    wp_enqueue_style('sebWeb_main_styles', get_theme_file_uri('/assets/css/output.css'));
    wp_enqueue_style('sebWeb_secondary_styles', get_theme_file_uri('/assets/css/sebWeb.css'));
    if (!is_front_page()) {
        //add script app.js
        wp_enqueue_script('sebWeb_app_js', get_theme_file_uri('/assets/js/app.js'), NULL, '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'sebWeb_files');

function sebWeb_features() {
    add_theme_support('title-tag');
    register_nav_menu('frontPageMenuLocation', 'Front Page Menu Location');
    add_theme_support('post-thumbnails');
    add_theme_support('page-attributes');
    add_image_size('pageBanner', 1500, 350, true);
    set_post_thumbnail_size(150, 150, true);
}

add_action('after_setup_theme', 'sebWeb_features');

function sebWeb_customize($wp_customize) {
    $wp_customize->add_section('section_lien', array(
        'title' => 'Mes Liens',
        'priority' => 30,
    ));

    $wp_customize->add_setting('lien_setting_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('lien_control_linkedin', array(
        'label' => 'Linkedin',
        'section' => 'section_lien',
        'settings' => 'lien_setting_linkedin',
        'type' => 'url',
    ));

    $wp_customize->add_setting('lien_setting_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('lien_control_instagram', array(
        'label' => 'Instagram',
        'section' => 'section_lien',
        'settings' => 'lien_setting_instagram',
        'type' => 'url',
    ));

    $wp_customize->add_setting('lien_setting_youtube', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('lien_control_youtube', array(
        'label' => 'Youtube',
        'section' => 'section_lien',
        'settings' => 'lien_setting_youtube',
        'type' => 'url',
    ));
}

add_action('customize_register', 'sebWeb_customize');
