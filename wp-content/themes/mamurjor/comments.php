<?php
wp_list_comments( array(
    'style'       => 'ol',
    'short_ping'  => true,
    'avatar_size' => 74,
) );
?>

<?php comment_form()?>
