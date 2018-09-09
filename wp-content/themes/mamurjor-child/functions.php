<?php

function mamurjor_child_assets(){
    wp_enqueue_style("parent-style", get_parent_theme_file_uri("/style.css"));
    //wp_enqueue_style("mamurjor-style");
}
add_action("wp_enqueue_scripts","mamurjor_child_assets");

function mamurjor_header()
{
    if (is_page()) {
        $alpha_feat_image = get_the_post_thumbnail_url(null, "large");
        ?>
        <style>
            #header-wrapper {
                background-image: url(<?php echo header_image(); ?>);

            }
            #header #logo h1 a, p, #logo a {
                color: red;
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
                #header #logo h1 a, p, #logo a {
                    color: blue;
                }
            </style>

            <?php
        }
    }
}

add_action("wp_head", "mamurjor_header");