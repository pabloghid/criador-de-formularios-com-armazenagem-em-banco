<?php 
include('header.php');

// Verifica se algo foi enviado
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-body">
                <?php if (!empty( $_POST ) ) {
                    $nome_form = $_POST['nome_form'];
                    $nome = $_POST['nome'];
                    $perguntas = ($_POST['pergunta']);
                    $perguntasOpcao = $_POST['perguntaOpcao'];
                    $opcoes = ($_POST['opcao']);

                    ///// INSERE FORMULARIO -> NOME DO FORMULARIO E NOME DO CRIADOR
                    $sqlInsert = "INSERT INTO nome_formulario (nome_formulario, nome_criador)
                    VALUES ('$nome_form', '$nome')";
                    $insert = mysqli_query($db, $sqlInsert);

                    //  SELECIONA O ULTIMO ID INSERIDO NO BANCO DE DADOS (INSERIDO ACIMA)
                    $selectUltimo = "SELECT id FROM nome_formulario ORDER BY dt_criacao DESC LIMIT 1";
                    $resultado = mysqli_query($db, $selectUltimo);
                    $arrayResultado = mysqli_fetch_assoc($resultado);
                    $id_formulario = $arrayResultado['id'];

                    if (!empty($perguntas)) {
                        foreach ($perguntas as $pergunta) {
                            // INSERIR SE O TIPO FOR TEXTO
                            $insertPergTexto = "INSERT INTO perguntas (id_formulario, pergunta, is_texto) 
                            VALUES ('$id_formulario', '$pergunta', 'S')";
                            $insertTexto = mysqli_query($db, $insertPergTexto); 
                        }
                    }
                    // INSERCAO DE PERGUNTAS COM OPCOES
                    if (!empty($perguntasOpcao)) {
                        // CRIO UM CONTADOR
                        $cont = 0;
                        foreach ($perguntasOpcao as $perguntaOpcao){
                            $opcoes=[];
                            // UTILIZO O CONT, JÁ QUE PODE EXISTIR VÁRIAS PERGUNTAS COM OPÇÕES
                            for ($i = $cont; $i <= ($cont+3); $i++){
                                $opcaoArray = array_push($opcoes, $_POST['opcao'][$i]);
                            }
                            $insertPergOpcao = "INSERT INTO perguntas (id_formulario, pergunta, is_opcao, resposta_opcao1, 
                            resposta_opcao2, resposta_opcao3, resposta_opcao4)
                            VALUES ('$id_formulario', '$perguntaOpcao', 'S', '$opcoes[0]', '$opcoes[1]', '$opcoes[2]', '$opcoes[3]')";
                            $insertOpcao = mysqli_query($db, $insertPergOpcao);
                            // AUMENTO O CONT EM 4 PARA CASO TENHA OUTRA PERGUNTA
                            $cont += 4;
                        }
                    } ?> 
                    <h3 class="card-title">FORMUL&Aacute;RIO CRIADO COM SUCESSO!</h3>
                    <div class="ml-3 mt-3">
                     Seu formul&aacute;rio <strong><?php echo($nome_form) ?></strong> foi criado. Voc&ecirc; pode utilizar clicando no
                     'Selecionar formulário.'
                    </div>
                    <?php
                }
                ?>
                <div class="mt-3">
                    <a href="index.php">
                    <button class="btn btn-secondary float-right ml-3">Início</button>
                    </a>
                    <a href="selecionar_form.php">
                    <button class="btn btn-primary float-right">Selecionar formulário</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php')?>