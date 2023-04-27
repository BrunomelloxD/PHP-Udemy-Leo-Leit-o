<div class="titulo">Membro estático</div>

<?php 
    class A {
        public $naoStatic = 'Variável de instância';
        public static $static = 'Variável de classe';

        public function mostarA() {
            echo "Não estático: {$this->naoStatic}<br>";
            // echo "Estático: {$this->static}<br>";
            // echo "Estático: {self::$static}<br>";
            echo "Estático: " . self::$static . "<br>";
        }

        public static function mostrarStaticA() {
            echo "Estático: " . self::$static . "<br>";
        }
    }

    $classe = new A();
    $classe->mostarA();
    // $classe->mostrarStaticA()
    A::mostrarStaticA();
    echo A::$static;
?>