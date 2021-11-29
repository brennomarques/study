<?php

    class Salami extends FillingDecoratior{
       
        private $bread;

        public function __construct(Bread $bread){
            $this->bread = $bread;            
        }

        public function getName(){
            return $this->bread->getName(). ", Salame";
        }

        public function value(){
            return 2 + $this->bread->value();
        }
      
      }
?>