<?php

<<<<<<< HEAD
/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code
=======
/**
 * --------------------------------------------------------------------
 * Constants
 * --------------------------------------------------------------------
 *
 * This file contains the application constants used throughout
 * the application. Some constants have been defined below, but
 * you are free to add your own as needed.
 */

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the status of an application exit. These are
| defined here to allow for easy modification based on your
| application needs. The constants should be used when calling
| exit() or exit($status).
|
*/
defined('EXIT_SUCCESS') || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')   || define('EXIT_ERROR', 1);         // generic error
defined('EXIT_CONFIG')  || define('EXIT_CONFIG', 3);        // configuration error
defined('EXIT_UNKNOWN') || define('EXIT_UNKNOWN', 4);       // unknown error
defined('EXIT_DATABASE') || define('EXIT_DATABASE', 6);     // database error

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These preferences are used when checking and setting modes when working
| with the file system. The defaults are fine on servers with proper
| security, but you may wish (or need) to change them on servers with
| open permissions.
|
*/
defined('FILE_READ_MODE')  || define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') || define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   || define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  || define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| Expression Match Types
|--------------------------------------------------------------------------
|
| These are the different types of expressions that can be used with
| the `match()` function. The default is STRING, but you can change
| it to any of the following:
|
| STRING:  A string comparison (case-sensitive)
| REGEX:   A regular expression match
| EXACT:   An exact match (case-sensitive)
| IREGEX:  A case-insensitive regular expression match
| IEXACT:  A case-insensitive exact match
|
*/
defined('MATCH_STRING') || define('MATCH_STRING', 'string');
defined('MATCH_REGEX')  || define('MATCH_REGEX', 'regex');
defined('MATCH_EXACT')  || define('MATCH_EXACT', 'exact');
defined('MATCH_IREGEX') || define('MATCH_IREGEX', 'iregex');
defined('MATCH_IEXACT') || define('MATCH_IEXACT', 'iexact');

/*
|--------------------------------------------------------------------------
| Show the debugger by default
|--------------------------------------------------------------------------
|
| If set to true, this constant will have the debugger bar shown
| by default for all requests. It can be overridden by setting the
| `CI_DEBUG` environment variable to 0.
|
| NOTE: This should only be used for development purposes!
|
*/
defined('SHOW_DEBUGGER') || define('SHOW_DEBUGGER', false);

/*
|--------------------------------------------------------------------------
| Default timezone
|--------------------------------------------------------------------------
|
| We have a default timezone set here for all PHP scripts.
| The UTC timezone is used by default, as it is suitable for
| most situations. However, you can change it to any timezone
| you prefer. The full list of timezones supported by PHP can be
| found at https://www.php.net/manual/en/timezones.php
|
*/
defined('APP_TIMEZONE') || define('APP_TIMEZONE', 'UTC');

/*
|--------------------------------------------------------------------------
| Default locale
|--------------------------------------------------------------------------
|
| The default locale for the application. This is used for
| formatting dates, numbers, and other locale-specific
| information. The default is set to 'en', but you can change
| it to any locale you prefer.
|
*/
defined('APP_DEFAULT_LOCALE') || define('APP_DEFAULT_LOCALE', 'en');

/*
|--------------------------------------------------------------------------
| Environment
|--------------------------------------------------------------------------
|
| The environment that the application is running in. This is used
| for debugging, error reporting, and other environment-specific
| settings. The default is 'production', but you can change it to
| any of the following:
|
| development:  Enables debugging and detailed error reporting
| testing:      Enables testing-specific settings
| production:   Disables debugging and detailed error reporting
|
*/
defined('ENVIRONMENT') || define('ENVIRONMENT', 'production');

/*
|--------------------------------------------------------------------------
| Composer Path
|--------------------------------------------------------------------------
|
| The path to the composer autoloader file.
|
*/
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
|--------------------------------------------------------------------------
| Application namespace
|--------------------------------------------------------------------------
|
| The namespace of the application. This is used for autoloading
| the application classes.
|
*/
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
|--------------------------------------------------------------------------
| Application name
|--------------------------------------------------------------------------
|
| The name of the application. This is used for display purposes
| in the CLI output.
|
*/
defined('APP_NAME') || define('APP_NAME', 'Rolodex Contact Importer');

/*
|--------------------------------------------------------------------------
| Application version
|--------------------------------------------------------------------------
|
| The version of the application. This is used for display purposes
| in the CLI output.
|
*/
defined('APP_VERSION') || define('APP_VERSION', '1.0.0');
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
