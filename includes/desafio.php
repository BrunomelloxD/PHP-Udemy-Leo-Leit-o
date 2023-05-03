<?php 
    require_once('usuario.php');
    
    $usuario = new Usuario('Bruno', 21, 'brunoom');
    $usuario->apresentar();
    unset($usuario);
?>