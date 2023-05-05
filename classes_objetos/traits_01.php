<div class="titulo">Traits 01</div>

<?php 
    trait validacao {
        public $a = 'Valor A';
        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public $b = 'Valor B';
        private $c = 'Valor privado (C)';
        public function validarStringMelhor($str) {
            return isset($str) && trim($str);
        }
    }

    class User {
        use validacao, validacaoMelhor;
        public function imprimirValorC() {
            echo '<br>' . $this->c;
        }
    }

    $user = new User();
    var_dump($user->validarString(' '));
    var_dump($user->validarStringMelhor(' '));
    echo $user->a . '<br>' . $user->b;
    echo $user->imprimirValorC();
?>