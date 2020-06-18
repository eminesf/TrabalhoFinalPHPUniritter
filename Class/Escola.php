<?php


class Escola
{
    private $idEscola;
    private $nomeEscola;
    private $bairoEscola;
    private $anoLetivo;
    private $turma;
    private $perfilEscola;

    public function getIdEscola()
    {
        return $this->idEscola;
    }

    public function setIdEscola($idEscola)
    {
        $this->idEscola = $idEscola;
    }

    public function getNomeEscola()
    {
        return $this->nomeEscola;
    }

    public function setNomeEscola($nomeEscola)
    {
        $this->nomeEscola = $nomeEscola;
    }

    public function getBairoEscola()
    {
        return $this->bairoEscola;
    }

    public function setBairoEscola($bairoEscola)
    {
        $this->bairoEscola = $bairoEscola;
    }

    public function getAnoLetivo()
    {
        return $this->anoLetivo;
    }

    public function setAnoLetivo($anoLetivo)
    {
        $this->anoLetivo = $anoLetivo;
    }

    public function getTurma()
    {
        return $this->turma;
    }

    public function setTurma($turma)
    {
        $this->turma = $turma;
    }

    public function getPerfilEscola()
    {
        return $this->perfilEscola;
    }

    public function setPerfilEscola($perfilEscola)
    {
        $this->perfilEscola = $perfilEscola;
    }

}