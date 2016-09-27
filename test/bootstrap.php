<?php
 if (php_sapi_name() == "cli") {
    echo 'Current PHP version: ' . phpversion() . '\n';
 }
require realpath(__DIR__. '/..') . '/vendor/autoload.php';
