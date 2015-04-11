<?php
/**
 * web/index.php
 *
 * taken from http://silex.sensiolabs.org/doc/web_servers.html
 *
 * run the following command from the project root directory
 *
 * `$ php -S localhost:8080 -t web web/index.php`
 */
$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

require __DIR__.'/../src/app.php';
