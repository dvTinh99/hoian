<?php
require_once('filter-functions.php');

add_filter( 'rwmb_meta_boxes', 'parallaxImage' );
add_filter( 'rwmb_meta_boxes', 'sliderImages' );
add_filter( 'rwmb_meta_boxes', 'tourist_review_meta_boxes' );
