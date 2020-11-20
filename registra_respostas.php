<?php include('header.php');?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-body">
            <?php
            $id_form = $_POST['id_formulario'];
            foreach($_POST['id_pergunta'] as $key=>$id_pergunta){
                if(isset($_POST['resposta'][$key])){
                    //echo($_POST['resposta'][$key]);
                    $resposta = $_POST['resposta'][$key];
                    $sqlInsert = "INSERT INTO respostas (id_formulario, id_pergunta, resposta_texto)
                    VALUES ('$id_form', '$id_pergunta', '$resposta')";
                    $insert = mysqli_query($db, $sqlInsert); 
                }
                else if(isset($_POST['opcao'][$key])){
                    //echo($_POST['opcao'][$key]);
                    $opcao = $_POST['opcao'][$key];
                    $sqlInsert = "INSERT INTO respostas (id_formulario, id_pergunta, resposta_opcao)
                    VALUES ('$id_form', '$id_pergunta', '$opcao')";
                    $insert = mysqli_query($db, $sqlInsert); 
                }
            }
            ?>
            <h3 class="card-title">RESPOSTAS REGISTRADAS COM SUCESSO!</h3>
                    <div class="ml-3 mt-3">
                     As respostas foram registradas. Acesse as respostas no botão 'Visualizar respostas'.
                    </div>
                    <div class="mt-3">
                    <a href="index.php">
                    <button class="btn btn-secondary float-right ml-3">Início</button>
                    </a>
                    <a href="selecionar_form_resp.php">
                    <button class="btn btn-primary float-right">Visualizar respostas</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php')?>