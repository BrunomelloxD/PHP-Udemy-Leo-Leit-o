<div class="titulo">Desafio Erros</div>

<?php 
    interface Template {
        function metodo1();
        public function metodo2($parametro);
    }

    abstract class ClasseAbstrata implements Template {
        public function metodo3() {
            echo 'Estou funcionando';
        }
    }

    class Classe extends ClasseAbstrata {
        function __construct($parametro) {
            echo $parametro . '<br>';
        }

        function metodo1() {
            echo 'Rodando o método 1 <br>';
        }

        public function metodo2($parametro) {
            echo "Rodando o método 2 com parâmetro: $parametro <br>";
        }
    }

    $exemplo = new Classe('xD');
    $exemplo->metodo1();
    $exemplo->metodo2('Método 2');
    $exemplo->metodo3();
?>