<?php include('header.php'); 

$id_form = $_POST['idlinha'];
// NOME FORMULARIO
$sqlSelect = "SELECT * from nome_formulario where id = $id_form";
$resultados = mysqli_query($db, $sqlSelect);
foreach ($resultados as $linha) {
    $nome_form = $linha['nome_formulario'];
}
// PERGUNTAS
$sqlSelectPerguntas = "SELECT * from perguntas where id_formulario = $id_form";
$resultadosPergunta = mysqli_query($db, $sqlSelectPerguntas);

// RESPOSTAS
$sqlSelectRespostas = "SELECT * from respostas where id_formulario = $id_form";
$resultadosRespostas = mysqli_query($db, $sqlSelectRespostas);

?>
<h3 class="mt-3"><?php echo($nome_form)?></h3>
<div class="container mt-4">
<?php foreach($resultadosPergunta as $pergunta){
  $id = $pergunta['id'];
  $perg = $pergunta['pergunta'];
  $respOpcao1 = $pergunta['resposta_opcao1'];
  $respOpcao2 = $pergunta['resposta_opcao2'];
  $respOpcao3 = $pergunta['resposta_opcao3'];
  $respOpcao4 = $pergunta['resposta_opcao4'];

  if(isset($pergunta['is_texto'])) {?>
    <hr class="divider"></hr>
    <p class="lead ml-3 font-weight-normal">&#8226; <?php echo($perg) ?><p>
    <div style="overflow: auto; max-height:250px;">
      <table class="table table-sm">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Resposta</th>
        </tr>
      </thead>
      <?php $sqlSelectRespostas = "SELECT * from respostas where id_formulario = $id_form and id_pergunta = $id";
          $resultadosRespostas = mysqli_query($db, $sqlSelectRespostas);
          foreach ($resultadosRespostas as $resposta){?>
      <tbody>
        <tr>
          <th scope="row" style="width:10%"><?php echo($resposta['id']);?></th>
          <td style="width:90%"><?php echo($resposta['resposta_texto']); ?></td>
        </tr>
      </tbody>
      <?php } ?>
      </table>
    </div>
 <?php } ?>
<!----------------------------------------------- FIM TEXTO ---------------------------------------->
<?php if(isset($pergunta['is_opcao'])) { ?>
<hr class="divider"></hr>
 <div style="overflow: auto; height:150px;">
  <table class="table table-sm table-bordered">
   <thead class="thead-dark">
     <tr>
       <p class="lead ml-3 font-weight-normal">&#8226; <?php echo($perg) ?><p>
       <th scope="col">#</th>
       <th scope="col"><?php echo($respOpcao1)?></th>       
       <th scope="col"><?php echo($respOpcao2)?></th>       
       <th scope="col"><?php echo($respOpcao3)?></th>       
       <th scope="col"><?php echo($respOpcao4)?></th>       
     </tr>
   </thead>
   <?php ////////// SELECTS DE COUNT
      $sqlSelectRespostas = "SELECT count(resposta_opcao) as '$respOpcao1' from respostas 
      where id_formulario = $id_form and id_pergunta = $id and resposta_opcao = '$respOpcao1' ";
          $resultadosRespostas = mysqli_query($db, $sqlSelectRespostas);
          $qtdResposta1 = mysqli_fetch_assoc($resultadosRespostas);
          
      $sqlSelectRespostas = "SELECT count(resposta_opcao) as '$respOpcao2' from respostas 
      where id_formulario = $id_form and id_pergunta = $id and resposta_opcao = '$respOpcao2' ";
          $resultadosRespostas = mysqli_query($db, $sqlSelectRespostas);
          $qtdResposta2 = mysqli_fetch_assoc($resultadosRespostas);

      $sqlSelectRespostas = "SELECT count(resposta_opcao) as '$respOpcao3' from respostas 
      where id_formulario = $id_form and id_pergunta = $id and resposta_opcao = '$respOpcao3' ";
          $resultadosRespostas = mysqli_query($db, $sqlSelectRespostas);
          $qtdResposta3 = mysqli_fetch_assoc($resultadosRespostas);

      $sqlSelectRespostas = "SELECT count(resposta_opcao) as '$respOpcao4' from respostas 
      where id_formulario = $id_form and id_pergunta = $id and resposta_opcao = '$respOpcao4' ";
          $resultadosRespostas = mysqli_query($db, $sqlSelectRespostas);
          $qtdResposta4 = mysqli_fetch_assoc($resultadosRespostas);
      //////////////////////////////////////////////////////////////////////////////////////////?>
   <tbody>
     <tr>
       <th style="width:10%" scope="row">Quantidade</th>
       <td style="width:22%"> <?php echo($qtdResposta1[$respOpcao1])?></td>
       <td style="width:22%"> <?php echo($qtdResposta2[$respOpcao2])?></td>
       <td style="width:22%"> <?php echo($qtdResposta3[$respOpcao3])?></td>
       <td style="width:22%"> <?php echo($qtdResposta4[$respOpcao4])?></td>
     </tr>
   </tbody>
  </table>
 </div>
<?php }
  } 
  include('footer.php')?>
<!------------------------------------------- FIM OPCAO -------------------------------------------->
</div>