
<?php

class classFuncionario {

    //-- Propriedades privadas
    private $codFuncionario;
    private $dataCadastro;
    private $dataNascimento;
    private $nome;
    private $rg;
    private $telefone;
    private $email;
    private $endereco;
    private $cidade;
    private $estado;
    private $pais;
    private $codTipo;
    private $senha;

    //-- Encapsulamento das propriedades (Método GET e SET)
    function getCodFuncionario()
    {
        return $this->codFuncionario;
    }

    function getDataCasdastro()
    {
        return $this->dataCadastro;
    }

    function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getRg()
    {
        return $this->rg;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getEndereco()
    {
        return $this->endereco;
    }

    function getCidade()
    {
        return $this->cidade;
    }

    function getEstado()
    {
        return $this->estado;
    }

    function getPais()
    {
        return $this->pais;
    }

    function getCodTipo()
    {
        return $this->codTipo;
    }
    
      function getSenha()
    {
        return $this->senha;
    }

    function setCodFuncionario($codFuncionario)
    {
        $this->codFuncionario = $codFuncionario;
    }

    function setDataCadastro($dataCasdastro)
    {
        $this->dataCadastro = $dataCasdastro;
    }

    function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setRg($rg)
    {
        $this->rg = $rg;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
    
       function setEndereco($endereco)
    {
        $this->enderecol = $endereco;
    }

    function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    function setEstado($estado)
    {
        $this->estado = $estado;
    }

    function setPais($pais)
    {
        $this->pais = $pais;
    }

    function setCodTipo($codTipo)
    {
        $this->codTipo = $codTipo;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    //-------------- CRUD-----------------------


    public function retFuncionario()
    {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");
        $tableFuncionario = $objConexao->selecionarDados("Select * from Funcionario");

        return $tableFuncionario;
    }

    public function inserirFuncionario($objFuncionario)
    {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");

        $dataCadastro = $objFuncionario->getDataCasdastro();
        $dataNascimento = $objFuncionario->getDataNascimento();
        $nome = $objFuncionario->getNome();
        $rg = $objFuncionario->getRg();
        $telefone = $objFuncionario->getTelefone();
        $email = $objFuncionario->getEmail();
        $endereco = $objFuncionario->getEndereco();
        $cidade = $objFuncionario->getCidade();
        $estado = $objFuncionario->getEstado();
        $pais = $objFuncionario->getPais();
        $codTipo = $objFuncionario->getCodTipo();
        $senha = $objFuncionario->getSenha();

        $objConexao->exercutarComandoSQL("INSERT INTO Funcionario (dataCadastro,dataNascimento,nome,rg,telefone,email,endereco,cidade,estado,pais,codTipo,senha) VALUES ('$dataCadastro','$dataNascimento','$nome','$rg','$telefone','$email','$endereco','$cidade','$estado','$pais',$codTipo,'$senha' )");

        return true;
    }

    public function editarFuncionario($objFuncionario)
    {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");

        $codFuncionario = $objFuncionario->getCodFuncionario();
        $dataCadastro = $objFuncionario->getDataCasdastro();
        $dataNascimento = $objFuncionario->getDataNascimento();
        $nome = $objFuncionario->getNome();
        $rg = $objFuncionario->getRg();
        $telefone = $objFuncionario->getTelefone();
        $email = $objFuncionario->getEmail();
        $endereco = $objFuncionario->getEndereco();
        $cidade = $objFuncionario->getCidade();
        $estado = $objFuncionario->getEstado();
        $pais = $objFuncionario->getPais();
        $codTipo = $objFuncionario->getCodTipo();
        $senha = $objFuncionario->getSenha();

        $objConexao->exercutarComandoSQL("UPDATE Funcionario SET dataCadastro ='$dataCadastro', dataNascimento ='$dataNascimento', nome ='$nome',rg ='$rg',telefone ='$telefone',email ='$email',endereco ='$endereco',cidade ='$cidade',estado ='$estado',pais ='$pais',codTipo =$codTipo,senha ='$senha' WHERE codFuncionario = $codFuncionario");

        return true;
    }

    public function excluirFuncionario($objFuncionario)
    {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");

        $codFuncionario = $objFuncionario->getCodFuncionario();


        $objConexao->exercutarComandoSQL("DELETE FROM Funcionario WHERE codFuncionario = $codFuncionario");

        return true;
    }
    
    public function logar($objFunc){
        require_once ('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");
        
        $email = $objFunc->getEmail();
        $senha = $objFunc->getSenha();
        
        $tableFunc = $objConexao->selecionarDados("SELECT * FROM Funcionario WHERE email = '$email' AND senha = '$senha'");
        
        return $tableFunc;
    }

    //-------------- OUTROS MÉTODOS -----------------------
}
