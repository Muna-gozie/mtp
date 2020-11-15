<?php
spl_autoload_register(function($class_name){
    // $class_dir = $_SERVER['DOCUMENT_ROOT'].'classes/'.$class_name;
    $class_dir = 'classes/'.$class_name;
    require_once $class_dir.'.php';
});