<?php
/*******************************************************************************
 * Obligatory WordPress plugin information
 ******************************************************************************/
/*
Theme Name: TDW Theme
Theme URI: https://www.thedevelopingweb.com
Description: WordPress theme built with composer, namspaces and other PHP 7.4+ features
Version: 1.0
Author: Chuck Hriczko
Author URI: https://www.thedevelopingweb.com
License: GPLv2
*/
//Include our autoload file
require 'vendor/autoload.php';

//Initialize our plugin
$tdwCore = new \TDW\Theme\Core();