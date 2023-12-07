<?php
require_once 'libs/scssphp-1.12.0/scss.inc.php';
use ScssPhp\ScssPhp\Compiler;

function activar_menus()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 210, // Altura del logotipo
        'width'       => 600, // Ancho del logotipo
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'), // Mostrar el texto del sitio si no hay logotipo
    ));
}
add_action('after_setup_theme', 'activar_menus');

// Agregar estilos y scripts
function tu_tema_recursos()
{
    // Estilos
    wp_enqueue_style('estilos', get_stylesheet_uri());
    // Scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'tu_tema_recursos');

// Registrar menús
function registrar_menus()
{
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'textdomain'),
        'footer-menu' => __('Menú del Pie de Página', 'textdomain'),
    ));
}
add_action('init', 'registrar_menus');
function register_my_menus() {
    register_nav_menus(
        array(
            'footer-menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );



function cargar_scripts_personalizados()
{
    // Registra el archivo JavaScript
    wp_register_script('nombre-del-script', get_template_directory_uri() . '/assets/js/swiper.js', array('jquery'), '1.0', true);

    // Encola el archivo JavaScript
    wp_enqueue_script('nombre-del-script');
}
add_action('wp_enqueue_scripts', 'cargar_scripts_personalizados');


function compilar_scss()
{
    
        $ruta_destino = get_template_directory(). '/assets/css/styles.css';
        $compiler = new Compiler();
        $compiler->setImportPaths(get_template_directory() . '/assets/scss/');

        file_put_contents($ruta_destino, $compiler->compileFile(get_template_directory() . '/assets/scss/styles.scss')->getCss());

}

// Ejecutar la función en el gancho wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'compilar_scss');
