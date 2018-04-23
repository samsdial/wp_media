<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// production
add_action('init', 'product');
function product() {
    $labels = array(
        'name' => __( 'Producto' ),
        'singular_name' => __( 'Producto' ),
        'add_new' => __( 'Añadir Nueva' ),
        'add_new_item' => __( 'Añadir Nuevo Producto' ),
        'edit_item' => __( 'Editar Producto' ),
        'new_item' => __( 'Nueva Producto'),
        'view_item' => __( 'Ver Producto'),
        'search_items' => __( 'Buscar Producto'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-awards',
        'public' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
      );
    register_post_type( 'producto' , $args );
}
