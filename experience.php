<?php 
/**
 * Plugin Name: Experience
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
* Do actions in plugin activation
*/
register_activation_hook( __FILE__ , function() {
    if ( ! wp_next_scheduled ( 'exp_daily_event' ) ) {
        wp_schedule_event( current_time( 'timestamp' ), 'daily', 'exp_daily_event' );
    }
} );

/*
* Do actions in plugin deactivation
*/
register_deactivation_hook( __FILE__ , function() {
    wp_clear_scheduled_hook( 'exp_daily_event' );
} );

add_action( 'exp_daily_event', function(){
    
    //code to execute every day
    
} );
