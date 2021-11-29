<?php

    class MozzarellaSalami extends FillingDecoratior{
       
        private $bread;

        public function __construct(Bread $bread){
            $this->bread = $bread;            
        }

        public function getName(){
            return $this->bread->getName(). ", Mussarela + Ovo";
        }

        public function value(){
            return 7 + $this->bread->value();
        }
      
      }
?>