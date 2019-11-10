<?php
function vip_scripts() {
    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri() . '/css/style.css',
        array(),
        filemtime(get_template_directory() . '/css/style.css'),
        false
    );

    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/js/script.js',
        [],
        filemtime(get_template_directory() . '/css/style.css'),
        true
    );
}

add_action( 'wp_enqueue_scripts', 'vip_scripts' );

