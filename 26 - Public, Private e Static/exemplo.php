<?php

    // Public funciona em qualquer parte do código
    // Private só pode ser acessado dentro da classe

    class Exemplo 
    {
        private $var1;
        public $var2;

        public static $var3 = 'Static';

        public function metodo(){

        }

        private function metodo2(){

        }

        public static function metodo3(){
            echo 'Método estático';
        }

        public function setVar1($var1){
            $this->var1 = $var1;
        }

        public function pegarVar1(){
            return $this->var1;
        }
    }

?>
