<?php
////////// C:/Users/Carlos Herrera/StudioProjects/Interview/

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);


// this i the root Directory of where the file is hosted
define('SITE_ROOT', DS. 'Laragon'.DS.'www'.DS.'Interview');

defined('INCLUDES_PATH') ?  null : define('INCLUDES_PATH', SITE_ROOT.DS.'Database');
defined('READER_PATH')   ?  null : define('READER_PATH', SITE_ROOT.DS.'Reader');



// require_once(INCLUDES_PATH.DS."eg.php");
require_once(INCLUDES_PATH . DS . "User.php");
require_once(INCLUDES_PATH . DS . "Sessions.php");
require_once(INCLUDES_PATH . DS . "Function.php");