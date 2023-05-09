<?php 
    function novaConexao($banco = 'curso_php') {
        $servidor = 'localhost:3306';
        $usuario = "root";
        $senha = "";
        
        // FUNCIONA
        try {
            $conexao = new mysqli($servidor, $usuario, $senha, $banco);
        } catch (Error $e) {
            echo $e;
            die('Error: ' . $conexao->connect_error);
        }
        
        return $conexao;
    }
?>