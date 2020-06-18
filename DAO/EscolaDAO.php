<?php


class EscolaDAO
{
    public function insertEscola(Escola $escola){

        global $conexao;

        $sql = $conexao->prepare("INSERT INTO escola (nomeEscola, bairroEscola, anoLetivo, turma, perfilEscola) VALUES(?,?,?,?,?)" );
        $sql->bind_param("sssss", $nomeEscola, $bairroEscola, $anoLetivo, $turma, $perfilEscola);

        $nomeEscola = $escola->getNomeEscola();
        $bairroEscola = $escola->getBairoEscola();
        $anoLetivo = $escola->getAnoLetivo();
        $turma = $escola->getTurma();
        $perfilEscola = $escola->getPerfilEscola();

        $sql->execute();
    }

    public function retornoIdEscola($nomeEscola){
        global $conexao;

        $sql = $conexao->query("SELECT idEscola FROM escola WHERE nomeEscola='$nomeEscola'");

        return $sql->fetch_array();
    }
}