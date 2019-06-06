<!DOCTYPE html>
<html lang="en">
    <title>Petz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="resources/logoPetz.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="libs/bs/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
    </style>
    <body>

        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card">

                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.html" id="paginaInicial" class="w3-bar-item w3-button w3-padding-large" > <img src="resources/paginaInicial.png" alt="" style="padding-right: 10px;padding-bottom: 5px;" />Página inicial</a>
                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-padding-large w3-button" title="More"><img src="resources/mais.png" alt=""/>Funcionário<i class="fa fa-caret-down"></i></button>  
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="inserirFuncionario.php" class="w3-bar-item w3-button"><img src="resources/insert.png" alt="" style="padding-right: 10px;padding-bottom: 5px;" />Inserir</a>
                        <a href="editarFuncionario.php" class="w3-bar-item w3-button"><img src="resources/edit.png" alt="" style="padding-right: 10px;padding-bottom: 5px;" />Editar</a>
                        <a href="excluirFuncionario.php" class="w3-bar-item w3-button"><img src="resources/delete.png" alt="" style="padding-right: 10px;padding-bottom: 5px;" />Excluir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->

        <!-- Page content -->
        <div class="w3-content" style="max-width:2000px;margin-top:46px">

            <!-- Automatic Slideshow Images -->
            <div class="mySlides w3-display-container w3-center">
                <img src="resources/petz.jpg" style="width:100%">
                <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                </div>
            </div>
            <div class="mySlides w3-display-container w3-center">
                <img src="resources/petz2.jpg" style="width:100%">
                <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                </div>
            </div>
            <div class="mySlides w3-display-container w3-center">
                <img src="resources/petz3.jpg" style="width:100%">
                <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                </div>

            </div>

            <hr>

            <div class="content" id="selecionarDados" style=" margin-left: 300px; width: 700px; ">
                <h2 style="margin-left: 250px; color: #0066cc; ">Visualizar cadastrados</h2>            
                <div class="quadroResposta">
                    <?php
                    require_once('class/classFuncionario.php');
                    $objFuncionario = new classFuncionario();

                    $tableFuncionario = $objFuncionario->retFuncionario();
                    $max = sizeof($tableFuncionario);

                    echo '<hr/>';
                    for ($i = 0; $i < $max; $i++) {
                        echo"Código do funcionário: " . $tableFuncionario[$i]["codFuncionario"];
                        echo"<br/> Data do cadastro: " . $tableFuncionario[$i]["dataCadastro"];
                        echo"<br/> Data de nascimento: " . $tableFuncionario[$i]["dataNascimento"];
                        echo"<br/> Nome: " . $tableFuncionario[$i]["nome"];
                        echo"<br/> RG: " . $tableFuncionario[$i]["rg"];
                        echo"<br/> Telefone: " . $tableFuncionario[$i]["telefone"];
                        echo"<br/> E-mail: " . $tableFuncionario[$i]["email"];
                        echo"<br/> Endereço: " . $tableFuncionario[$i]["endereco"];
                        echo"<br/> Cidade: " . $tableFuncionario[$i]["cidade"];
                        echo"<br/> Estado: " . $tableFuncionario[$i]["estado"];
                        echo"<br/> País: " . $tableFuncionario[$i]["pais"];
                        echo"<br/> Código do tipo: " . $tableFuncionario[$i]["codTipo"];
                        echo"<br/> Senha: " . $tableFuncionario[$i]["senha"]. "<hr/>";
             
                    }
                    echo '';
                    ?>                                
                </div>
            </div>   




            <!-- Image of location/map -->

            <!-- Footer -->
            <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
                <a class="fa fa-facebook-official w3-hover-opacity"  href="https://pt-br.facebook.com/petzbr/" target="_blank"></a>
                <a class="fa fa-instagram w3-hover-opacity" href="https://www.instagram.com/petz/" target="_blank"></a>
                <a class="fa fa-twitter w3-hover-opacity" href="https://twitter.com/petzoficial" target="_blank"></a>
                <a class="fa fa-linkedin w3-hover-opacity" href="https://pt.linkedin.com/company/petz" target="_blank"></a>
                <p class="w3-medium">Copyright© by<a> Gabriel Andrade</a></p>
            </footer>

            <script>
                // Automatic Slideshow - change image every 4 seconds
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 4000);
                }

                // Used to toggle the menu on small screens when clicking on the menu button
                function myFunction() {
                    var x = document.getElementById("navDemo");
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }
                }

                // When the user clicks anywhere outside of the modal, close it
                var modal = document.getElementById('ticketModal');
                window.onclick = function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>

    </body>
</html>