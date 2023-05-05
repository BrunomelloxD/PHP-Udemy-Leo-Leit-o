<div class="titulo">Desafio Classe</div>

<?php 
    class Date {
        public $day = 1;
        public $month = 1;
        public $year = 1970;

        public function apresentar() {
            return "{$this->day}/{$this->month}/{$this->year}";
        }
    }

    $date = new Date();
    $date->day = 25;
    $date->month = 04;
    $date->year = 2023;

    echo $date->apresentar();
?>