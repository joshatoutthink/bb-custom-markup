<?php

/**
 * 
 *
 * @link              outthinkgroup.com
 * @since             1.0.0
 * @package           bb_commander
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Markup for Beaver Builder
 * Plugin URI:        
 * Description:       Adds Custom Module to display a custom HTML markup with custom fields.
 * Version:           1.0.1
 * Author:            Outthink
 * Author URI:        outthinkgroup.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bb_cm
 * Domain Path:       /languages
 */

define( 'BB_CM_VERSION', '1.0.0' );
define( 'BB_CM_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_CM_URL', plugins_url( '/', __FILE__ )  );

function init_custom_modules() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'custom-markup/custom-markup.php';
        require_once 'fields/config.php';
    }
}
add_action( 'init', 'init_custom_modules' );

