<?php
 
class CommandShip extends Battleship{
 
  /**
   */
   private static $_instance = null;
 
   /**
    * Constructeur de la classe
    */
   private function __construct() {  
   }
 
   /**
    * Méthode qui crée l'unique instance de la classe
    * si elle n'existe pas encore puis la retourne.
    */
   public static function getInstance() {
 
     if(is_null(self::$_instance)) {
       self::$_instance = new CommandShip();  
     }
 
     return self::$_instance;
   }
}
 
?>