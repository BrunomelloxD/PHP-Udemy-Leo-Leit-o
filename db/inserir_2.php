<div class="titulo">Inserir Registro #02</div>

<!-- Importando Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Recebendo os dados e salvando os erros no array $erros caso houver -->
<?php 
    // Desabilitando os warnings
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

    $dados = $_POST;
    // print_r($dados);
    // var_dump($dados['nascimento']);
    $erros = [];
    
    // Inicializando array $erros vazio, será usado caso houver erros no preenchimento do formulario
    $erros = [];
    
    if(count($_POST) > 0) {
        if(trim($dados["nome"]) === "") {
            $erros['nome'] = 'Nome é obrigatório';
        }
        
        // Validando a data de nascimento
        if(!isset($dados["nascimento"])) {
            $erros['nascimento'] ='Data de nascimento é obrigatório';
        }

        // Validando o e-mail
        if (!filter_var($dados["email"], FILTER_VALIDATE_EMAIL)) {
            $erros['email'] ='E-mail é obrigatório';
        }

        // Validando o site
        if(!filter_var($dados["site"], FILTER_VALIDATE_URL)) {
            $erros['site'] = 'Site inválido';
        }

        // Validando a quantidade de filhos, deverá ser de 0 a 20 filhos
        $filhosConfig = ["options" => ['min_range' => 0, "max_range" => 20]];

        if((!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0)) {
            $erros['filhos'] = 'Quantidade de filhos inválida. (0-20)';
        }

        // Válidando o salário
        $salarioConfig = ["options" => ["decimal" => ","]];

        if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
            $erros['salario'] = 'Salário inválido. Ex: 1302,00';
        }

        // Se o count for zero irá retornar falso (false)
        if(!count($erros)) {
            require_once "conexao.php";

            $sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) 
                VALUES (?, ?, ?, ?, ?, ?)";
        
            $conexao = novaConexao();
            $stmt = $conexao->prepare($sql);

            $params = [
                $dados['nome'],
                $data = $dados['nascimento'],
                $dados['email'],
                $dados['site'],
                $dados['filhos'],
                $dados['salario'],
            ];

            $stmt->bind_param("ssssid", ...$params);

            if($stmt->execute()) {
                unset($dados);
            }
        }
    }
?>

<form action="#" method="post">
    <!-- Uma linha do boostrap form-row possui 12 partes -->
    <!-- Primeira linha -->
    <div class="form-row">
        <!-- Irá usar 9 partes de 12 col-md-9 -->
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome"
                placeholder="Nome" value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="date" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento"
                name="nascimento" placeholder="Nascimento" value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <!-- Segunda linha -->
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email"
                placeholder="E-mail" value="<?= $dados['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site"
                placeholder="Site" value="<?= $dados['site'] ?>">
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>
    <!-- Terceira linha -->
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos"
                name="filhos" placeholder="Quantidade de filhos" min="0" max="20" value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario"
                name="salario" placeholder="Informe o seu salário" value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-md">Enviar</button>
</form>