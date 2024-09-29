<?php
/*
Plugin Name: Photo Gallery Shortcode
Description: A simple photo gallery that can be embedded with a shortcode.
Version: 1.2
Author: Yevhen Perediela
*/

function photo_gallery_shortcode() {
    ob_start();

    ?>
    <div class="gallery-wrapper">
        <div class="gallery" id="gallery">
            <img src="https://sitename/wp-content/uploads/2024/07/kom1.jpg" class="gallery-item">
            <img src="https://sitename/wp-content/uploads/2024/07/kom2.jpg" class="gallery-item">
            <img src="https://sitename/wp-content/uploads/2024/07/kom3.jpg" class="gallery-item">
            <img src="https://sitename/wp-content/uploads/2024/07/kom4.jpg" class="gallery-item">
            <img src="https://sitename/wp-content/uploads/2024/07/kom5.jpg" class="gallery-item">
            <img src="https://sitename/wp-content/uploads/2024/07/kom6.jpg" class="gallery-item">
            <img src="https://sitename/wp-content/uploads/2024/07/kom7.jpg" class="gallery-item">
            <img src="https://sitename/wp-content/uploads/2024/07/kom8.jpg" class="gallery-item">
        </div>
    </div>

    <div id="fullscreenOverlay" class="overlay">
        <img id="fullscreenImage" src="" alt="Full Image">
    </div>

    <?php

    wp_enqueue_style('photo-gallery-style', plugin_dir_url(__FILE__) . 'style.css');
    wp_enqueue_script('photo-gallery-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), null, true);

    return ob_get_clean();
}


add_shortcode('photo_gallery', 'photo_gallery_shortcode');

function photo_gallery2_shortcode() {
    ob_start();

    ?>
    <div class="gallery2-wrapper">
        <div onclick="Strzalka(0)">
            <img style="transform: rotate(180deg);" class="arrow arrowLeft" src="https://sitename/wp-content/uploads/2024/08/arrow.png">
        </div>
        <div class="gallery2" id="gallery2">
            <img src="https://sitenamel/wp-content/uploads/2024/09/1.png" alt="photo" id='image'>
        </div>
        <div onclick="Strzalka(1)">
            <img class="arrow arrowRight" src="https://sitename/wp-content/uploads/2024/08/arrow.png">
        </div>
    </div>

    <?php

    wp_enqueue_style('photo-gallery-style');
    wp_enqueue_script('photo-gallery-script');

    return ob_get_clean();
}

add_shortcode('photo_gallery2', 'photo_gallery2_shortcode');

function photo_gallery_enqueue_scripts() {
    wp_register_style('photo-gallery-style', plugin_dir_url(__FILE__) . 'style.css');
    wp_register_script('photo-gallery-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'photo_gallery_enqueue_scripts');

?>
