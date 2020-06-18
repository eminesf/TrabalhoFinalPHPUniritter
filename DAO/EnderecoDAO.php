<?php


class EnderecoDAO
{
    public function insertEndereco(Endereco $endereco){

        global $conexao;

        $sql = $conexao->prepare("INSERT INTO endereco (estado, cidade, bairro, rua, numero, complemento) VALUES(?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssis", $estado, $cidade, $bairro, $rua, $numero, $complemento);

        $estado = $endereco->getEstado();
        $cidade = $endereco->getCidade();
        $bairro = $endereco->getBairro();
        $rua = $endereco->getRua();
        $numero = $endereco->getNumero();
        $complemento = $endereco->getComplemento();

        $sql->execute();
    }

    public function retornoIdEndereco($nomeRua){
        global $conexao;

        $sql = $conexao->query("SELECT idEndereco FROM endereco WHERE rua='$nomeRua'");

        return $sql->fetch_array();
    }

}