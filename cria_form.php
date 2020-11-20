<html>
<?php include('header.php')?>
<body>
<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">CRIE SEU FORMUL&Aacute;RIO</h3>
                    <div class="bootstrap-iso">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="formulario">
                                        <form method="post" id="formulario" action="registra_perguntas.php">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Digite o nome do formulário
                                                </label>
                                                <input class="form-control" id="nome_form" name="nome_form" type="text" value=""> 
                                                <label class="control-label" style="margin-top:10px;">
                                                    Digite seu nome
                                                </label>
                                                <input class="form-control" id="nome" name="nome" type="text" value="">
                                            </div>
                                            <div id="pergunta2"> </div>
                                            <div>
                                                <button class="mb-3" type="button" id="adicionar-campo">
                                                    +
                                                </button>
                                                <button type="button" id="texto" style="display:none"> Texto </button>
                                                <button type="button" id="checkbox" style="display:none"> Opção </button>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary" value="Submit">
                                                    Enviar perguntas
                                                </button>
                                            </div>                                        
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // FUNCAO QUE ADICIONA UMA PERGUNTA DE TEXTO
    $( "#texto" ).click(function () {
        $( "#pergunta2" ).append( '<div class="form-group"><label class="control-label">Digite sua pergunta</label><input class="form-control" name="pergunta[]" type="text"></div>' );
    });
    // FUNCAO QUE ADICIONA UMA PERGUNTA DE OPCOES
    $( "#checkbox" ).click(function () {
        $( "#pergunta2" ).append('<div class="form-group"><label class="control-label">Digite sua pergunta</label><input class="form-control" name="perguntaOpcao[]" type="text"></div><div class="form-row"><div class="col"><input class="form-control" name="opcao[]" placeholder="Primeira resposta"></div><div class="col"><input class="form-control" name="opcao[]" placeholder="Segunda resposta"></div><div class="col"><input class="form-control mb-3" name="opcao[]" placeholder="Terceira resposta"></div><div class="col"><input class="form-control mb-3" name="opcao[]" placeholder="Quarta resposta"></div>');
    });
    $("#adicionar-campo").click(function(){
        $("#texto").show();
        $("#checkbox").show();
    });
</script>
<?php include('footer.php');?>
</body>
</html>