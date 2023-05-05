<?php 
    session_start();
    print_r($_SESSION);
?>

<!-- Alterando e-mail -->
<?php 
    $_SESSION['email'] = 'gabriel@email.com'
?>

<!-- Exibindo parâmetros passados pela sessão -->
<p>
    <b>Nome:
        <?= $_SESSION['nome'] ?>
    </b>
    <br>
    <b>E-mail:
        <?= $_SESSION['email'] ?>
    </b>
</p>

<!-- Voltando a página anterior -->

<p>
    <a href="/udemy-php/sessao/basico_sessao.php">
        <button>
            Voltar
        </button>
    </a>
</p>

<p>
    <a href="/udemy-php/sessao/basico_sessao_limpar.php">
        <button>
            Limpar sessão
        </button>
    </a>
</p>