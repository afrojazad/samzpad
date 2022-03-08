<?php
namespace Config;
Class autoload
spl_autoload_register(function ($class_name) {
    $file_path = explode("\\", $class_name);
    // print_r($file_path);
    // echo "<hr>";
    include_once $class_name.".php";
});
// echo "<hr>HI from Autoload<hr>"; 
// exit();

