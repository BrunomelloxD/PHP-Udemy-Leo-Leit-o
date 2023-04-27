<div class="titulo">Visibilidade</div>

<?php 
    class A {
        public $publico = "Público";
        protected $protegido = "Protegido";
        private $privado = "Privado";

        public function mostrarA() {
            $this->naoMostrar();
            echo "Class A) Publico = {$this->publico}<br>";
            echo "Class A) Protegido = {$this->protegido}<br>";
            echo "Class A) Privado = {$this->privado}<br>";
        }

        protected function vaiPorHeranca(){
            echo "Serei transmitido por herença!<br>";
        }

        private function naoMostrar(){
            echo "Não vou imprimir!<br>";
        }
    }

    $a = new A();
    $a->mostrarA();

    echo '<hr>';

    class B extends A {
        public function mostrarB() {
            echo "Class B) Publico = {$this->publico} <br>";
            echo "Class B) Protegido = {$this->protegido} <br>";
            // echo "Class B) Privado = {$this->privado}";
            parent::vaiPorHeranca();
        }
    }

    $b = new B();
    $b->mostrarB();
?>