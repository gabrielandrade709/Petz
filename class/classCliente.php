
<?php

class classCliente {

    //-- Propriedades privadas
    private $codCliente;
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

    //-- Encapsulamento das propriedades (Método GET e SET)
    function getCodCliente() {
        return $this->codCliente;
    }

    function getDataCasdastro() {
        return $this->dataCadastro;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getNome() {
        return $this->nome;
    }

    function getRg() {
        return $this->rg;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getPais() {
        return $this->pais;
    }

    function setCodCliente($codCliente) {
        $this->codCliente = $codCliente;
    }

    function setDataCadastro($dataCasdastro) {
        $this->dataCadastro = $dataCasdastro;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

      function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    
    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    //-------------- CRUD-----------------------


    public function retCliente() {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");
        $tableCliente = $objConexao->selecionarDados("Select * from Cliente");

        return $tableCliente;
    }

    public function inserirCliente($objCliente) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");

        $dataCadastro = $objCliente->getDataCasdastro();
        $dataNascimento = $objCliente->getDataNascimento();
        $nome = $objCliente->getNome();
        $rg = $objCliente->getRg();
        $telefone = $objCliente->getTelefone();
        $email = $objCliente->getEmail();
        $endereco = $objCliente->getEndereco();
        $cidade = $objCliente->getCidade();
        $estado = $objCliente->getEstado();
        $pais = $objCliente->getPais();

        $objConexao->exercutarComandoSQL("INSERT INTO Cliente (dataCadastro,dataNascimento,nome,rg,telefone,email,endereco,cidade,estado,pais) VALUES ('$dataCadastro','$dataNascimento','$nome','$rg','$telefone','$email','$endereco','$cidade','$estado','$pais' )");

        return true;
    }

    public function editarCliente($objCliente) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");

        $codCliente = $objCliente->getCodCliente();
        $dataCadastro = $objCliente->getDataCasdastro();
        $dataNascimento = $objCliente->getDataNascimento();
        $nome = $objCliente->getNome();
        $rg = $objCliente->getRg();
        $telefone = $objCliente->getTelefone();
        $email = $objCliente->getEmail();
        $endereco = $objCliente->getEndereco();
        $cidade = $objCliente->getCidade();
        $estado = $objCliente->getEstado();
        $pais = $objCliente->getPais();

        $objConexao->exercutarComandoSQL("UPDATE Cliente SET dataCadastro ='$dataCadastro', dataNascimento ='$dataNascimento', nome ='$nome',rg ='$rg',telefone ='$telefone',email ='$email',endereco ='$endereco',cidade ='$cidade',estado ='$estado',pais ='$pais' WHERE codCliente = $codCliente");

        return true;
    }

    public function excluirCliente($objCliente) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdPetz");

        $codCliente = $objCliente->getCodCliente();


        $objConexao->exercutarComandoSQL("DELETE FROM Cliente WHERE codCliente = $codCliente");

        return true;
    }

    //-------------- OUTROS MÉTODOS -----------------------
}
