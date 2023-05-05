<div class="titulo">Interface</div>

<?php 
    interface Animal {
        function respirar();
    };
    
    interface Mamifero {
        function mamar();
    };

    interface Canino extends Animal, Mamifero {
        function latir(): string;
    };

    interface Felino {
        function correr();
    };
    
    class Cachorro implements Canino {
        function respirar() {
            return 'Irei usar ar!';
        }

        function latir(): string {
            return 'Au Au!';
        }

        function mamar(): string {
            return 'Iréi usar leite!';
        }

        function correr() {
            return 'Vrunnn!';
        }
    };

    $animal = new Cachorro();
    echo $animal->respirar() . '<br>';
    echo $animal->latir() . '<br>';
    echo $animal->mamar() . '<br>';
    echo 'Fim!';

    var_dump($animal);
    var_dump($animal instanceof Cachorro);
    var_dump($animal instanceof Canino);
    var_dump($animal instanceof Mamifero);
    var_dump($animal instanceof Animal);
    var_dump($animal instanceof Felino);
?>