<?php
 if (php_sapi_name() == "cli") {
    echo 'Current PHP version: ' . phpversion() . PHP_EOL;
 }
require realpath(__DIR__. '/..') . '/vendor/autoload.php';
