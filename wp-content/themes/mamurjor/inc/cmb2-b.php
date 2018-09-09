<?php
add_action( 'cmb2_init', 'mamurjor_metabox' );
function mamurjor_metabox() {

    $prefix = '_mammurjor_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'device_info',
        'title'        => __( 'device info', 'mamurjor' ),
        'object_types' => array( 'post' ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );

    $cmb->add_field( array(
        'name' => __( 'device name ', 'mamurjor' ),
        'id' => $prefix . 'device_name_',
        'type' => 'text',
        'default' => 'zotac',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Processor ', 'mamurjor' ),
        'id' => $prefix . 'processor_',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'manufacturer date ', 'mamurjor' ),
        'id' => $prefix . 'manufacturer_date_',
        'type' => 'text_date',
    ) );

    $cmb->add_field( array(
        'name' => __( 'warrenty', 'mamurjor' ),
        'id' => $prefix . 'warrenty',
        'type' => 'checkbox',
    ) );

    $cmb->add_field( array(
        'name' => __( 'warenty info ', 'mamurjor' ),
        'id' => $prefix . 'warenty_info_',
        'type' => 'textarea',
        'attributes' => array(
            'data-conditional-id' => $prefix . 'warrenty',
            // Works too: 'data-conditional-value' => 'on'.
        ),
    ) );

}