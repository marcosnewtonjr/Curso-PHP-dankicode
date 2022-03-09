<?php

    class Pessoas {
        // Objeto pessoa

        // Private funciona apenas dentro da classe
        // Public pode ser acessado por fora 

        private $nome = 'Marcos';
        private $idade = "30";
        private $peso = '90kg';

        public function crescer () {
            echo 'Estou crescendo ';
            $this->comer();
        }

        private function comer () {
            echo 'Estou comendo ';
        }
    }

    // Para chamar funções temos que instanciar

    $pessoa = new Pessoas;
    $pessoa2 = new Pessoas;

    $pessoa->crescer();

?>