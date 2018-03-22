<?php
/**
 * Autoload the library
 */
spl_autoload_register(function ($class_name) {
    echo $class_name;
    $parts = explode('\\', $class_name);
    require "library/class." . end($parts) . ".php";

});