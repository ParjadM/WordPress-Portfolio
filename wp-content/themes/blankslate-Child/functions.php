<?php 
//samething for footer wp_footer
//add_action ('wp_head', 'pm_header');
add_action ('wp_enqueue_scripts', 'header_script');
add_action ('after_setup_theme', 'register_menu',0);
add_action('customize_register', 'customize_header');

function pm_header(){
    echo "Hello world";
}

function header_script(){
    $url = get_stylesheet_directory_uri() . "/js/script.js";
    wp_enqueue_script("test", $url);
}

function register_menu() {
    register_nav_menus( array(
        'main-menu' => __('main-menu','nova-child'),
        'footer-menu' => __('footer-menu','nova-child')
    ));
}

function customize_header($wp_customize) {
    $wp_customize->add_section('PREFIX_ID', array(
        'title' => __('Header Options', 'text-domain-ID'),
        'description' => 'Header',
        'priority' => 9,
    ));
    $wp_customize->add_setting('PREFIX_ID_options[wysiwyg]', array(
        'type' => 'option', 
    ));
     $wp_customize->add_control('PREFIX_ID_options_wysiwyg', array(
        'label' => __('Top Bar Text', 'text-domain-ID'),
        'section' => 'PREFIX_ID',
        'settings' => 'PREFIX_ID_options[wysiwyg]',
        'type' => 'textarea'
    ));
    //source CHATGPT
    $wp_customize->add_setting('PREFIX_ID_options[phone]', array(
        'type' => 'option', 
    ));
    $wp_customize->add_control('PREFIX_ID_options_phone', array(
        'label' => __('Phone Number', 'text-domain-ID'),
        'section' => 'PREFIX_ID',
        'description' => 'If left blank general phone number will be used',
        'settings' => 'PREFIX_ID_options[phone]',
        'type' => 'text',
    ));
    $wp_customize->add_setting('PREFIX_ID_options[website_page]', array(
        'type' => 'option', 
    ));
    $wp_customize->add_control('PREFIX_ID_options_website_page', array(
        'label' => 'website page',
        'type' => 'dropdown-pages',
        'section' => 'PREFIX_ID',
        'settings' => 'PREFIX_ID_options[website_page]'
    ));
}



#for both header and footer
#font-family
#font-size
#color
#linear gradiant
#phone number
#email
#text shadow
#logo





