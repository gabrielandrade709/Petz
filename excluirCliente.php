<!DOCTYPE html>
<html lang="en">
    <title>Petz</title>
    <meta charset="UTF-8">
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

<nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top"> <a class="navbar-brand" href="#"> <img src="resources/navPetz.png" alt="mdb logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav nav-tabs font-weight-bold">
      <li class="nav-item"> <a class="nav-link active" href="paginaBalco.php">Inicio</a> </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Cliente</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="selecionarCliente.php">Visualizar clientes</a>
          <a class="dropdown-item" href="inserirCliente.php">Inserir</a>
          <a class="dropdown-item" href="editarCliente.php">Editar</a>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="index.html">Sair</a> </li>
    </ul>
  </div>
</nav>

                 <!--Primeiro carrossel-->
<div id="carousel" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
  <div class="carousel-inner">
    <div class="carousel-item active"> <img class="d-block w-100" src="resources/petz.jpg"> </div>
    <div class="carousel-item"> <img class="d-block w-100" src="resources/petz2.jpg"> </div>
    <div class="carousel-item"> <img class="d-block w-100" src="resources/petz3.jpg"> </div>
  </div>
</div>
            <hr>
            
            <div class="container" id="excluirDados">
                <h2 class="titulo text-center">Excluir</h2>            

                <hr/>

                <h3 style="color: #0066cc; "> Formulário </h3>
                <div class="formulario">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="lblCodigo" style="color: #0066cc; ">Código</label>
                            <input type="number"
                                   class="form-control iptCodigo"
                                   id="iptCodigo"
                                   name="codCliente"
                                   placeholder="Informe o código que deseja excluir">
                            <small id="codigoHelp" class="form-text text-muted"/>
                            </small>
                        </div>

                        <div class="form-group">
                            <button type="submit" 
                                    class="btn btn-primary"
                                    name="enviar"> Excluir </button>
                        </div>
                    </form> 
                </div>

                <div class="container azul">
                    <?php
                    require_once('class/classCliente.php');
                    $objCliente = new classCliente();

                    if (isset($_POST['enviar']))
                    {

                        $objCliente->setCodCliente($_POST['codCliente']);

                        $objCliente->excluirCliente($objCliente);
                    }
                    $tableCliente = $objCliente->retCliente();
                    
                    if ($tableCliente != "erro")
                    {
                        $max = sizeof($tableCliente);

                        echo '<hr/>';
                        for ($i = 0; $i < $max; $i++)
                        {
                            echo"Código do cliente: " . $tableCliente[$i]["codCliente"];
                            echo"<br/> Dia do cadastro: " . $tableCliente[$i]["dataCadastro"];
                            echo"<br/> Data de nascimento: " . $tableCliente[$i]["dataNascimento"];
                            echo"<br/> Nome: " . $tableCliente[$i]["nome"];
                            echo"<br/> RG: " . $tableCliente[$i]["rg"];
                            echo"<br/> Telefone: " . $tableCliente[$i]["telefone"];
                            echo"<br/> E-mail: " . $tableCliente[$i]["email"];
                            echo"<br/> Endereço: " . $tableCliente[$i]["endereco"];
                            echo"<br/> Cidade: " . $tableCliente[$i]["cidade"];
                            echo"<br/> Estado: " . $tableCliente[$i]["estado"];
                            echo"<br/> País: " . $tableCliente[$i]["pais"] . "<hr/>";
                        }
                        echo '';
                    }
                    
                    ?>                                
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
