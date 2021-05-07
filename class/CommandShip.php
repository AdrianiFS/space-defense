<?php
 
class CommandShip extends Battleship{
 
  /**
   */
   private static $_instance = null;
   private static $name = "CommadShip";
   private static $position;
   /**
    * Constructeur de la classe
    */
   private function __construct($position, $name){  
    $this->position = $position;
    $this->name = $name;
   }
 
   /**
    * Méthode qui crée l'unique instance de la classe
    * si elle n'existe pas encore puis la retourne.
    */
   public static function getInstance($pos, $name){

     if(is_null(self::$_instance)) {
       self::$_instance = new CommandShip($pos, $name);  
     }
 
     return self::$_instance;
   }

   /**
    * Get the value of name
    */ 
   public function getName()
   {
      return $this->name;
   }

   /**
    * Set the value of name
    *
    * @return  self
    */ 
   public function setName($name)
   {
      $this->name = $name;

      return $this;
   }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */ 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}
 
?>