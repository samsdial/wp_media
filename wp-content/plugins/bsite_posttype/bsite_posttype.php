<?php
/*
plugin Name: Base Site Post Types
plugin URI:
Description: Agregar Custom Post Types Al sitio
Version: 1.0
Author: Sergio Martinez
Author URI:
license: GLP2
license URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
/*function crear_post_type_home(){

    $labels = array(
        'name'                => _x( 'Home', 'Post Type General Name', 'smartinez' ),
        'singular_name'       => _x( 'Home', 'Post Type Singular Name', 'smartinez' ),
        'menu_name'           => __( 'Home', 'smartinez' ),
        'parent_item_colon'   => __( 'Home Padre', 'smartinez' ),
        'all_items'           => __( 'Todos los Homes', 'smartinez' ),
        'view_item'           => __( 'Ver Home', 'smartinez' ),
        'add_new_item'        => __( 'Agregar Nuevo Home', 'smartinez' ),
        'add_new'             => __( 'Agregar Nuevo Home', 'smartinez' ),
        'edit_item'           => __( 'Editar Home', 'smartinez' ),
        'update_item'         => __( 'Actualizar Home', 'smartinez' ),
        'search_items'        => __( 'Buscar Home', 'smartinez' ),
        'not_found'           => __( 'No encontrado', 'smartinez' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'smartinez' ),
    );


    $args = array(
        'label'               => __( 'home', 'gourmet-artistsmartinez' ),
        'description'         => __( 'Home news and reviews', 'smartinez' ),
        'labels'              => $labels,

        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions',  ),

        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-home',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );


    register_post_type('Home', $args);
}
add_action('init', 'crear_post_type_home', 0);*/

/*function tipo_home() {
    register_taxonomy(
        'horario-menu',
        'home',
        array(
            'label' => __( 'Tipo de home' ),
            'rewrite' => array( 'slug' => 'person' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'tipo_home' );*/

function home() {
    $labels = array(
        'name' => __( 'Home' ),
        'singular_name' => __( 'home' ),
        'add_new' => __( 'Añadir Nueva' ),
        'add_new_item' => __( 'Añadir Nuevo Home' ),
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
        /*'taxonomies' => array( 'category' ),*/
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'home' , $args );
}
add_action('init', 'home');