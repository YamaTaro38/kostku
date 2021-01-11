<?php 

    spl_autoload_register(function($class){
        require_once 'functions/'.$class.'.php';
    });

    define('BASEURL', 'http://localhost:8080/kostku/')
?>