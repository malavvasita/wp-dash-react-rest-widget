<?php
/**
 * Plugin Name: WP Dashboard React + Rest API Widget
 * Description: Render graph on WP ADMIN Dashboard through Widget using ReactJS + REST Api + Recharts.
 * Version: 1.0.0
 * Author: Malav V
 * Author URI: https://malavvasita.github.io
 * Plugin URI: https://malavvasita.github.io
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'DASH_GRAPH_WIDGET_VERSION', '1.0.0' );

function dashboard_widget_scripts(){

    wp_enqueue_script(
        'wpd_react_app', 
        plugin_dir_url(__FILE__) . 'dist/app.js', 
        array('wp-api', 'wp-element'), 
        DASH_GRAPH_WIDGET_VERSION, 
        true
    );

    wp_enqueue_style(
        'wpd_dashboard_style', 
        plugin_dir_url(__FILE__) . 'dist/style.css', 
        array(), 
        DASH_GRAPH_WIDGET_VERSION, 
        'all'
    );

}
add_action('admin_enqueue_scripts', 'dashboard_widget_scripts');

function dashboard_widget() {
    wp_add_dashboard_widget(
        'custom_dashboard_widget',
        'Graph',
        'custom_dash_graph_widget'
    );
}
add_action( 'wp_dashboard_setup', 'dashboard_widget' );

function custom_dash_graph_widget(){
    echo "<div id='dashboard-widget-container'></div>";
}

add_action( 'rest_api_init', 'wp_add_rest_api_endpoint' );
function wp_add_rest_api_endpoint(){
    register_rest_route(
        'wpdw/v1',
        '/graph-data/(?P<days>\d+)',
        array(
            'methods' => 'GET',
            'callback' => 'wpdw_get_graph_data'
        )
    );
}

function wpdw_get_graph_data( $req ){
    $days = sanitize_text_field( $req['days'] );
    // Query the database and retrieve the graph data based on the selected days range
    // The data should be returned in JSON format

    $wpdw_graph_data = get_option( 'wpdw_graph_data' )[$days];

    wp_send_json( $wpdw_graph_data );

}


