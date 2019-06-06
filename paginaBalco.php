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
                <a href="paginaBalco.php" id="paginaInicial" class="w3-bar-item w3-button w3-padding-large" > <img src="resources/paginaInicial.png" alt="" style="padding-right: 10px;padding-bottom: 5px;" />Página inicial</a>
                <a href="https://www.petz.com.br/cachorro" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><img src="resources/cachorros.png" alt=""  style="padding-right: 10px;padding-bottom: 5px;" /> Cachorros</a>
                <a href="https://www.petz.com.br/gato" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hide-small"> <img src="resources/Gatos.png" alt="" style="padding-right: 10px;padding-bottom: 5px;" />Gatos</a>
                <a href="https://www.petz.com.br/passaros" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><img src="resources/passaros.png" alt="" style="padding-right: 10px;padding-bottom: 5px;"/>Pássaros</a>
                <a href="https://www.petz.com.br/atendimento-inteligente" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><img src="resources/contato.png" alt="" style="padding-right: 10px;padding-bottom: 5px;"/>Contatos</a>
                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-padding-large w3-button" title="More"><img src="resources/mais.png" alt=""/>Cadastro<i class="fa fa-caret-down"></i></button>  
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="selecionarCliente.php" class="w3-bar-item w3-button"><img src="resources/cliente.png" alt=""style="padding-right: 10px;padding-bottom: 5px;" />Cliente</a>
                    </div>
                </div>
                <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-display-topright"><img src="resources/Sair.png" alt="" style="padding-right: 10px;padding-bottom: 5px;" />Sair</a>
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
            <div>
            <a style=" padding-left: 505px; font-size: 40px;color: #0066cc;">Conheça os nossos produtos</a>
            <div id="segundaDiv">
                <div id="slideDaEsquerda">
                    <div id="carrosel" class="carousel slide tamanhoCarrosel" data-ride="carousel">
                        <a style="margin-left: 116px; font-size: 20px; color: #0066cc; " href="https://www.petz.com.br/cachorro/racoes-e-alimentos" target="_blank">Rações</a>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="resources/racao.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao3.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao4.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao5.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao6.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao7.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao8.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao9.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/racao10.png" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slideDoMeio">
                    <div id="carrosel" class="carousel slide tamanhoCarrosel" data-ride="carousel">
                        <a style="margin-left: 116px; font-size: 20px; color: #0066cc; " href="https://www.petz.com.br/" target="_blank">Outros</a>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="resources/coleira1.png" alt="First slide" >
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/coleira2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/cama1.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/cama2.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/shampoo1.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/shampoo2.png" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>


            <!-- The Tour Section -->
            <div class="w3-black" id="terceiraDiv">
                <br/> 
                <div class="w3-container w3-content w3-padding-64" style=" max-width: 2000px;">
                    <a href="https://www.pedigree.com.br/" target="_blank"> <img src="resources/pedigree.png" alt=""/></a>
                        <a href="https://www.bayer.com.br/" target="_blank"><img src="resources/bayer.png" alt="" style="padding-left: 40px;"/></a>
                        <a href="https://www.whiskas.com.br/" target="_blank"><img src="resources/whiskas.png" alt="" style="padding-left: 50px;"/></a>
                        <a href="https://www.progato.com.br/" target="_blank"><img src="resources/progato.png" alt="" style=" padding-left: 50px;"/></a>
                        <a href="http://www.royalcanin.com.br/" target="_blank"><img src="resources/royalCanin.png" alt="" style="padding-left: 50px;"/></a>
                </div>
            </div>

            <!-- Ticket Modal -->

            <!-- The Contact Section -->

            <!-- End Page Content -->
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