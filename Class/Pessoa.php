<?php


class Pessoa
{
    private $nome;
    private $email;
    private $nascimento;
    private $rg;
    private $celular;
    private $telResidencial;
    private $idEscola_escola;


    public function getIdEscolaEscola()
    {
        return $this->idEscola_escola;
    }

    public function setIdEscolaEscola($idEscola_escola)
    {
        $this->idEscola_escola = $idEscola_escola;
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



}