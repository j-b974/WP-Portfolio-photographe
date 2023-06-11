<?php


function create_post_type(){


    $arg = [
        'label' => "carte prestation",
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-clipboard',
        'menu_position' => 2,
        'show_in_rest' => true,
        'show_ui'=>true
        // 'supports' => ['thumbnail', 'title', 'editor'] ;
    ];

    register_post_type('card_pretation',$arg);


    $labelTaxo =
        [
            'name'=>"Promotion"
        ];
    $argTaxo = 
        [
            'labels' => $labelTaxo,
            'hierarchical' => true,
            'public' => false,
            'show_ui' => true,
            'show_in_rest' => true
        ];
    register_taxonomy('Promotion','card_pretation',$argTaxo);

}
add_action('init','create_post_type');


function loaderFiles(){

    wp_register_style('styleInit', get_template_directory_uri().'/css/style.css');
    wp_register_style('awsomeIcon','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_register_style('swipperCss','https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');

    wp_enqueue_style('swipperCss');
    wp_enqueue_style('awsomeIcon');
    wp_enqueue_style('styleInit');

    wp_register_script('mainJs',get_template_directory_uri().'/js/main.js',[],false,true); 
    wp_register_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js',false,true); 
    wp_register_script('swipper','https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js',['jquery'],false,true);

    wp_enqueue_script('swipper');
    wp_enqueue_script('mainJs');
}
add_action('wp_enqueue_scripts','loaderFiles');

function theme_support(){

    add_theme_support('menu');
    register_nav_menu('navHearder',"menu entete du site ");
}
add_action('after_setup_theme','theme_support');


function nav_menu_theme($arg){

    // var_dump(func_get_args()); => pour voir tous les paramettre renvoyer

    // retire class des li 
    return [];
}

add_filter('nav_menu_css_class', 'nav_menu_theme');

add_filter( 'wpcf7_validate_configuration', '__return_false' );

/*Contact form 7 remove span*/
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
    $content = str_replace('<p>', '', $content);
    $content = str_replace('</p>', '', $content);

    $name = 'name="username"';
    $name2 = 'name="mail"';
    $str_pos = strpos( $content, $name );
    $str_pos2 = strpos( $content, $name2 );
    if (false !== $str_pos) {
        $content = substr_replace( $content, ' required="required" ', $str_pos, 0 );
    }
    if(false !== $str_pos2){
        $content = substr_replace( $content, ' required="required" ', $str_pos2, 0 );
    }

        
    return $content;
});