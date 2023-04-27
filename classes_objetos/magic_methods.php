<div class="titulo">Magic Methods</div>

<?php 
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            echo "Construtor invocado!<br>";
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function __toString() {
            return "{$this->nome} tem {$this->idade} anos.";
        }

        public function apresentar() {
            echo $this . '<br>';
        }

        function __destruct() {
            echo "Fui embora!";
        }

        public function __get($atrib) {
            echo "Lendo atributo não declarado: {$atrib} <br>";
        }

        public function __set($atrib, $valor) {
            echo "Alterando atributo não declarado: {$atrib}/{$valor} <br>";
        }

        public function __call($metodo, $params) {
            echo "Tentando executar método {$metodo}";
            echo ", com os parametros {$params}";
            print_r($params);
        }
    }

    $pessoa = new Pessoa('Bruno', 24);
    $pessoa->apresentar(); // Chamando o toString
    echo $pessoa; // Chamando o toString
    $pessoa->nome = 'xD';
    $pessoa->apresentar(); // Chamando o toString

    $pessoa -> nomeCompleto = 'Muito legal'; // __set
    $pessoa -> nomeCompleto; // __get
    echo $pessoa -> nome; // Acessa o atributo diretamente sem __get

    $pessoa -> exec('xD'); // __call
?>