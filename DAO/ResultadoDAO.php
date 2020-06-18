<?php


class ResultadoDAO
{
    public function insertResultado(Resultado $resultadoFinal){

        global $conexao;

        $sql = $conexao->prepare("INSERT INTO resultado (resultado) VALUES(?)");
        $sql->bind_param("s", $resultado);

        $resultado = $resultadoFinal->getResultadoFinal();

        $sql->execute();

    }

}