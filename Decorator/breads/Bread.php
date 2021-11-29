<?php
    abstract class Bread{
        protected $name;
      
        abstract function value();
      
        function getName(){
          return $this->name;
        }
      
      }
?>