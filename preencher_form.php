<?php include('header.php'); 
$id_form = $_POST['idlinha'];
$sqlSelect = "SELECT * from nome_formulario where id = $id_form";
$resultados = mysqli_query($db, $sqlSelect);
foreach ($resultados as $linha) {
    $nome_form = $linha['nome_formulario'];
}
$sqlSelectPerguntas = "SELECT * from perguntas where id_formulario = $id_form";
$resultadosPergunta = mysqli_query($db, $sqlSelectPerguntas);
?>
<body>
<div class="container-fluid pt-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><?php echo(strtoupper($nome_form)) ?></h3>  
                    <div class="container-fluid">
                        <form method="post" id="preencher_form" action="registra_respostas.php">
                            <input type="hidden" name="id_formulario" value="<?php echo($id_form)?>">
                            <?php $cont = 0;
                            foreach ($resultadosPergunta as $key=>$linhaPergunta) { 
                                if (isset($linhaPergunta['is_texto'])) { ?>
                                    <div class="form-group mt-3">
                                    <label class="control-label tituloform"><?php print_r($linhaPergunta["pergunta"]);?></label>
                                    <input type="hidden" name="id_pergunta[]" value="<?php echo($linhaPergunta['id'])?>">
                                    <input class="form-control" name="resposta[]" type="text">
                                    </div>
                                <?php }
                                else if(isset($linhaPergunta['is_opcao'])) { 
                                    $resposta1=$linhaPergunta['resposta_opcao1'];
                                    $resposta2=$linhaPergunta['resposta_opcao2'];
                                    $resposta3=$linhaPergunta['resposta_opcao3'];
                                    $resposta4=$linhaPergunta['resposta_opcao4'];?> 
                                    <input type="hidden" name="id_pergunta[]" value="<?php echo($linhaPergunta['id'])?>">
                                    <div class="form-group mt-3">
                                     <label class="control-label tituloform"><?php print_r($linhaPergunta['pergunta']) ?></label>
                                    </div>
                                    <div class="form-row">
                                     <div class="col">
                                      <label class="control-label mr-3"><?php echo($resposta1);?></label>
                                      <input type="radio"  name="opcao[<?php echo($key);?>]" value="<?php echo($resposta1); ?>">
                                     </div>
                                     <div class="col">
                                      <label class="control-label mr-3"><?php echo($resposta2);?></label>
                                      <input type="radio"  name="opcao[<?php echo($key);?>]" value="<?php echo($resposta2); ?>">
                                     </div>
                                     <div class="col">
                                      <label class="control-label mr-3"><?php echo($resposta3);?></label>
                                      <input type="radio" name="opcao[<?php echo($key);?>]" value="<?php echo($resposta3); ?>">
                                     </div>
                                     <div class="col">
                                      <label class="control-label mr-3"><?php echo($resposta4);?></label>
                                      <input type="radio" name="opcao[<?php echo($key);?>]" value="<?php echo($resposta4); ?>">
                                     </div>
                                     <?php $cont +=1; ?>
                                    </div>
                            <?php } } ?>
                            <button type="submit" class="btn btn-primary mt-3" value="Submit">Enviar respostas</button>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<?php include('footer.php')?>
</body>