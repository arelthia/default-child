<?php
// Tell the main theme that a child theme is running. Do not remove this.
$GLOBALS['builder_child_theme_loaded'] = true;

// Theme Support Features
add_theme_support( 'builder-3.0' ); // Adds Support for Builder 3.0
add_theme_support( 'builder-responsive' ); // Adds Responsive Capabilities, limits column widths to be a minimum of 300px wide before breaking down
add_theme_support( 'builder-full-width-modules' ); // Adds Full Browser Width Background Modules
add_theme_support( 'post-formats', array( 'image', 'quote', 'status' ) );


// Enqueue fonts, styles, and javascript
function custom_load_custom_scripts() {

}
add_action( 'wp_enqueue_scripts', 'custom_load_custom_scripts' );




// Adds Support for Alternate Module Styles
if ( ! function_exists( 'it_builder_loaded' ) ) {
	function it_builder_loaded() {
		//builder_register_module_style( 'module name', 'label', 'custom-class-name' );
	}
}
add_action( 'it_libraries_loaded', 'it_builder_loaded' );


// Registers Featured Image Sizes
if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'index_thumbnail', 0, 0, true );
}


