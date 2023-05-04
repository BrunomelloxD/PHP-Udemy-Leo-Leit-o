<div class="titulo">Básico sessão</div>

<?php 
    session_start();
    print_r($_SESSION);
    echo '<br>';
    
    if(!$_SESSION['nome']) {
        $_SESSION['nome'] = 'Bruno';
        
    }
    if(!$_SESSION['email']) {
        $_SESSION['email'] = 'brunomello@email.com';
    }
?>

<p>
    <b>
        Nome: <?= $_SESSION['nome'] ?>
    </b>
    <br>
    <b>
        E-mail: <?= $_SESSION['email'] ?>
    </b>
    <br>
    <br>
    <a href='/udemy-php/sessao/basico_sessao_alterar.php'>
        <button>
            Alterar Sessão
        </button>
    </a>
</p>