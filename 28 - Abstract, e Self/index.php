<?php

    // A classe abstract só ser para ser herdada, não se pode fazer uma nova instancia dela.

    abstract class teste {
        public function func1() {
            echo 'Chamando função 1';
        }
    }

    // Não funciona
    # $classAbstract = new teste;
    # $classAbstract->func1();

    class Principal extends teste {
        public static function metodoEstatico() {
            echo 'Método Estático';
        }
        public function funcao() {
            self::metodoEstatico(); // A palavra reservada self serve para buscar um método ou propriedade estática
        }
    }

    $principal = new Principal;
    $principal->func1();
    $principal->funcao();

?>