<?php

namespace lesFormsPasSympatoche;

class Autoloader{

    static function register(){
        //print_r(array(__CLASS__,'autoload'));
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($fqcn){
        $path = str_replace('\\', '/', $fqcn);
        //echo $path;
        require 'lesFormsPasSympatoche/' . $path . '.php';
    }
}