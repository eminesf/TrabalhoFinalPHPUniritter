<?php


class PessoaDAO
{
    public function insertPessoa(Pessoa $pessoa){

        global $conexao;

        $sql = $conexao->prepare("INSERT INTO pessoa (nome, email, nascimento, rg, celular, telResidencial, idEscola_escola, idEndereco_endereco) VALUES(?,?,?,?,?,?,?,?)");
        $sql->bind_param("sssiii", $nome, $email, $nascimento, $rg, $celular, $telResidencial, $idEscola_escola, $idEndereco_endereco);

        $nome = $pessoa->getNome();
        $email = $pessoa->getEmail();
        $nascimento = $pessoa->getNascimento();
        $rg = $pessoa->getRg();
        $celular = $pessoa->getCelular();
        $telResidencial = $pessoa->getTelResidencial();
        $idEscola_escola = $pessoa->getIdEscola();
        $idEndereco_endereco = $pessoa->getIdEndereco();

        $sql->execute();

    }

    public function returnIdPessoa($rg){
        global $conexao;

        $sql = $conexao->query("SELECT idPessoa FROM pessoa WHERE rg='$rg'");

        return $sql->fetch_array();
    }
}