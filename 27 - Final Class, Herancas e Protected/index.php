<?php

    /*
    final class Filha {
        public function mostrarOla() {
            echo 'Olá Mundo!';
        }
    }
    */


    class Pai {
        protected function funcaoTeste() {
            echo 'Chamando função teste';
        }
        public function mostrarTchau() {
            echo 'Tchau!';
        }
    }

    $pai = new Pai;
    $pai->mostrarTchau();    

    $filha = new Filha;
    $filha->mostrarOla();


    // Quando uma classe é final, não podemos fazer uma outra herdar seus métodos.

    class Filha extends Pai {
        public function mostrarOla() {
            echo 'Olá Mundo!!';
        }
        public function mostrarProtected() {
            $this->funcaoTeste();
        }
    }

    echo "<hr>";

    // Mas uma classe final pode herdar os métodos de outras clases.

    $filha = new filha;
    $filha->mostrarTchau();
    $filha->mostrarOla();

    echo "<hr>";

    // A função protected igual a private, não pode ser chamada fora da função, mas pode ser herdada.

    $filha->mostrarProtected();

?>