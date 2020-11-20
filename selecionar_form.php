<?php include('header.php')?>
<body>
<div class="container-fluid pt-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">SELECIONE O FORMUL&Aacute;RIO</h3>  
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <form method="post" id="select_form" action="preencher_form.php">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Nome do Formul&aacute;rio</th>
                                      <th scope="col">Nome do criador</th>
                                      <th scope="col">Selecionar</th>
                                      <th scope="col">Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $sqlSelect = "SELECT * from nome_formulario";
                                    $resultados = mysqli_query($db, $sqlSelect);
                                    foreach ($resultados as $linha) {  ?>
                                        <tr>
                                         <th scope="row"><?php print_r($linha['id']); ?></th>
                                          <td><?php print_r($linha['nome_formulario']); ?></td>
                                          <td><?php print_r($linha['nome_criador']); ?></td>
                                         <td><button type="submit" name="idlinha" class="btn btn-primary" value="<?php print_r($linha['id']); ?>">Selecionar</td>
                                         <td><a href="excluir.php?id=<?php echo $linha['id']?>" class="btn btn-danger">Excluir</td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<?php include('footer.php')?>
</body>