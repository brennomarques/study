<?php

    class MozzarellaSalami extends FillingDecoratior{
       
        private $bread;

        public function __construct(Bread $bread){
            $this->bread = $bread;            
        }

        public function getName(){
            return $this->bread->getName(). ", Margarina";
        }

        public function value(){
            return 5 + $this->bread->value();
        }
      
      }
?>