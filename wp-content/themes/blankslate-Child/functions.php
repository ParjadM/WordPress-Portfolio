<?php
//samething for footer wp_footer
//add_action ('wp_head', 'pm_header');
add_action('wp_enqueue_scripts', 'header_script');
add_action('after_setup_theme', 'register_menu', 0);
add_action('customize_register', 'customize_header');
add_action('customize_register', 'customize_footer');
add_action('wp_head', 'PREFIX_ID_custom_css');

function pm_header()
{
    echo "Hello world";
}

function header_script()
{
    $url = get_stylesheet_directory_uri() . "/js/script.js";
    wp_enqueue_script("test", $url);
}

function register_menu()
{
    register_nav_menus(array(
        'main-menu' => __('main-menu', 'nova-child'),
        'footer-menu' => __('footer-menu', 'nova-child')
    ));
}

function customize_header($wp_customize)
{
    //add section header 
    $wp_customize->add_section('Header_ID', array(
        'title' => __('Header Options', 'text-domain-ID'),
        'description' =>__('Header', 'text-domain-ID'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('Header_ID_options[wysiwyg]', array(
        'type' => 'option',
    ));
    $wp_customize->add_control('Header_ID_options_wysiwyg', array(
        'label' => __('Top Bar Text', 'text-domain-ID'),
        'section' => 'Header_ID',
        'settings' => 'Header_ID_options[wysiwyg]',
        'type' => 'textarea'
    ));
    //source CHATGPT for 'type' => 'option'
    $wp_customize->add_setting('Header_ID_options[phone]', array(
        'type' => 'option',
    ));
    $wp_customize->add_control('Header_ID_options_phone', array(
        'label' => __('Phone Number', 'text-domain-ID'),
        'section' => 'Header_ID',
        'description' => 'If left blank general phone number will be used',
        'settings' => 'Header_ID_options[phone]',
        'type' => 'text',
    ));
    
    //change email, I DID THIS!
    $wp_customize->add_setting('Header_ID_options[email]', array(
        'type' => 'option',
    ));
    $wp_customize->add_control('Header_ID_options_email', array(
        'label' => __('Email', 'text-domain-ID'),
        'section' => 'Header_ID',
        'description' => 'If left blank general email will be used',
        'settings' => 'Header_ID_options[email]',
        'type' => 'email',
    ));
    
    //gemini
    //change logo using url
    $wp_customize->add_setting('Header_ID_options[logo_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('Header_ID_options_logo_url', array(
        'label' => __('Or enter a Logo URL', 'text-domain-ID'),
        'section' => 'Header_ID',
        'settings' => 'Header_ID_options[logo_url]',
        'type' => 'url',
    ));

    // //social media link
    // $wp_customize->add_section('Header_ID', array(
    //     'title' => __('Header Options', 'text-domain-ID'),
    //     'description' => 'Header',
    //     'priority' => 10,
    // ));

    //add setting for font-family
    //gemini
    $wp_customize->add_setting('Header_ID_options[font_family]', array(
        'type' => 'option',
        'default' => 'Arial, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('Header_ID_options_font_family', array(
        'label' => __('Font Family', 'text-domain-ID'),
        'section' => 'Header_ID',
        'settings' => 'Header_ID_options[font_family]',
        'type' => 'select',
        'choices' => array(
            'Arial, sans-serif' => 'Arial',
            'Georgia, serif' => 'Georgia',
            'Times New Roman, serif' => 'Times New Roman',
            'Verdana, sans-serif' => 'Verdana',
            '"Comic Sans MS", cursive' => 'Comic Sans MS',
        ),
    ));
}

//gemini
function PREFIX_ID_custom_css() {
    $options = get_option('Header_ID_options'); 
    $font_family = isset($options['font_family']) ? esc_attr($options['font_family']) : 'Arial, sans-serif';
    ?>
    <style type="text/css">
        body {
            font-family: <?php echo $font_family; ?>;
        }
    </style>
    <?php
}

function customize_footer($wp_customize)
{
    //add section footer
    $wp_customize->add_section('Footer_ID', array(
        'title' => __('Footer Options', 'text-domain-ID'),
        'description' => __('Footer', 'text-domain-ID'),
        'priority' => 10,
    ));
    // Add social media settings
    $wp_customize->add_setting('Footer_ID_options[linkedin]', array(
        'type'              => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('Footer_ID_options_linkedin', array(
        'label'    => __('LinkedIn URL', 'text-domain-ID'),
        'section'  => 'Footer_ID',
        'settings' => 'Footer_ID_options[linkedin]',
        'type'     => 'url',
    ));
        //github
    $wp_customize->add_setting('Footer_ID_options[github]', array(
        'type'              => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('Footer_ID_options_github', array(
        'label'    => __('GitHub URL', 'text-domain-ID'),
        'section'  => 'Footer_ID',
        'settings' => 'Footer_ID_options[github]',
        'type'     => 'url',
    ));
        //instagram (done my self)
    $wp_customize->add_setting('Footer_ID_options[instagram]', array(
        'type'              => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('Footer_ID_options_instagram', array(
        'label'    => __('Instagram URL', 'text-domain-ID'),
        'section'  => 'Footer_ID',
        'settings' => 'Footer_ID_options[instagram]',
        'type'     => 'url',
    ));
        //facebook (done my self)
    $wp_customize->add_setting('Footer_ID_options[facebook]', array(
        'type'              => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('Footer_ID_options_facebook', array(
        'label'    => __('Facebook URL', 'text-domain-ID'),
        'section'  => 'Footer_ID',
        'settings' => 'Footer_ID_options[facebook]',
        'type'     => 'url',
    ));    
    //change footer description
    $wp_customize->add_setting('Footer_ID_options[footer_wysiwyg]', array(
        'type' => 'option',
    ));
    $wp_customize->add_control('Footer_ID_options_footer_wysiwyg', array(
        'label' => __('Bottom-Text-Description', 'text-domain-ID'),
        'section' => 'Footer_ID',
        'description' => 'If left blank general footer description will be used',
        'settings' => 'Footer_ID_options[footer_wysiwyg]',
        'type' => 'text'
    ));
    //buttom left published page
    $wp_customize->add_setting('Footer_ID_options[website_page]', array(
        'type' => 'option',
    ));
    $wp_customize->add_control('Footer_ID_options_website_page', array(
        'label' => 'website page',
        'type' => 'dropdown-pages',
        'section' => 'Footer_ID',
        'settings' => 'Footer_ID_options[website_page]'
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
