<?php

// Carica gli stili del tema genitore
function astra_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');


// Carica lo script personalizzato
function astra_child_enqueue_custom_js() {
    wp_enqueue_script(
        'script-js', // Nome dello script
        get_stylesheet_directory_uri() . '/js/script.js', // Percorso del file
        array(), // Dipendenze (nessuna in questo caso)
        '1.0', // Versione
        true // Carica il file in fondo alla pagina (prima della chiusura di </body>)
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_custom_js');


// Utilizzo di un hook Wordpress (wp-footer) per aggiungere un messaggio nel footer
function astra_child_custom_footer_message() {
    echo '<p style="text-align: center; color: red;">Ho aggiunto questo messaggio grazie a un hook di WordPress</p>';
}
add_action('wp_footer', 'astra_child_custom_footer_message');

