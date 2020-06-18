<?php


class Pessoa
{
    private $idPessoa;
    private $nome;
    private $email;
    private $nascimento;
    private $rg;
    private $celular;
    private $telResidencial;
    private $idEscola;
    private $idEndereco;


    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function getTelResidencial()
    {
        return $this->telResidencial;
    }

    public function setTelResidencial($telResidencial)
    {
        $this->telResidencial = $telResidencial;
    }

    public function getIdEscola()
    {
        return $this->idEscola;
    }

    public function setIdEscola($idEscola)
    {
        $this->idEscola = $idEscola;
    }

    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    public function setIdEndereco($idEndereco)
    {
        $this->idEndereco = $idEndereco;
    }

}