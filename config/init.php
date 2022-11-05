<?php

// define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", dirname(ROOT . '/vendor/wfm'));
define("HELPERS", dirname(ROOT . '/vendor/wfm/helpers'));
define("CACHE", dirname(ROOT . '/tmp/cache'));
define("LOGS", dirname(ROOT . '/tmp/logs'));
define("CONFIG", dirname(ROOT . '/config'));
define("LAYOUT", 'ishop');
define("PATH", 'http://new-ishop.loc');
define("ADMIN", 'http://new-ishop.loc/admin');
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';
?>
