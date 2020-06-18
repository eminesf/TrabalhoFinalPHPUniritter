<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../CSS/Estilo.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Emiliano Silveira - trabalho final web</title>
</head>
<body>
<div id="container">
    <div id="inter" class="text-center">
        <img src="../Imagens/unnamed.png" alt="">
    </div>
    <div id="formulario">
        <form id="form" method="post" action="Formulario.php">
            <!-- Dados Pessoa -->
            <div class="form-group">
                <span>Nome*</span>
                <input id="inputs" class="form-control" type="text" name="nome" >
            </div>
            <div class="form-group">
                <span>Email*</span>
                <input id="inputs" class="form-control" type="email" name="email">
            </div>
            <div class="form-group">
                <span>Data de nascimento*</span>
                <input id="inputs" class="form-control" type="text" name="dataNascimento">
            </div>
            <div class="form-group">
                <span>identidade (RG)*</span>
                <input id="inputs" class="form-control" type="text" name="rg" >
            </div>
            <div class="form-group">
                <span>Celular*</span>
                <input id="inputs" class="form-control" type="text" name="celular" >
            </div>
            <div class="form-group">
                <span>Telefone Residencial*</span>
                <input id="inputs" class="form-control" type="text" name="telResidencial" >
            </div>
            <!-- Dados Endereço -->
            <div class="form-group">
                <span>Endereço*</span>
                <input id="inputs" class="form-control" type="text" name="rua" >
            </div>
            <div class="form-group">
                <span>Número*</span>
                <input id="inputs" class="form-control" type="text" name="numero" >
            </div>
            <div class="form-group">
                <span>Complemento</span>
                <input id="inputs" class="form-control" type="text" name="complemento" value="complemento">
            </div>
            <div class="form-group">
                <span>Bairro*</span>
                <input id="inputs" class="form-control" type="text" name="bairro" >
            </div>
            <div class="form-group">
                <span>Estado*</span>
                <select id="inputs" class="form-control" type="text" name="estado" >
                    <option value>Selecione</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
            </div>
            <div class="form-group">
                <span>Cidade*</span>
                <input id="inputs" class="form-control" type="text" name="cidade" >
            </div>

            <!-- Dados escola -->
            <div class="form-group">
                <span>Nome da sua escola*</span>
                <input id="inputs" class="form-control" type="text" name="escola" >
            </div>
            <div class="form-group">
                <span>Bairro da Escola*</span>
                <input id="inputs" class="form-control" type="text" name="bairroEscola" >
            </div>
            <div class="form-group">
                <span>Ano letivo*</span>
                <select id="inputs" class="form-control" type="text" name="anoLetivo" >
                    <option value>Selecione</option>
                    <option value="Primeiro ano">Primeiro ano</option>
                    <option value="Segundo ano">Segundo ano</option>
                    <option value="Terceiro ano">Terceiro ano</option>
                    <option value="Outro"> Outro</option>
                </select>
            </div>
            <div class="form-group">
                <span>Turma*</span>
                <input id="inputs" class="form-control" type="text" name="turma" >
            </div>
            <div class="form-group">
                <span>Perfil Escola*</span>
                <select id="inputs" class="form-control" type="text" name="perfilEscola" >
                    <option value>Selecione</option>
                    <option value="Publica">Pública</option>
                    <option value="Particular">Particular</option>
                </select>
            </div>
            
            <div class="form-group">
                <span>Sou bastante autêntico e digo aquilo que penso.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_um" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div>
                <span>

                </span>
            </div>
            <!-- Perfil tipo R

            <div class="form-group">
                <span>Sou introspectivo, penso muito antes de me expor.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_dois" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div class="form-group">
                <span>Questões intelectuais profundas não me interessam.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_tres" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div class="form-group">
                <span>Sou persistente e não desisto até atingir meus objetivos.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_quatro" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div class="form-group">
                <span>As pessoas podem contar comigo. Sou bastante estável em minhas ações.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_cinco" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de trabalhar com materiais, com as mãos, objetos e instrumentos.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_seis" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div class="form-group">
                <span>Consigo aguentar por um bom tempo uma atividade física ou intelectual.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_sete" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div class="form-group">
                <span>Dou muito valor para o dinheiro.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_oito" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div class="form-group">
                <span>Sei utilizar instrumentos e aparelhos eletrônicos.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_nove" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>
            <div class="form-group">
                <span>Aceito bem regras, limites, ordens e o contexto no qual vivo.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_dez" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div> -->

            <input id="enviar" type="submit" class="form-control" name="cadastrar"
                   style="background-color: seagreen; border: 0px; color: white; cursor: pointer;">


        </form>
    </div>
</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>

<?php

if (isset($_POST['cadastrar'])) {

    // ADICIONANDO ESCOLA NO BD
    require_once '../conexao.php';
    require_once '../Class/Escola.php';
    require_once '../DAO/EscolaDAO.php';

    $escola = new Escola();

    $escola->setNomeEscola($_POST['escola']);
    $escola->setBairoEscola($_POST['bairroEscola']);
    $escola->setAnoLetivo($_POST['anoLetivo']);
    $escola->setTurma($_POST['turma']);
    $escola->setPerfilEscola($_POST['perfilEscola']);

    $nomeEscola = $escola->getNomeEscola();

    $escolaDAO = new EscolaDAO();
    $escolaDAO->insertEscola($escola);

    $retornoIdEscola = $escolaDAO->retornoIdEscola($nomeEscola);


    //  ADICIONANDO ENDEREÇO NO BD

    require_once '../Class/Endereco.php';
    require_once '../DAO/EnderecoDAO.php';

    $endereco = new Endereco();

    $endereco->setRua($_POST['rua']);
    $endereco->setNumero($_POST['numero']);
    $endereco->setComplemento($_POST['complemento']);
    $endereco->setBairro($_POST['bairro']);
    $endereco->setEstado($_POST['estado']);
    $endereco->setCidade($_POST['cidade']);

    $enderecoDAO = new EnderecoDAO();
    $enderecoDAO->insertEndereco($endereco);

    $nomeRua = $endereco->getRua();
    $retornoIdEndereco = $enderecoDAO->retornoIdEndereco($nomeRua);


    // ADICIONANDO PESSOA NO BD

    require_once '../Class/Pessoa.php';
    require_once '../DAO/PessoaDAO.php';

    $pessoa = new Pessoa();

    $pessoa->setNome($_POST['nome']);
    $pessoa->setEmail($_POST['email']);
    $pessoa->setNascimento($_POST['dataNascimento']);
    $pessoa->setRg($_POST['rg']);
    $pessoa->setCelular($_POST['celular']);
    $pessoa->setTelResidencial($_POST['telResidencial']);
    $pessoa->setIdEscola($retornoIdEscola);
    $pessoa->setIdEndereco($retornoIdEndereco);

    $pessoaDAO = new PessoaDAO();

    $pessoaDAO->insertPessoa($pessoa);

    $rgID = $pessoa->getRg();

    $retornoIdPessoa = $pessoaDAO->returnIdPessoa($rgID);


    // ADICIONANDO RESULTADO NO BD

    require_once '../Class/Resultado.php';
    require_once '../DAO/ResultadoDAO.php';

    $resultado = new Resultado();

    $resultado->setResultadoFinal($_POST['tipoR_um']);
    $resultado->setIdPessoaPessoa($retornoIdPessoa);

    $resultadoDAO = new ResultadoDAO();

    $resultadoDAO->insertResultado($resultado);



}