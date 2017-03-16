<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Example Plugin
 * Plugin URI:        http://lab.codefive.pt/
 * Description:       Description
 * Version:           0.0.1
 * Author:            Code Five
 * Author URI:        http://codefive.pt/
 */


use Com\CodeFive\Framework\Application;

register_shutdown_function(function () {
    if (error_get_last() != null) var_dump(error_get_last());
});
require_once __DIR__ . '/vendor/autoload.php';

Application::getInstance()->bootContext('example-plugin');