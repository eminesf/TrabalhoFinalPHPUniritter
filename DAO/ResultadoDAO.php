<?php


class ResultadoDAO
{
    public function insertResultado(Resultado $resultadoFinal){

        global $conexao;

        $sql = $conexao->prepare("INSERT INTO resultado (resultado, idPessoa_pessoa) VALUES(?,?)");
        $sql->bind_param("s", $resultado, $idPessoa_pessoa);

        $resultado = $resultadoFinal->getResultadoFinal();
        $idPessoa_pessoa = $resultadoFinal->getIdPessoaPessoa();

        $sql->execute();
    }

}