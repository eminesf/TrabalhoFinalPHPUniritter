
<?php

if (isset($_POST['cadastrar'])) {

    // ADICIONANDO ESCOLA NO BD
    require_once 'conexao.php';
    require_once 'Class/Escola.php';
    require_once 'DAO/EscolaDAO.php';

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

    require_once 'Class/Endereco.php';
    require_once 'DAO/EnderecoDAO.php';

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

    require_once 'Class/Pessoa.php';
    require_once 'DAO/PessoaDAO.php';

    $pessoa = new Pessoa();

    $pessoa->setNome($_POST['nome']);
    $pessoa->setEmail($_POST['email']);
    $pessoa->setNascimento($_POST['dataNascimento']);
    $pessoa->setRg($_POST['rg']);
    $pessoa->setCelular($_POST['celular']);
    $pessoa->setTelResidencial($_POST['telResidencial']);
    $pessoa->setIdEscola($retornoIdEscola[0]);
    $pessoa->setIdEndereco($retornoIdEndereco[0]);

    $pessoaDAO = new PessoaDAO();

    $pessoaDAO->insertPessoa($pessoa);

    $rgID = $pessoa->getRg();

    $retornoIdPessoa = $pessoaDAO->returnIdPessoa($rgID);


    // ADICIONANDO RESULTADO NO BD

    require_once 'Class/Resultado.php';
    require_once 'DAO/ResultadoDAO.php';

    $totalR = $_POST['tipoR_um'] + $_POST['tipoR_dois'] + $_POST['tipoR_tres'] + $_POST['tipoR_quatro'] + $_POST['tipoR_cinco'] + $_POST['tipoR_seis'] + $_POST['tipoR_sete'] +
        $_POST['tipoR_oito'] + $_POST['tipoR_nove'] + $_POST['tipoR_dez'];
    $resultado_R = ($totalR / 30) * 100;

    // calculo porcentagem de I
    $totalI = $_POST['tipoI_um'] + $_POST['tipoI_dois'] + $_POST['tipoI_tres'] + $_POST['tipoI_quatro'] + $_POST['tipoI_cinco'] + $_POST['tipoI_seis'] + $_POST['tipoI_sete'] +
        $_POST['tipoI_oito'] + $_POST['tipoI_nove'] + $_POST['tipoI_dez'];
    $resultado_I = ($totalI / 30) * 100;

    // calculo porcentagem de A
    $totalA = $_POST['tipoA_um'] + $_POST['tipoA_dois'] + $_POST['tipoA_tres'] + $_POST['tipoA_quatro'] + $_POST['tipoA_cinco'] + $_POST['tipoA_seis'] + $_POST['tipoA_sete'] +
        $_POST['tipoA_oito'] + $_POST['tipoA_nove'] + $_POST['tipoA_dez'];
    $resultado_A = ($totalA / 30) * 100;

    // calculo porcentagem de S
    $totalS = $_POST['tipoS_um'] + $_POST['tipoS_dois'] + $_POST['tipoS_tres'] + $_POST['tipoS_quatro'] + $_POST['tipoS_cinco'] + $_POST['tipoS_seis'] + $_POST['tipoS_sete'] +
        $_POST['tipoS_oito'] + $_POST['tipoS_nove'] + $_POST['tipoS_dez'];
    $resultado_S = ($totalS / 30) * 100;

    // calculo porcentagem de E
    $totalE = $_POST['tipoE_um'] + $_POST['tipoE_dois'] + $_POST['tipoE_tres'] + $_POST['tipoE_quatro'] + $_POST['tipoE_cinco'] + $_POST['tipoE_seis'] + $_POST['tipoE_sete'] +
        $_POST['tipoE_oito'] + $_POST['tipoE_nove'] + $_POST['tipoE_dez'];
    $resultado_E = ($totalE / 30) * 100;

    // calculo porcentagem de C
    $totalC = $_POST['tipoC_um'] + $_POST['tipoC_dois'] + $_POST['tipoC_tres'] + $_POST['tipoC_quatro'] + $_POST['tipoC_cinco'] + $_POST['tipoC_seis'] + $_POST['tipoC_sete'] +
        $_POST['tipoC_oito'] + $_POST['tipoC_nove'] + $_POST['tipoC_dez'];
    $resultado_C = ($totalC / 30) * 100;

    $arrayResultados = [$resultado_R, $resultado_I, $resultado_A, $resultado_S, $resultado_E, $resultado_C];

    $maior = 0;

    for($i = 0; $i < sizeof($arrayResultados); $i++){
        if($arrayResultados[$i] > $maior){
            $maior = $arrayResultados[$i];
        }
    }
   if($maior == $resultado_R){
        echo "<script> alert('REALÍSTICO - As pessoas com esse perfil de personalidade são práticas e gostam de agir. ' +
 'São vistas como ajustadas e simples. São persistentes, sensatas e na maioria das vezes sinceras, diretas ao modo de ' +
  'se relacionar. Gostam de dizer o que pensam, sem muitos rodeios. Sentem apreço por todas as coisas.') </script>";
        $perfil = "REALÍSTICO";
        echo "<script> window.location.href='index.php'</script>";
    }
    elseif ($maior == $resultado_I){
        echo "<script> alert('INVESTIGATIVO - As pessoas desse tipo, gostam de observar e entender tudo o que está ao ' +
 'seu redor, buscando explicações para o modo como as coisas acontecem. São pessoas muito críticas e independentes em ' +
  'suas ideias. Em geral, são metódicas, bem organizadas, racionais e reservadas em alguns casos. Suas emoções são ' +
   'mais contidas. Gostam de adquirir conhecimento e se alimentam do saber, mostrando muita curiosidade para observar, ' +
    'experimentar, estimar resultados, elaborar teorias e modelos.') </script>";
        $perfil = "INVESTIGATIVO";
        echo "<script> window.location.href='index.php'</script>";
    }
    elseif ($maior == $resultado_A){
        echo "<script> alert('ARTÍSTICO - Gostam de executar as atividades artística, e não somente de apreciá-las. ' +
 'Não gostam de rotina nem de atividades controladas. Preferem realizar tarefas nas quais possam mostrar seus talentos ' +
  'criativos e expressivos. Compreender e expressar as emoções é fundamental. São pessoas originais e inovadoras, ' +
   'expressivas, que gostam de chamar a atenção. São também muito emotivas e intuitivas. Podem ser impulsivos, pois ' +
    'gostam de novidades, espontaneidade e principalmente de liberdade.') </script>";
        $perfil = "ARTÍSTICO";
        echo "<script> window.location.href='index.php'</script>";
    }
    elseif ($maior == $resultado_S){
        echo "<script> alert('SOCIAL - Gostam e buscam interações com os outros, seja para ajudar, informar, treinar, ' +
 'desenvolver, curar, esclarecer, ensinar, ouvir ou cuidar. Mostram bastante interesse pelo bem estar dos outros, pelo ' +
  'trabalho social, humanitário e religioso, e pela boa e justa organização da sociedade. São pessoas atenciosas, ' +
   'compreensivas com os problemas dos outros, simpáticas e colaborativas. Gostam de se dedicar ao outro e também se ' +
    'mostram dominantes. São pessoas em geral responsáveis, idealistas, gentis e de fácil relacionamento.') </script>";
        $perfil = "SOCIAL";
        echo "<script> window.location.href='index.php'</script>";
    }
    elseif ($maior == $resultado_E){
        echo "<script> alert('EMPREENDEDOR - Os empreendedores gostam de manipular, coordenar e supervisionar as ' +
 'atividades dos outros, seja para alcançar seus próprios objetivos, seja para atingir as metas da empresa onde ' +
  'trabalham, ou ainda para conseguir resultados produtivos e obter lucro. São pessoas ativas, que gostam de ' +
   'aventuras, riscos e dos bons prazeres da vida material. Estão sempre buscando novidades e se mostram autoconfiantes.' +
    ' Geralmente são otimistas, sociáveis, líderes, competitivos.') </script>";
        $perfil = "EMPREENDEDOR";
        echo "<script> window.location.href='index.php'</script>";
    }
    elseif ($maior == $resultado_C){
        echo "<script> alert('CONVENCIONAL - Apreciam o trabalho concreto, bem organizado, rotineiro e com regras ' +
 'claras. Não gostam de muita proximidade e intimidade, nem sentem muita necessidade de contato afetivo, ' +
  'especialmente no trabalho, preferindo ás vezes o isolamento. Mostram preferência por atividades de ' +
   'manipulação de dados e fatos, como organização de arquivos e registros. Também gostam de lidar com ' +
    'números e organização, sempre de acordo com planos pré estabelecidos.') </script>";
        $perfil = "CONVENCIONAL";
        echo "<script> window.location.href='index.php'</script>";
    }

    $resultado = new Resultado();

    $resultado->setResultadoFinal($perfil);
    $resultado->setIdPessoaPessoa($retornoIdPessoa[0]);

    $resultadoDAO = new ResultadoDAO();

    $resultadoDAO->insertResultado($resultado);



}