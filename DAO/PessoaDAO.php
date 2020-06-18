<?php


class PessoaDAO
{
    public function insertPessoa(Pessoa $pessoa){

        global $conexao;

        $escola = new Escola();

        $sql = $conexao->prepare("INSERT INTO pessoa (nome, email, nascimento, rg, celular, telResidencial) VALUES(?,?,?,?,?,?)");
        $sql->bind_param("sssiii", $nome, $email, $nascimento, $rg, $celular, $telResidencial);

        $nome = $pessoa->getNome();
        $email = $pessoa->getEmail();
        $nascimento = $pessoa->getNascimento();
        $rg = $pessoa->getRg();
        $celular = $pessoa->getCelular();
        $telResidencial = $pessoa->getTelResidencial();

        $sql->execute();

    }

}