<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * A simple class autoloader for CodeIgniter
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2013-2015.
 * @license The MIT License
 *
 * Important note: Within the file application/config/config.php find the setting
 * $config['enable_hooks'] and set it to TRUE.
 */

function pre_system_1() {

    spl_autoload_register('pre_system_1_autoload');
}

function pre_system_1_autoload($class_name) {

    static $map = array();  // A map for supporting non-standard locations for autoloading.

    if (empty($map)) {

        $map = array(
            'UTF8' => APPPATH.'classes/UTF8.php',
        );

        $map = array_change_key_case($map, CASE_LOWER);
    }

    $class_name = (string) $class_name;
    $class_name_lower = strtolower($class_name);
    $class_name_ucfirst = ucfirst($class_name_lower);

    // No class name? Abort.
    if ($class_name == '') {
        return false;
    }

    // Scanning for classes in specific directories (see the map above).
    if (isset($map[$class_name_lower])) {

        require $map[$class_name_lower];
        return true;
    }

    // Other classes. The first letter of the filename should be in upper case,
    // the rest of the letters - in lower case.
    $file_name = APPPATH."classes/$class_name_ucfirst.php";

    if (file_exists($file_name)) {

        require $file_name;
        return true;
    }

    return false;
}
