<?php
//Namespace our code for our application
namespace TDW\Theme;

//Instantiate our class
class Constants {
    //Initialize our application constants
    public $appMinWPVer = '5.0';

    //Initialize our theme constants
    public $themeSupports = array(
        'html5',
        'menus',
        'custom-logo',
        'featured-content',
        'post-thumbnails',
        'title-tag',
        'widgets',
        'widgets-block-editor'
    );

    public function __construct(){}
}
