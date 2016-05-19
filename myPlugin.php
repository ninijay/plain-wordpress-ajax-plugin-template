<?php
    /*
    Plugin Name: My Plugin Name
    Plugin URI:  http://URI_Of_Page_Describing_Plugin_and_Updates
    Description: What does it do?
    Version:     1.0.0
    Author:      Mattia Ninivaggi
    Author URI:  http://URI_Of_The_Plugin_Author
    License:     GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    Domain Path: /languages
    Text Domain: my-plugin
    */

    /** Step 2 (from text above). */
    add_action( 'admin_menu', 'my_plugin_menu' );

    /** Step 1. */
    function my_plugin_menu() {
        global $myplugin_menu;
		// Add Plugin to Admin Menu
        $myplugin_menu = add_menu_page( 'Description', 'Name', 'permission, eg: manage_options', 'url', 'my_plugin_options' , 'icon, eg: dashicons-images-alt2');
    }

    /** Step 3. */
    function my_plugin_options() {
		// Check for Permission
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }

?>
        <!-- If Permission ist given, draw form -->
		<div class="wrap">
            <h2> <?php _e('title', 'slug'); ?></h2>
            <form id='slug-form' action="" method="POST">
                <div>
                    <input type="submit" name="slug-submit" class="button-primary" value="<?php _e('My Button', 'slug'); ?>"/>
                </div>
            </form>
        </div>
<?php
    }
	

    /*
     *  Needed for AJAX
     */
    function slug_load_scripts($hook){
        global $myplugin_menu;

        if($hook != $myplugin_menu)
            return;
        wp_enqueue_script('slug-ajax', plugins_url('/js/slug-ajax.js', __FILE__), array('jquery'));
    }
    
    add_action('admin_enqueue_scripts', 'slug_load_scripts');

    /*
     *  The Ajax- Process you want to be executed
     */
    function slug_process_ajax(){
        
        
        // wordpress standard. has to be at end of function
        wp_die();
    }   

    add_action('wp_ajax_slug_myaction', 'slug_process_ajax');
?>