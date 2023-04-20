<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>1. Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                DESAFIO
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmetica">
                                Operações aritmetica
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio string
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Tipo booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões PHP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Básico variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Desafio equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Variáveis variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor VS Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>4. Controle</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controle&file=if_else">
                                If and else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_relacionais">
                                Operadores relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_pi">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_logicos">
                                Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_operador_logico">
                                Desafio Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operador_ternario">
                                Operador Ternário
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=switch">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_switch">
                                Desafio Switch
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>5. Array</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=basico">
                                Básico
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y') ?>
    </footer>
</body>

</html>