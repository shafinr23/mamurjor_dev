<?php
require_once get_template_directory() . '/inc/tgm.php';
//require_once get_template_directory() . '/inc/acf-b.php';
require_once get_template_directory() . '/inc/cmb2-b.php';
define('ACF_EARLY_ACCESS', '5');

function mamurjor_dev(){
    load_theme_textdomain("mamurjor");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support( 'html5', array( 'search-form' ) );
    $mamurjor_custom_header = array(
        'header-text'           =>  true,
        'default-text-color'    => '#elelel' ,
        'width'                 => 1200,
        'height'                =>  600,
        'felx-height'           => true,
        'flex-width'            => true

    );
    add_theme_support("custom-header",$mamurjor_custom_header );
    $mamurjor_custom_logo= array(
        "width"         => '100',
        "height"        =>  '100'
    );
    add_theme_support( "custom-logo",$mamurjor_custom_logo );
    add_theme_support("custom-background");
    register_nav_menu("topmenu",__("Top menu","memurjor"));
    add_theme_support("post-formats",array("image","video", "audio"));


    add_image_size("mammurjor-square",400,400,true);
    add_image_size("mamurjor-portrait",400,900);
    add_image_size("mamurjor-landscape",900,400);
}
add_action("after_setup_theme","mamurjor_dev");

function mamurjor_script(){

        wp_enqueue_style("mamurjor_text","//fonts.googleapis.com/css?family=Nova+Mono");
        wp_enqueue_style("mamurjor_boot","//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
        wp_enqueue_style("mamurjor_lightbox","//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css");
        wp_enqueue_style("dashicons");


        wp_enqueue_script("mamurjor_lightbox" ,"//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js" ,array("jquery"),"0.0.2",true);

        wp_enqueue_script("mamurjor-mainJs", get_theme_file_uri("/assets/js/main.js"), null ,"0.0.1",true);


    wp_enqueue_style( "style", get_stylesheet_uri());



}
add_action("wp_enqueue_scripts","mamurjor_script");

function mamurjor_sidebar(){
    register_sidebar(
        array(
            'name'      =>      __('right sidebar', 'mamurjor' ),
            'id'        =>      __('sidebar1'),
            'description'   =>  __('this is right sidebar ','mamurjor'),
            'before_widget' =>  '<ul>',
            'after_widget'  =>  '</ul>',
            'before_title'  =>  '<h2>',
            'after_title'   =>  '</h2>'
        )
    );
    register_sidebar(
        array(
            'name'      =>      __('footer area', 'mamurjor' ),
            'id'        =>      __('footer'),
            'description'   =>  __('this is right sidebar ','mamurjor'),
            'before_widget' =>  '',
            'after_widget'  =>  '',
            'before_title'  =>  '',
            'after_title'   =>  ''
        )
    );

}

add_action("widgets_init","mamurjor_sidebar");

function mamurjor_excerpt($excerpt){
    if(!post_password_required()){
        return $excerpt;
    }else{
        echo get_the_password_form();
    }
}
add_filter("the_excerpt","mamurjor_excerpt");

function mamurjor_pro_title(){
    return "Locked: %s";
}

add_filter("protected_title_format","mamurjor_pro_title");




if(!function_exists("mamurjor_header")) {

    function mamurjor_header()
    {
        if (is_page()) {
            $alpha_feat_image = get_the_post_thumbnail_url(null, "large");
            ?>
            <style>
                #header-wrapper {
                    background-image: url(<?php echo header_image(); ?>);

                }
            </style>
            <?php
        }
        if (is_front_page()) {
            if (current_theme_supports("custom-header")) {
                ?>
                <style>
                    #header-wrapper {
                        background-image: url(<?php echo header_image(); ?>);
                        background-size: cover;
                    }

                    #header #logo h1 a, p, #logo a {
                        color: #<?php echo get_header_textcolor(); ?>;
                    <?php if(!display_header_text()){
                        echo "display:none";
                    } ?>
                    }
                </style>

                <?php
            }
        }
    }

    add_action("wp_head", "mamurjor_header");

}
function mamurjor_body_class($classes){
    unset($classes[array_search("no-customize-support" , $classes)]);
    return $classes;
}
add_filter("body_class","mamurjor_body_class");

function mamurjor_post_class($classes){
    unset($classes[array_search("type-post" , $classes)]);
    return $classes;
}
add_filter("post_class","mamurjor_post_class");


function mamurjor_search_filter($text){
    if(is_search()){
        $search = '/('.join('|',explode(' ', get_search_query())).')/i';
        $text = preg_replace($search, '<span class="highlight" >\0</span>', $text);
    }
 return $text;
}

add_filter('the_content','mamurjor_search_filter');
add_filter('the_excerpt','mamurjor_search_filter');
add_filter('the_title','mamurjor_search_filter');


function mamurjor_modify_main($wpq){
    if(is_home() && $wpq->is_main_query()){

        $wpq->set("tag__not_in",array(5));
    }

}
add_action("pre_get_posts","mamurjor_modify_main");


//add_filter('acf/settings/show_admin','__return_false');