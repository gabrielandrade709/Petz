<!DOCTYPE html>
<html lang="en">
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

    <nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top"> <a class="navbar-brand" href="#"> <img src="resources/navPetz.png" alt="mdb logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav nav-tabs font-weight-bold">
      <li class="nav-item"> <a class="nav-link active" href="paginaBalco.php">Inicio</a> </li>
      <li class="nav-item"> <a class="nav-link" href="https://www.petz.com.br/cachorro" target="_blank">Cachorros</a> </li>
      <li class="nav-item"> <a class="nav-link" href="https://www.petz.com.br/gato" target="_blank">Gatos</a> </li>
      <li class="nav-item"> <a class="nav-link" href="https://www.petz.com.br/passaros">Pássaros</a> </li>
      <li class="nav-item"> <a class="nav-link" href="https://www.petz.com.br/atendimento-inteligente" target="_blank">Contatos</a> </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Cadastro</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="selecionarCliente.php">Cliente</a>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="index.html">Sair</a> </li>
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
<!--Segundo carrosel-->
<div class="text-center"> <a class="titulo">Conheça os nossos produtos</a> </div>
<div class="row">
  <div class="col-md-6">
    <div id="carrosel" class="carousel slide tamanhoCarrosel" data-ride="carousel">
      <div class="text-center"> <a style=" font-size: 20px; color: #0066cc; " href="https://www.petz.com.br/cachorro/racoes-e-alimentos" target="_blank">Rações</a> </div>
      <div class="carousel-inner">
        <div class="carousel-item active"> <img class="d-block w-100" src="resources/racao.png" alt="First slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao2.png" alt="Second slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao3.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao4.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao5.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao6.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao7.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao8.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao9.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/racao10.png" alt="Third slide"> </div>
      </div>
    </div>
  </div>
  <div class="col-md-6"> 
    <!--Terceiro carrossel-->
    <div class="carousel slide tamanhoCarrosel" data-ride="carousel">
      <div class="text-center"> <a style=" font-size: 20px; color: #0066cc; " href="https://www.petz.com.br/" target="_blank">Outros</a> </div>
      <div class="carousel-inner">
        <div class="carousel-item active"> <img class="d-block w-100" src="resources/coleira1.png" alt="First slide" > </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/coleira2.png" alt="Second slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/cama1.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/cama2.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/shampoo1.png" alt="Third slide"> </div>
        <div class="carousel-item"> <img class="d-block w-100" src="resources/shampoo2.png" alt="Third slide"> </div>
      </div>
    </div>
  </div>
</div>

<!--Div dos parceiros-->
<div class="parceiros">
  <div class="text-center"> <a class="tituloBranco">Perceiros</a>
    <hr>
  </div>
  <div class="row text-center">
    <div class="col-md-4"> <a href="https://www.pedigree.com.br/" target="_blank"> <img src="resources/pedigree.png" alt=""/></a> </div>
    <div class="col-md-4"> <a href="https://www.bayer.com.br/" target="_blank"><img src="resources/bayer.png" alt="" style="padding-left: 40px;"/></a> </div>
    <div class="col-md-4"> <a href="https://www.whiskas.com.br/" target="_blank"><img src="resources/whiskas.png" alt="" style="padding-left: 50px;"/></a> </div>
  </div>
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