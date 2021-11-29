<?php

    class JamSalami extends FillingDecoratior{
       
        private $bread;

        public function __construct(Bread $bread){
            $this->bread = $bread;            
        }

        public function getName(){
            return $this->bread->getName(). ", Geleia + Salame";
        }

        public function value(){
            return 5 + $this->bread->value();
        }
      
      }
?>