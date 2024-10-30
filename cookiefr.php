<?php
/*
Plugin Name: cookiefr
Plugin URI: https://www.frannuaire-gratuit.com/wp/cookiefr/
Description: plugin permettant de gérer le message réglamentaire de cookie.
Version: 0.2
Author: Kévin FERRANDON
Author URI: https://www.kevin-ferrandon.fr/
License: GPL2
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'un plugin wordpress ne peut pas être appelé directement.';
	exit;
}

function wptuts_cookiefr_script()
{

    wp_register_script( 'custom-script', plugins_url( '/js/cookie.js', __FILE__ ) );
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/cookie.js' );
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_cookiefr_script' );