<?php


class Escola
{
    private $nomeEscola;
    private $bairoEscola;
    private $anoLetivo;
    private $turma;
    private $perfilEscola;
    private $idEscola;

    /**
     * @return mixed
     */
    public function getIdEscola()
    {
        return $this->idEscola;
    }

    /**
     * @param mixed $idEscola
     */
    public function setIdEscola($idEscola)
    {
        $this->idEscola = $idEscola;
    }

    /**
     * @return mixed
     */
    public function getNomeEscola()
    {
        return $this->nomeEscola;
    }

    /**
     * @param mixed $nomeEscola
     */
    public function setNomeEscola($nomeEscola)
    {
        $this->nomeEscola = $nomeEscola;
    }

    /**
     * @return mixed
     */
    public function getBairoEscola()
    {
        return $this->bairoEscola;
    }

    /**
     * @param mixed $bairoEscola
     */
    public function setBairoEscola($bairoEscola)
    {
        $this->bairoEscola = $bairoEscola;
    }

    /**
     * @return mixed
     */
    public function getAnoLetivo()
    {
        return $this->anoLetivo;
    }

    /**
     * @param mixed $anoLetivo
     */
    public function setAnoLetivo($anoLetivo)
    {
        $this->anoLetivo = $anoLetivo;
    }

    /**
     * @return mixed
     */
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * @param mixed $turma
     */
    public function setTurma($turma)
    {
        $this->turma = $turma;
    }

    /**
     * @return mixed
     */
    public function getPerfilEscola()
    {
        return $this->perfilEscola;
    }

    /**
     * @param mixed $perfilEscola
     */
    public function setPerfilEscola($perfilEscola)
    {
        $this->perfilEscola = $perfilEscola;
    }



}