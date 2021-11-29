<?php

    class MozzarellaSalami extends FillingDecoratior{
       
        private $bread;

        public function __construct(Bread $bread){
            $this->bread = $bread;            
        }

        public function getName(){
            return $this->bread->getName(). ", Ovo + Margarina";
        }

        public function value(){
            return 4 + $this->bread->value();
        }
      
      }
?>