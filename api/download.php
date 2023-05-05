<div class="titulo">Download</div>

<?php 
    error_reporting(E_ERROR | E_PARSE);

    session_start();

    $arquivos = $_SESSION['arquivos'] ?? []; 
    
    $pastaUpload = __DIR__ . "/../uploads/";
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tempFile = $_FILES['arquivo']['tmp_name'];
    // echo $arquivo;

    if(move_uploaded_file($tempFile, $arquivo)) {
        echo "
            <script>
                alert('Sucess: Arquivo criado com sucesso');
            </script>
        ";
        $arquivos[] = $nomeArquivo;
        $_SESSION['arquivos'] = $arquivos;
    } else {
        echo "
            <script>
                alert('Error: Ocorreu um erro ao tentar criar arquivo!');
            </script>
        ";
    }
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach ($arquivos as $arquivo) :?>
    <?php if(stripos($arquivo, '.png') > 0) :?>
    <li>
        <a href="__DIR__ . /../uploads/<?= $arquivo ?>">
            <img style="height: 60px;" src="__DIR__ . /../uploads/<?= $arquivo ?>" />
            <?= $arquivo ?>
        </a>
    </li>
    <?php endif;?>
    <?php endforeach;?>
</ul>

<style>
input,
button {
    font-size: 1.2rem;
}

a,
img,
li {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;

    text-decoration: none;
    list-style-type: none;
    color: black
}

li {
    margin-bottom: 10px;
}

img {
    margin-right: 10px;
    border-radius: 10px;
    border: 1px solid black;
}
</style>