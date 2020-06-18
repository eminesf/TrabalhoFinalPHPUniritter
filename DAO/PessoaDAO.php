<?php


class PessoaDAO
{
    public function insertPessoa(Pessoa $pessoa){

        global $conexao;

        $sql = $conexao->prepare("INSERT INTO pessoa (nome, email, nascimento, rg, celular, telResidencial, idEscola_escola, idEndereco_endereco) VALUES(?,?,?,?,?,?,?,?)" );
        $sql->bind_param("ssssssii", $nome, $email, $nascimento, $rg, $cel, $telRes, $idEscola, $idEnd);

        $nome = $pessoa->getNome();
        $email = $pessoa->getEmail();
        $nascimento = $pessoa->getNascimento();
        $rg = $pessoa->getRg();
        $cel = $pessoa->getCelular();
        $telRes = $pessoa->getTelResidencial();
        $idEscola = $pessoa->getIdEscola();
        $idEnd = $pessoa->getIdEndereco();

        $sql->execute();
    }

    public function returnIdPessoa($rgID){
        global $conexao;

        $sql = $conexao->query("SELECT idPessoa FROM pessoa WHERE rg='$rgID'");

        return $sql->fetch_array();
    }
}