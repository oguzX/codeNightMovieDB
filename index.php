<?php
/**
 * User: OguzOzer
 * Date: 11/20/2018
 * Time: 10:23 PM
 */



define('ROOT_DIR',str_replace("\\","/",__DIR__));
define('APP_DIR',ROOT_DIR.'/app');
define('CORE_DIR',APP_DIR.'/core');
define('MDIR',APP_DIR.'/model');
define('VDIR',APP_DIR.'/view');
define('LDIR',VDIR.'/layout');
define('PDIR',VDIR.'/pages');
define('CDIR',APP_DIR.'/controller');


define('PROT', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://');
define('URL', PROT . $_SERVER['HTTP_HOST'] . str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES)))); // Remove backslashes for Windows compatibility

define('ASSETS_DIR',URL.'/assets');

define('CSSDIR',ASSETS_DIR.'/css');
define('JSDIR',ASSETS_DIR.'/js');
define('IMGDIR',ASSETS_DIR.'/images');

define('APIIMGPATH','https://image.tmdb.org/t/p/w500');


define('DEFAULT_TITLE','Code Night');
session_start();
require_once CORE_DIR.'/app.php';
require_once CORE_DIR.'/model.php';
require_once CORE_DIR.'/view.php';
require_once CORE_DIR.'/controller.php';

$app = new app();
$app->run();

