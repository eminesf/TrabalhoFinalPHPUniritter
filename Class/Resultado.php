<?php


class Resultado
{
    private $resultadoFinal;
    private $idPessoa_pessoa;


    public function getResultadoFinal()
    {
        return $this->resultadoFinal;
    }

    public function setResultadoFinal($resultadoFinal)
    {
        $this->resultadoFinal = $resultadoFinal;
    }

    public function getIdPessoaPessoa()
    {
        return $this->idPessoa_pessoa;
    }

    public function setIdPessoaPessoa($idPessoa_pessoa)
    {
        $this->idPessoa_pessoa = $idPessoa_pessoa;
    }

}