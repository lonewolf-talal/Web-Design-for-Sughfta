<?php
function sughfta_enqueue_assets() {
    // Load main stylesheet
    wp_enqueue_style('sughfta-style', get_stylesheet_uri());

    // Load Font Awesome + Google Fonts
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap');

    // Load JS
    wp_enqueue_script('sughfta-script', get_template_directory_uri() . '/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'sughfta_enqueue_assets');
?>
