<?php

single_cat_title();
echo "<br/>";
$mamurjor_term = get_queried_object();

$mamurjor_term_thumb_id = get_field("catthumb", $mamurjor_term);

if($mamurjor_term_thumb_id){
    $file_thumb_det = wp_get_attachment_image_src($mamurjor_term_thumb_id);
    echo "<img src='".esc_url($file_thumb_det[0])."'/>";

}

?>