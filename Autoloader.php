<?php
/**
 *  Autoloader Class
 */
 
class Autoloader{

    /**
     * Register Autoleader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Include file to our class
     * @param 
     */
    static function autoload($class){
        require 'class/' . $class . '.php';
    }
}
?>