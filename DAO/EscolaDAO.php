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

        $sql = $conexao->query("SELECT id_escola FROM escola WHERE escola='$nomeEscola'");

       // var_dump($sql);
        return $sql->fetch_array();

    }
}