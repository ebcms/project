<?php

use Ebcms\App;

require_once __DIR__ . '/../vendor/autoload.php';

if (version_compare(PHP_VERSION, '7.2.0', '<')) {
    header("Content-type: text/html; charset=utf-8");
    die('PHP >= 7.2');
}

App::getInstance()->run();
