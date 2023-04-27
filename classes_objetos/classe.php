<div class="titulo">Primeira Classe</div>

<?php 
    class Cliente {
        // Atributos
        public $nome = 'Anonimo';
        public $idade = 18;

        public function apresentar() {
            return "Nome: {$this->nome} <br> Idade: {$this->idade}";
        }
    }

    $c1 = new Cliente();
    $c1 -> nome = "Bruno";
    $c1 -> idade = 24;

    $c2 = new Cliente();
    $c2 -> nome = "Gabriel";
    $c2 -> idade = 25;

    echo $c1 -> apresentar() . '<hr>';
    echo $c2 -> apresentar() . '<hr>';

    echo $c1->nome;
?>