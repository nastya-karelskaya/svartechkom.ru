<?php
/**
 * svartechkom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package svartechkom
 */



/**
 * Enqueue scripts and styles.
 */
//echo 'gfgjfhjghjhgkjghkjhg1';




add_action( 'wp_enqueue_scripts', 'svartechkom_scripts' ); 

function svartechkom_scripts() {

	

	wp_enqueue_style( 'svartechkom-main-style', get_stylesheet_uri() );

	wp_enqueue_style( 'svartechkom-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	wp_enqueue_style( 'svartechkom-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css');

	wp_enqueue_style( 'svartechkom-styles', get_template_directory_uri() . '/assets/css/main-styles.css');


	// wp_enqueue_script( 'svartechkom-js-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', true);

	//wp_enqueue_script( 'svartechkom-js-main', get_template_directory_uri() . '/assets/js/main.js', true);

	

}



/** 
 * Register Nav Menu
 */

add_action('after_setup_theme', 'svartechkom_menus');

function svartechkom_menus() {
	register_nav_menu('bottom', 'desktop_menu');

	add_theme_support('post-thumbnails', array( 'post', 'objects', 'services', 'reviews' ) );

	add_theme_support( 'html5', array( 'search-form' ) );

	add_theme_support( 'custom-logo', [
		'height'      => 70,
		'width'       => 70,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );


}



/**
 * Register Services type post
 */

add_action('init', 'register_svar_services');
function register_svar_services(){
	register_post_type('allservices', array(
		'labels'             => array(
			'name'               => 'Услуги', // Основное название типа записи
			'singular_name'      => 'Услуга', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          =>  'Услуг не найдено',
			'not_found_in_trash' => 'В корзине услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		//'taxonomies'         => array('services_type'),
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}


add_action('init', 'register_svar_objects');
function register_svar_objects(){
	register_post_type('objects', array(
		'labels'             => array(
			'name'               => 'Объекты', // Основное название типа записи
			'singular_name'      => 'Объект', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый объект',
			'edit_item'          => 'Редактировать объект',
			'new_item'           => 'Новый объект',
			'view_item'          => 'Посмотреть объект',
			'search_items'       => 'Найти объект',
			'not_found'          =>  'Объектов не найдено',
			'not_found_in_trash' => 'В корзине объектов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Объекты'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}


add_action('init', 'register_svar_reviews');
function register_svar_reviews(){
	register_post_type('allreviews', array(
		'labels'             => array(
			'name'               => 'Отзывы', // Основное название типа записи
			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый отзыв',
			'edit_item'          => 'Редактировать отзыв',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Посмотреть отзыв',
			'search_items'       => 'Найти отзыв',
			'not_found'          =>  'Отзывов не найдено',
			'not_found_in_trash' => 'В корзине отзывов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}



/** 
 * Register Taxonomies
 */

 // хук для регистрации
// add_action( 'init', 'create_taxonomy' );

// function create_taxonomy(){
	
// 	register_taxonomy('services_type', array('objects'), array(
// 		'label'                 => '', // определяется параметром $labels->name
// 		'labels'                => array(
// 			'name'              => 'Типы работ',
// 			'singular_name'     => 'Типы работ',
// 			'search_items'      => 'Поиск Типы работ',
// 			'all_items'         => 'Все Типы работ',
// 			'view_item '        => 'Показать Типы работ',
// 			'parent_item'       => 'Родитель Типы работ',
// 			'parent_item_colon' => 'Родитель Типы работ:',
// 			'edit_item'         => 'Редактировать Типы работ',
// 			'update_item'       => 'Обновить Типы работ',
// 			'add_new_item'      => 'Добавить новое Типы работ',
// 			'new_item_name'     => 'Новое имя для Типы работ',
// 			'menu_name'         => 'Типы работ',
// 		),
// 		'description'           => '', // описание таксономии
// 		'public'                => true,
// 		'publicly_queryable'    => null, // равен аргументу public
// 		// 'show_in_nav_menus'     => true, // равен аргументу public
// 		// 'show_ui'               => true, // равен аргументу public
// 		// 'show_in_menu'          => true, // равен аргументу show_ui
// 		// 'show_tagcloud'         => true, // равен аргументу show_ui
// 		// 'show_in_rest'          => null, // добавить в REST API
// 		// 'rest_base'             => null, // $taxonomy
// 		'hierarchical'          => false,
// 		//'update_count_callback' => '_update_post_term_count',
// 		'rewrite'               => true,
// 		//'query_var'             => $taxonomy, // название параметра запроса
// 		//'capabilities'          => array(),
// 		//'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
// 		//'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
// 		//'_builtin'              => false,
// 		//'show_in_quick_edit'    => null, // по умолчанию значение show_ui
// 	) );


// }


// add_action( 'init', 'services_type_for_pages' );
// function services_type_for_pages(){
// 	register_taxonomy_for_object_type( 'services_type', 'objects');
// }






?>
