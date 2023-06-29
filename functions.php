<?php
function carregar_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());

    // FONT
    wp_enqueue_style('icones', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null);

    // CSS
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/bootstrap/dist/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('splide.css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), null);

    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/compressed/style.min.css', false, '1.1', 'all');
    wp_enqueue_style('font', get_stylesheet_directory_uri() . '/assets/font.css', false, '1.1', 'all');
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/custom.css');

    // JS
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/vendor/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('splide.js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'carregar_scripts');

// HORARIO LISBOA
function lisbon_time_shortcode()
{
    date_default_timezone_set('Europe/Lisbon');
    return date('H:i');
}
add_shortcode('lisbon_time', 'lisbon_time_shortcode');


// COTAÇÃO EURO
function euro_exchange_rate_shortcode()
{
    $baseCurrency = 'EUR';
    $apiUrl = "https://api.exchangerate.host/latest?base=" . $baseCurrency;
    $response = wp_remote_get($apiUrl);

    if (is_wp_error($response)) {
        return 'Could not retrieve exchange rate.';
    }

    $content = wp_remote_retrieve_body($response);
    $data = json_decode($content, true);
    if (isset($data['rates']['BRL'])) {
        return substr(strval($data['rates']['BRL']), 0, 4);
    } else {
        return 'N/A';
    }
}
add_shortcode('euro_exchange_rate', 'euro_exchange_rate_shortcode');
