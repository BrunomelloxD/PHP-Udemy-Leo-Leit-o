<div class="titulo">Herença</div>

<?php 
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
            
            echo 'Pessoa criada!<br>';
        }

        function __destruct() {
            echo 'Pessoa diz: Morreu! <br>';
        }

        public function apresentar() {
            return "Nome: {$this->nome} idade: {$this->idade} anos <br>";
        }
    }

    class Usuario extends Pessoa {
        public $login;

        function __construct($nome, $idade, $login) {
            // $this->nome = $nome;
            // $this->idade = $idade;
            parent::__construct($nome,$idade);
            $this->login = $login;
            
            echo 'Usuário criado! <br>';
        }

        function __destruct() {
            echo 'Usuário diz: Morreu! <br>';
        }

        public function apresentar() {
            echo "@{$this->login}";
            parent::apresentar();
        }
    }

    $usuario = new Usuario('Bruno', 21, 'brunoom');
    $usuario->apresentar();
?>