<?php include('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-body">
<?php if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $deleteSqlRespostas = "DELETE FROM `respostas` where `id_formulario` = $id";
    $deletar = mysqli_query($db, $deleteSqlRespostas);
    $deleteSqlPerguntas = "DELETE FROM `perguntas` where `id_formulario` = $id";
    $deletar = mysqli_query($db, $deleteSqlPerguntas);
    $deleteSqlNomeForm = "DELETE FROM `nome_formulario` where `id` = $id";
    $deletar = mysqli_query($db, $deleteSqlNomeForm);    
    ?>
    <h3 class="card-title">FORMUL&Aacute;RIO EXCLUIDO COM SUCESSO.</h3>
        <div class="ml-3 mt-3">
            O formul&aacute;rio foi excluído.
        </div>
<?php } ?>
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
<?php
if(empty($_GET['id'])){
    throw new Exception('ID está em branco');
}
include('footer.php')
?>