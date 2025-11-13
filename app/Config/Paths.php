<?php

namespace Config;

/**
 * Paths
 *
<<<<<<< HEAD
 * Holds the paths that are used by the system to
 * locate the main directories, app, system, etc.
 *
 * Modifying these allows you to restructure your application,
 * share a system folder between multiple applications, and more.
 *
 * All paths are relative to the project's root folder.
=======
 * Provides a location-aware configuration of the
 * directories used by the application.
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
 */
class Paths
{
    /**
     * ---------------------------------------------------------------
<<<<<<< HEAD
     * SYSTEM FOLDER NAME
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "system" folder. Include
     * the path if the folder is not in the same directory as this file.
     */
    public string $systemDirectory = __DIR__ . '/../../vendor/codeigniter4/framework/system';

    /**
     * ---------------------------------------------------------------
     * APPLICATION FOLDER NAME
=======
     * SYSTEM DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "system" directory.
     * By default the system directory is located in your project root.
     */
    public $systemDirectory = __DIR__ . '/../../vendor/codeigniter4/framework/system';

    /**
     * ---------------------------------------------------------------
     * APPLICATION DIRECTORY NAME
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
     * ---------------------------------------------------------------
     *
     * If you want this front controller to use a different "app"
     * folder than the default one you can set its name here. The folder
<<<<<<< HEAD
     * can also be renamed or relocated anywhere on your server. If
     * you do, use a full server path.
     *
     * @see http://codeigniter.com/user_guide/general/managing_apps.html
     */
    public string $appDirectory = __DIR__ . '/..';
=======
     * can also be renamed or relocated anywhere on your server.
     * For more info please see the user guide:
     * https://codeigniter.com/user_guide/general/managing_apps.html
     */
    public $appDirectory = __DIR__ . '/../../app';
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174

    /**
     * ---------------------------------------------------------------
     * WRITABLE DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "writable" directory.
<<<<<<< HEAD
     * The writable directory allows you to group all directories that
     * need write permission to a single place that can be tucked away
     * for maximum security, keeping it out of the app and/or
     * system directories.
     */
    public string $writableDirectory = __DIR__ . '/../../writable';
=======
     * By default the "writable" directory is located inside your
     * application directory.
     */
    public $writableDirectory = __DIR__ . '/../../writable';
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174

    /**
     * ---------------------------------------------------------------
     * TESTS DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "tests" directory.
<<<<<<< HEAD
     */
    public string $testsDirectory = __DIR__ . '/../../tests';
=======
     * By default the "tests" directory is located inside your
     * application directory.
     */
    public $testsDirectory = __DIR__ . '/../../tests';
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174

    /**
     * ---------------------------------------------------------------
     * VIEW DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of the directory that
<<<<<<< HEAD
     * contains the view files used by your application. By
     * default this is in `app/Views`. This value
     * is used when no value is provided to `Services::renderer()`.
     */
    public string $viewDirectory = __DIR__ . '/../Views';
=======
     * contains the view files used by your application. By default
     * this is in "app/Views". This value is used by the core View
     * class when locating view files.
     */
    public $viewDirectory = __DIR__ . '/../../app/Views';

    /**
     * ---------------------------------------------------------------
     * HAMMER DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of the directory that
     * contains the "hammer" command line utility.
     */
    public $hammerDirectory = __DIR__ . '/../../vendor/codeigniter4/framework';

    /**
     * ---------------------------------------------------------------
     * NAMESPACE ROOT DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of the directory that
     * contains the "namespace root directory". By default this is
     * the "src" directory.
     */
    public $namespaceRootDirectory = __DIR__ . '/../../src';
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
}
