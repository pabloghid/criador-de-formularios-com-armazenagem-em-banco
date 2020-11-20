<head>
<?php // Inclui a conexão do banco de dados
include 'connect_db.php'; ?>
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="assets/css/main.css" rel="stylesheet">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><img alt="home" src="assets/images/home.svg" class="pl-3 mb-2">
          Gerenciador de Formul&aacute;rios <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cria_form.php">Criar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="selecionar_form.php">Utilizar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="selecionar_form_resp.php">Visualizar respostas</a>
        </li>
      </ul>
    </div>
  </nav>
</head>