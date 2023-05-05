<div class="titulo">Construtor e destrutor</div>

<?php 
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($novoNome, $idade = 18) {
            echo 'Construtor invocado!<br>';

            $this->nome = $novoNome ?? 'Jorge';
            $this->idade = $idade ?? 18;
        }

        function __destruct() {
            echo 'E morreu!';
        }

        public function apresentar() {
            return "Olá, {$this->nome} você tem {$this->idade}? <br>";
        }
    }

    $pessoa = new Pessoa('Bruno');
    
    echo $pessoa->apresentar();

    unset($pessoa);
?>