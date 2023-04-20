<div class="titulo">Desáfio Operador Lógico</div>

<!-- 
    Dois trabalho - terça e quinta
    - Se os dois forém executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça-feira):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <form action="#" method="post">
        <div>
            <label for="t2">Trabalho 2 (quinta-feira):</label>
            <select name="t2" id="t2">
                <option value="1">Executado</option>
                <option value="0">Não executado</option>
            </select>
        </div>
        <button id='handleButton'>Executar</button>

    </form>

    <style>
    button,
    select {
        font-size: 1rem;
    }
    </style>

    <script>
    document.getElementById("handleButton").addEventListener("click", function() {
        // Aqui você pode fazer uma requisição Ajax para chamar a função PHP ou 
        // redirecionar para outra página que execute a função PHP. 
        // Exemplo:
        window.location.href = "handleForm";
    });
    </script>

    <?php 
        if (isset($_POST['t1']) && isset($_POST['t2'])){
            $t1 = $_POST['t1'];
            $t2 = $_POST['t2'];
            $tv = '';
            $sorvete = false;
    
            if($t1 && $t2) {
                $tv = "50'";
            } else if($t1 xor $t2) {
                $tv = "32'";
            }
    
            if ($t1 || $t2) {
                $sorvete = true;
            }
    
            if($tv) {
                $resultado = "Vamos comprar uma TV de $tv";
            } else {
                $resultado = "Sem TV dessa vez :(";
            }
    
            $saudavel = !$sorvete;
    
            if($saudavel) {
                $resultado .= '<br>Estamos mais saudáveis!';
            } else {
                $resultado .= '<br>Sorvete liberado \o/';
            }
    
            echo "<p>$resultado</p>";
        }
    ?>