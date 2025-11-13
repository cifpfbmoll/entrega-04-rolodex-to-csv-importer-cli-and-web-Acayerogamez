<?php

namespace Config;

<<<<<<< HEAD
use CodeIgniter\Config\AutoloadConfig;

/**
 * -------------------------------------------------------------------
 * AUTOLOADER CONFIGURATION
 * -------------------------------------------------------------------
 *
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 *
 * NOTE: If you use an identical key in $psr4 or $classmap, then
 *       the values in this file will overwrite the framework's values.
 *
 * NOTE: This class is required prior to Autoloader instantiation,
 *       and does not extend BaseConfig.
 */
class Autoload extends AutoloadConfig
=======
/**
 * --------------------------------------------------------------------
 * AUTO-LOADER CONFIGURATION
 * --------------------------------------------------------------------
 *
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 */
class Autoload
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
{
    /**
     * -------------------------------------------------------------------
     * Namespaces
     * -------------------------------------------------------------------
<<<<<<< HEAD
     * This maps the locations of any namespaces in your application to
     * their location on the file system. These are used by the autoloader
     * to locate files the first time they have been instantiated.
     *
     * The 'Config' (APPPATH . 'Config') and 'CodeIgniter' (SYSTEMPATH) are
     * already mapped for you.
     *
     * You may change the name of the 'App' namespace if you wish,
     * but this should be done prior to creating any namespaced classes,
     * else you will need to modify all of those classes for this to work.
     *
     * @var array<string, list<string>|string>
     */
    public $psr4 = [
        APP_NAMESPACE => APPPATH,
=======
     * This maps the locations of any namespaces in your application
     * to their location on the file system. These are used by the
     * Autoloader to locate classes the first time they are called.
     */
    public $psr4 = [
        APP_NAMESPACE => APPPATH,                // For custom app namespace
        'Config'      => APPPATH . 'Config',
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
    ];

    /**
     * -------------------------------------------------------------------
     * Class Map
     * -------------------------------------------------------------------
     * The class map provides a map of class names and their exact
     * location on the drive. Classes loaded in this manner will have
<<<<<<< HEAD
     * slightly faster performance because they will not have to be
     * searched for within one or more directories as they would if they
     * were being autoloaded through a namespace.
     *
     * Prototype:
     *   $classmap = [
     *       'MyClass'   => '/path/to/class/file.php'
     *   ];
     *
     * @var array<string, string>
=======
     * slightly faster load times because the class will be loaded
     * directly.
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
     */
    public $classmap = [];

    /**
     * -------------------------------------------------------------------
     * Files
     * -------------------------------------------------------------------
<<<<<<< HEAD
     * The files array provides a list of paths to __non-class__ files
     * that will be autoloaded. This can be useful for bootstrap operations
     * or for loading functions.
     *
     * Prototype:
     *   $files = [
     *       '/path/to/my/file.php',
     *   ];
     *
     * @var list<string>
=======
     * The $files array holds the names of files that should be loaded
     * on every request. These files can be helpers, functions, or
     * anything else that you might want to include globally.
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
     */
    public $files = [];

    /**
     * -------------------------------------------------------------------
<<<<<<< HEAD
     * Helpers
     * -------------------------------------------------------------------
     * Prototype:
     *   $helpers = [
     *       'form',
     *   ];
     *
     * @var list<string>
     */
    public $helpers = [];
=======
     * Helper Files
     * -------------------------------------------------------------------
     *
     * These are the files that contain helper functions. Helper files
     * are not automatically loaded, but can be loaded with the
     * helper() function.
     */
    public $helpers = [];

    /**
     * -------------------------------------------------------------------
     * Auto-load Helper Files
     * -------------------------------------------------------------------
     *
     * If you want to automatically load helper files, set this to
     * true. The files will be loaded on every request.
     */
    public $autoLoadHelpers = false;
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
}
