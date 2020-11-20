<?php include('header.php')?>
<body>
<div class="container-fluid">
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Gerenciador de Formul&aacute;rios</h1>
            <p class="lead pt-3">Crie seu formulário, entreviste pessoas e consulte as respostas.</p>
        </div>
    </section>

    <div class="row align-items-center pt-3">
        <button class="col ml-3 colinicio d-flex align-items-center gridfonte blumine" onclick="location.href='cria_form.php'">
        <img src="assets/images/idea.png" width="100" height="100" class="img-rounded"></img>
            <spam class="text-center pl-4">Criar Formul&aacute;rio</spam>
        </button>
        <button class="col ml-3 colinicio d-flex align-items-center gridfonte elm" onclick="location.href='selecionar_form.php'">
        <img src="assets/images/edit.svg" width="50" height="50"> </img>
            <spam class="text-center pl-5">Utilizar Formul&aacute;rio</spam>
        </button>
        <button class="col ml-3 mr-3 colinicio d-flex align-items-center gridfonte eucalipto" onclick="location.href='selecionar_form_resp.php'">
        <img src="assets/images/eye.svg" width="50" height="50"> </img>
                <spam class="text-center pl-5">Ver respostas</spam>
        </button>
    </div>
</div>
<?php include('footer.php');?>
</body>