<?php

require_once('features/breadcrumb.php');
require_once('features/themeImage.php');
//require_once('features/posttypeTouristsReviews.php');

add_action( 'after_setup_theme', 'themeImage' );
//add_action( 'init', 'posttypeTouristsReviews' );
