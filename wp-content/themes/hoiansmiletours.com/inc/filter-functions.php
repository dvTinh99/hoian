<?php

function sliderImages($meta_boxes)
{
    $prefix = '';
    $meta_boxes[] = [
        'title' => esc_html__('Slider Images', 'online-generator'),
        'id' => 'slider-images',
        'context' => 'normal',
        'post_types' => array('post', 'private_tours'),
        'fields' => [
            [
                'type' => 'image_advanced',
                'name' => esc_html__('Image Advanced', 'online-generator'),
                'id' => $prefix . 'image_advanced_tysyby1pae',
            ]
        ],
    ];
    return $meta_boxes;
}

function parallaxImage($meta_boxes)
{
    $prefix = '';

    $meta_boxes[] = [
        'title' => esc_html__('Parallax image', 'online-generator'),
        'id' => 'page_parallax_image',
        'context' => 'normal',
        'post_types' => array('page'),
        'fields' => [
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Textarea', 'online-generator' ),
                'id'   => $prefix . 'textarea_rqqb6h44gsn',
            ],
            [
                'type' => 'image_advanced',
                'name' => esc_html__( 'Image Advanced', 'online-generator' ),
                'id'   => $prefix . 'image_advanced_bow9yqyxcm',
            ],
        ],
    ];
    return $meta_boxes;
}

function tourist_review_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Untitled Field Group', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'post_types' => array('tourist_review'),
        'fields'  => [
            [
                'type' => 'text',
                'name' => esc_html__( 'User', 'online-generator' ),
                'id'   => $prefix . 'text_a1kkjaljxdn',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Review', 'online-generator' ),
                'id'   => $prefix . 'textarea_xl6lwdgjxm',
            ],
            [
                'type' => 'image_advanced',
                'name' => esc_html__( 'Avatar', 'online-generator' ),
                'id'   => $prefix . 'image_advanced_ogrtgc6urol',
            ],
        ],
    ];

    return $meta_boxes;
}