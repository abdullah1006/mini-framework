<?php
define('MYFRAMEWORK', time());
require_once __DIR__ . "/vendor/autoload.php";

use system\core;
return core::run();