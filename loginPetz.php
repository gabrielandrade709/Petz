<!DOCTYPE html>
<html lang="pt-br">
    <title>Petz</title>
    <meta charset="UTF-8">
<!--Adaptação para mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.55, user-scalable=0">
<!--Ícone do site-->
<link rel="shortcut icon" href="resources/logoPetz.png">
<!--Ícones do fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!--Página de stilo do site-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--Biblioteca Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!--Font Roboto da Google-->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<!--Jquery-->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

    <body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top"> <a class="navbar-brand" href="#"> <img src="resources/navPetz.png" alt="mdb logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav nav-tabs font-weight-bold">
      <li class="nav-item"> <a class="nav-link" href="index.html">Inicio</a> </li>
      <li class="nav-item"> <a class="nav-link" href="https://www.petz.com.br/cachorro" target="_blank">Cachorros</a> </li>
      <li class="nav-item"> <a class="nav-link" href="https://www.petz.com.br/gato" target="_blank">Gatos</a> </li>
      <li class="nav-item"> <a class="nav-link" href="https://www.petz.com.br/passaros">Pássaros</a> </li>
      <li class="nav-item"> <a class="nav-link" href="https://www.petz.com.br/atendimento-inteligente" target="_blank">Contatos</a> </li>
		<li class="nav-item"> <a class="nav-link active" href="#">Login</a> </li>
    </ul>
  </div>
</nav>

<!--Primeiro carrossel-->
<div id="carousel" class="carousel slide" data-ride="carousel" style="margin-top: 101px;">
  <div class="carousel-inner">
    <div class="carousel-item active"> <img class="d-block w-100" src="resources/petz.jpg"> </div>
    <div class="carousel-item"> <img class="d-block w-100" src="resources/petz2.jpg"> </div>
    <div class="carousel-item"> <img class="d-block w-100" src="resources/petz3.jpg"> </div>
  </div>
</div>
            <div class='container' style="width: 400px;">
                <h1 class="titulo text-center">Login</h1>
                <form action="" method="post" id='form-contato'>
                    <div class="form-group">
                        <label class="azul" for="nome" style="color: #0066cc;">Email: </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe o email">
                        <span class='msg-erro msg-nome'></span>
                    </div>
                    <div class="form-group">
                        <label class="azul" for="email" style="color: #0066cc;">Senha: </label>
                        <input type="password" class="form-control" id="email" name="senha" placeholder="Informe a senha">
                        <span class='msg-erro msg-email'></span>
                    </div>
					<div class="text-center">
                    <button type="submit" class="btn btn-primary" id='botao' name="enviar"> <img src="resources/Entrar.png" alt="" style="padding-right: 10px;padding-bottom: 5px;" />Entrar</button>   
					</div>
                </form>
            </div>
            <?php
            require_once('class/classFuncionario.php');
            $objFunc = new classFuncionario();

            if (isset($_POST['enviar'])) {

                $objFunc->setEmail($_POST["email"]);
                $objFunc->setSenha($_POST["senha"]);

                $tableFunc = $objFunc->logar($objFunc);

                if ($tableFunc === "erro") {
                    echo "<script> alert('Email ou senha incorretos') </script>";
                } else {
                    $tipoFunc = $tableFunc[0]["codTipo"];

                    if ($tipoFunc == 1) {
                        echo "<script> window.location = 'paginaAdm.php' </script>";
                    } else {
                        echo "<script> window.location = 'paginaBalco.php' </script>";
                    }
                }
            }
            ?>
          <br>
        </div>
        <!-- Footer -->
<footer class="page-footer font-small cyan darken-3 text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center"> <a class="fb-ic" href="https://pt-br.facebook.com/petzbr/" target="_blank"> <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> </a> <a class="tw-ic" href="https://twitter.com/petzoficial" target="_blank"> <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> </a> <a class="ins-ic" href="https://www.instagram.com/petz/" target="_blank"> <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> </a> </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3 azul">© 2019 Copyright: <a > Petz</a> </div>
</footer>
<!--Script da biblioteca bootstrap--> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
