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
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top"> <a class="navbar-brand" href="#"> <img src="resources/navPetz.png" alt="mdb logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav nav-tabs font-weight-bold">
      <li class="nav-item"> <a class="nav-link active" href="paginaAdm.php">Inicio</a> </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Funcionário</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="selecionarFuncionario.php">Visualizar cadastrados</a>
          <a class="dropdown-item" href="inserirFuncionario.php">Inserir</a>
          <a class="dropdown-item" href="excluirFuncionario.php">Excluir</a>
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

            <div class="container" id="editarDados">
                <h2 class="titulo text-center">Editar</h2>            

                <hr/>

                <div class="formulario">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="lblCodigo" style="color: #0066cc;">Código</label>
                            <input type="number"
                                   class="form-control iptCodigo"
                                   id="iptCodigo"
                                   name="codFuncionario"
                                   placeholder="Informe o código que deseja editar">
                            <small id="codigoHelp" class="form-text text-muted"/>

                            </small>
                            <div class="form-group">
                                <label for="lblDataCadastro" style="color: #0066cc;">Data do cadastro</label>
                                <input type="text"
                                       class="form-control iptdataCadastro mskData"
                                       id="iptdataCadastro"
                                       name="dataCadastro"
                                       placeholder="Informe a nova data do cadastro">
                                <small id="dataCadastroHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblDataNascimento" style="color: #0066cc;">Data de nascimento</label>
                                <input type="text"
                                       class="form-control iptDataNascimento mskData"
                                       id="iptDataNascimento"
                                       name="dataNascimento"
                                       placeholder="Informe a nova data de nascimento">
                                <small id="dataNascimentoHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblNome" style="color: #0066cc;">Nome</label>
                                <input type="text"
                                       class="form-control iptNome"
                                       id="iptNome"
                                       name="nome"
                                       placeholder="Informe o novo nome">
                                <small id="nomeHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblRg" style="color: #0066cc;">RG</label>
                                <input type="text"
                                       class="form-control iptRg mskRg"
                                       id="iptRg"
                                       name="rg"
                                       placeholder="Informe o novo RG">
                                <small id="rgHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblTelefone" style="color: #0066cc;">Telefone</label>
                                <input type="text"
                                       class="form-control iptTelefone mskTelefone"
                                       id="iptTelefone"
                                       name="telefone"
                                       placeholder="Informe o novo telefone">
                                <small id="telefoneHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblEmail" style="color: #0066cc;">E-mail</label>
                                <input type="email"
                                       class="form-control iptEmail"
                                       id="iptEmail"
                                       name="email"
                                       placeholder="Informe o e-mail">
                                <small id="emailHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblEndereco" style="color: #0066cc;">Endereço</label>
                                <input type="text"
                                       class="form-control iptEndereco"
                                       id="iptEndereco"
                                       name="endereco"
                                       placeholder="Informe o novo endereço">
                                <small id="enderecoHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblCidade" style="color: #0066cc;">Cidade</label>
                                <input type="text"
                                       class="form-control iptCidade"
                                       id="iptCidade"
                                       name="cidade"
                                       placeholder="Informe a nova cidade">
                                <small id="cidadeHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblEstado" style="color: #0066cc;">Estado</label>
                                <select id=genero name="estado" style="color: #0066cc;">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                                <small id="estadoHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblPais" style="color: #0066cc;">País</label>
                                <select id=genero name="pais" style="color: #0066cc;">
                                    <option value="África do Sul">África do Sul</option>
                                    <option value="Albânia">Albânia</option>
                                    <option value="Alemanha">Alemanha</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua">Antigua</option>
                                    <option value="Arábia Saudita">Arábia Saudita</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armênia">Armênia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Austrália">Austrália</option>
                                    <option value="Áustria">Áustria</option>
                                    <option value="Azerbaijão">Azerbaijão</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrein">Bahrein</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Bélgica">Bélgica</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermudas">Bermudas</option>
                                    <option value="Botsuana">Botsuana</option>
                                    <option value="Brasil" selected>Brasil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgária">Bulgária</option>
                                    <option value="Burkina Fasso">Burkina Fasso</option>
                                    <option value="Butão">Butão</option>
                                    <option value="Cabo Verde">Cabo Verde</option>
                                    <option value="Camarões">Camarões</option>
                                    <option value="Camboja">Camboja</option>
                                    <option value="Canadá">Canadá</option>
                                    <option value="Cazaquistão">Cazaquistão</option>
                                    <option value="Chade">Chade</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                                    <option value="Colômbia">Colômbia</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Coréia do Sul">Coréia do Sul</option>
                                    <option value="Costa do Marfim">Costa do Marfim</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croácia">Croácia</option>
                                    <option value="Dinamarca">Dinamarca</option>
                                    <option value="Djibuti">Djibuti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="EUA">EUA</option>
                                    <option value="Egito">Egito</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Emirados Árabes">Emirados Árabes</option>
                                    <option value="Equador">Equador</option>
                                    <option value="Eritréia">Eritréia</option>
                                    <option value="Escócia">Escócia</option>
                                    <option value="Eslováquia">Eslováquia</option>
                                    <option value="Eslovênia">Eslovênia</option>
                                    <option value="Espanha">Espanha</option>
                                    <option value="Estônia">Estônia</option>
                                    <option value="Etiópia">Etiópia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Filipinas">Filipinas</option>
                                    <option value="Finlândia">Finlândia</option>
                                    <option value="França">França</option>
                                    <option value="Gabão">Gabão</option>
                                    <option value="Gâmbia">Gâmbia</option>
                                    <option value="Gana">Gana</option>
                                    <option value="Geórgia">Geórgia</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Granada">Granada</option>
                                    <option value="Grécia">Grécia</option>
                                    <option value="Guadalupe">Guadalupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guiana">Guiana</option>
                                    <option value="Guiana Francesa">Guiana Francesa</option>
                                    <option value="Guiné-bissau">Guiné-bissau</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Holanda">Holanda</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungria">Hungria</option>
                                    <option value="Iêmen">Iêmen</option>
                                    <option value="Ilhas Cayman">Ilhas Cayman</option>
                                    <option value="Ilhas Cook">Ilhas Cook</option>
                                    <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                                    <option value="Ilhas Marshall">Ilhas Marshall</option>
                                    <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                                    <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                                    <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                                    <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                                    <option value="Índia">Índia</option>
                                    <option value="Indonésia">Indonésia</option>
                                    <option value="Inglaterra">Inglaterra</option>
                                    <option value="Irlanda">Irlanda</option>
                                    <option value="Islândia">Islândia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Itália">Itália</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japão">Japão</option>
                                    <option value="Jordânia">Jordânia</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Líbano">Líbano</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lituânia">Lituânia</option>
                                    <option value="Luxemburgo">Luxemburgo</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedônia">Macedônia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malásia">Malásia</option>
                                    <option value="Malaui">Malaui</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marrocos">Marrocos</option>
                                    <option value="Martinica">Martinica</option>
                                    <option value="Mauritânia">Mauritânia</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="México">México</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Mônaco">Mônaco</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Nicarágua">Nicarágua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigéria">Nigéria</option>
                                    <option value="Noruega">Noruega</option>
                                    <option value="Nova Caledônia">Nova Caledônia</option>
                                    <option value="Nova Zelândia">Nova Zelândia</option>
                                    <option value="Omã">Omã</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panamá">Panamá</option>
                                    <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                                    <option value="Paquistão">Paquistão</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Polinésia Francesa">Polinésia Francesa</option>
                                    <option value="Polônia">Polônia</option>
                                    <option value="Porto Rico">Porto Rico</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Quênia">Quênia</option>
                                    <option value="Rep. Dominicana">Rep. Dominicana</option>
                                    <option value="Rep. Tcheca">Rep. Tcheca</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romênia">Romênia</option>
                                    <option value="Ruanda">Ruanda</option>
                                    <option value="Rússia">Rússia</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa Americana">Samoa Americana</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serra Leone">Serra Leone</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Singapura">Singapura</option>
                                    <option value="Síria">Síria</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                                    <option value="St. Lúcia">St. Lúcia</option>
                                    <option value="St. Vincent">St. Vincent</option>
                                    <option value="Sudão">Sudão</option>
                                    <option value="Suécia">Suécia</option>
                                    <option value="Suiça">Suiça</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Tailândia">Tailândia</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tanzânia">Tanzânia</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                    <option value="Tunísia">Tunísia</option>
                                    <option value="Turquia">Turquia</option>
                                    <option value="Ucrânia">Ucrânia</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Uruguai">Uruguai</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnã">Vietnã</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zâmbia">Zâmbia</option>
                                    <option value="Zimbábue">Zimbábue</option>
                                </select>
                                <small id="paisHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="lblCodTipo" style="color: #0066cc;">Tipo do funcionário:</label>
                                <select id=codTipo name="codTipo" style="color: #0066cc;">
                                    <option value="1">Administrador</option>
                                    <option value="2">Balconista</option>
                                </select>
                                <small id="codTipoHelp" class="form-text text-muted"/>
                                </small>
                                <span class='msg-erro msg-codTipo'></span>
                            </div>
                            <div class="form-group">
                                <label for="lblSenha" style="color: #0066cc;">Senha</label>
                                <input type="text"
                                       class="form-control iptSenha"
                                       id="iptSenha"
                                       name="senha"
                                       placeholder="Informe a nova senha">
                                <small id="senhaHelp" class="form-text text-muted"/>
                                </small>
                            </div>
                            <div class="form-group">
                                <button type="submit" 
                                        class="btn btn-primary"
                                        name="enviar"> Editar </button>
                            </div>
                    </form> 
                </div>

                <div class="container azul">
                    <?php
                    require_once('class/classFuncionario.php');
                    $objFuncionario = new classFuncionario();

                    if (isset($_POST['enviar'])) {

                        $objFuncionario->setCodFuncionario($_POST['codFuncionario']);
                        $objFuncionario->setDataCadastro($_POST['dataCadastro']);
                        $objFuncionario->setDataNascimento($_POST['dataNascimento']);
                        $objFuncionario->setNome($_POST['nome']);
                        $objFuncionario->setRg($_POST['rg']);
                        $objFuncionario->setTelefone($_POST['telefone']);
                        $objFuncionario->setEmail($_POST['email']);
                        $objFuncionario->setEndereco($_POST['endereco']);
                        $objFuncionario->setCidade($_POST['cidade']);
                        $objFuncionario->setEstado($_POST['estado']);
                        $objFuncionario->setPais($_POST['pais']);
                        $objFuncionario->setCodTipo($_POST['codTipo']);
                        $objFuncionario->setSenha($_POST['senha']);

                        $objFuncionario->editarFuncionario($objFuncionario);
                    }
                    $tableFuncionario = $objFuncionario->retFuncionario();

                    if ($tableFuncionario != "erro")
                    {
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
                            echo"<br/> Senha: " . $tableFuncionario[$i]["senha"] . "<hr/>";
                        }
                        echo '';
                    }
                    
                    ?>                                
                </div>
            </div>   
                </div>




            <!-- Image of location/map -->

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

