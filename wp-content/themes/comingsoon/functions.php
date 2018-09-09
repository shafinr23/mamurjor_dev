<?php 

function comingsoon_setup_theme(){
    load_theme_textdomain("comingsoon");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
    add_action("after_setup_theme","comingsoon_setup_theme");

function comingsoon_assets(){
    wp_enqueue_style("bootstrap", get_theme_file_uri("./assets/vendor/bootstrap/css/bootstrap.min.css"));
    wp_enqueue_style("awesome", get_theme_file_uri("./assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"));
    wp_enqueue_style("animate", get_theme_file_uri("./assets/vendor/animate/animate.css"));
    wp_enqueue_style("select2", get_theme_file_uri("./assets/vendor/select2/select2.min.css"));
    wp_enqueue_style("util", get_theme_file_uri("./assets/css/util.css"));
    wp_enqueue_style("main", get_theme_file_uri("./assets/css/main.css"));
    wp_enqueue_style("comingsoon", get_stylesheet_uri(),null,"0.1");


    //wp_enqueue_script("jquery", get_theme_file_uri("./assets/vendor/jquery/jquery-3.2.1.min.js"), null , true);
    wp_enqueue_script("popperjs", get_theme_file_uri("./assets/vendor/bootstrap/js/popper.js"), null ,"0.2.1",true);
    wp_enqueue_script("bootstrapjs", get_theme_file_uri("./assets/vendor/bootstrap/js/bootstrap.min.js"), null ,"1.0.1",true);
    wp_enqueue_script("select2js", get_theme_file_uri("./assets/vendor/select2/select2.min.js"), null ,"0.0.1",true);
    wp_enqueue_script("moment", get_theme_file_uri("./assets/vendor/countdowntime/moment.min.js"), null ,"3.0.1",true);
    wp_enqueue_script("timezone", get_theme_file_uri("./assets/vendor/countdowntime/moment-timezone.min.js"), null ,"0.0.7",true);
    wp_enqueue_script("data", get_theme_file_uri("./assets/vendor/countdowntime/moment-timezone-with-data.min.js"), null ,"6.0.1",true);
    wp_enqueue_script("countdowntimejs", get_theme_file_uri("./assets/vendor/countdowntime/countdowntime.js"), null ,"0.6.1",true);
    wp_enqueue_script("tiltjs", get_theme_file_uri("./assets/vendor/tilt/tilt.jquery.min.js"), null ,"0.70.1",true);
    wp_enqueue_script("mainjs", get_theme_file_uri("./assets/js/main.js"), null ,"0.0.10",true);

    wp_enqueue_script();
    
}
add_action("wp_enqueue_scripts","comingsoon_assets");



?>