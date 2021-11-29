<?php

    class Egg extends fillingDecoratior{
       
        private $bread;

        public function __construct(Bread $bread){
            $this->bread = $bread;            
        }

        public function getName(){
            return $this->bread->getName(). ", Ovo";
        }

        public function value(){
            return 1 + $this->bread->value();
        }
      
      }
?>