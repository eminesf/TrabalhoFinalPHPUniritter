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
                <input id="inputs" class="form-control" type="text" name="nome" required="required">
            </div>
            <div class="form-group">
                <span>Email*</span>
                <input id="inputs" class="form-control" type="email" name="email" required="required">
            </div>
            <div class="form-group">
                <span>Data de nascimento*</span>
                <input id="inputs" class="form-control" type="text" name="dataNascimento" required="required">
            </div>
            <div class="form-group">
                <span>identidade (RG)*</span>
                <input id="inputs" class="form-control" type="text" name="rg" required="required">
            </div>
            <div class="form-group">
                <span>Celular*</span>
                <input id="inputs" class="form-control" type="text" name="celular" required="required">
            </div>
            <div class="form-group">
                <span>Telefone Residencial*</span>
                <input id="inputs" class="form-control" type="text" name="telResidencial" required="required">
            </div>
            <!-- Dados Endereço -->
            <div class="form-group">
                <span>Endereço*</span>
                <input id="inputs" class="form-control" type="text" name="rua" required="required">
            </div>
            <div class="form-group">
                <span>Número*</span>
                <input id="inputs" class="form-control" type="text" name="numero" required="required">
            </div>
            <div class="form-group">
                <span>Complemento</span>
                <input id="inputs" class="form-control" type="text" name="complemento" value="complemento" required="required">
            </div>
            <div class="form-group">
                <span>Bairro*</span>
                <input id="inputs" class="form-control" type="text" name="bairro" required="required">
            </div>
            <div class="form-group">
                <span>Estado*</span>
                <select id="inputs" class="form-control" type="text" name="estado" required="required">
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
                <input id="inputs" class="form-control" type="text" name="cidade" required="required">
            </div>

            <!-- Dados escola -->
            <div class="form-group">
                <span>Nome da sua escola*</span>
                <input id="inputs" class="form-control" type="text" name="escola" required="required">
            </div>
            <div class="form-group">
                <span>Bairro da Escola*</span>
                <input id="inputs" class="form-control" type="text" name="bairroEscola" required="required">
            </div>
            <div class="form-group">
                <span>Ano letivo*</span>
                <select id="inputs" class="form-control" type="text" name="anoLetivo" required="required">
                    <option value>Selecione</option>
                    <option value="Primeiro ano">Primeiro ano</option>
                    <option value="Segundo ano">Segundo ano</option>
                    <option value="Terceiro ano">Terceiro ano</option>
                    <option value="Outro"> Outro</option>
                </select>
            </div>
            <div class="form-group">
                <span>Turma*</span>
                <input id="inputs" class="form-control" type="text" name="turma" required="required">
            </div>
            <div class="form-group">
                <span>Perfil Escola*</span>
                <select id="inputs" class="form-control" type="text" name="perfilEscola" required="required">
                    <option value>Selecione</option>
                    <option value="Publica">Pública</option>
                    <option value="Particular">Particular</option>
                </select>
            </div>

            <!-- Perfil tipo R -->
            <div class="form-group">
                <span>Sou bastante autêntico e digo aquilo que penso.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoR_um" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?>
                </select>
            </div>

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
            </div>

            <!--TIPO I -->
            <div class="form-group">
                <span>Gosto de observar, analisar e entender o modo como as coisas, a natureza ou as pessoas funcionam.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_um" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Não sou muito impulsivo, penso antes de agir.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_dois" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Áreas como Matemática e Ciências me atraem. Gosto de estudar um assunto a fundo.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_tres" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Tenho facilidade para aprender*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_quatro">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/ required="required">
                </select>
            </div>
            <div class="form-group">
                <span>Sou racional para tomar uma decisão ou para decidir o melhor caminho a seguir.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_cinco" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou muito organizado e detalhista.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_seis" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou capaz de dar respostas precisas sobre datas, valores e descrever bem determinada situação do passado.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_sete" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Tenho um grande senso crítico. As coisas sempre podem ser melhoradas.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_oito" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de tomar minhas próprias decisões, mesmo que sejam diferentes do pensamento da maioria.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_nove" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Tenho boa habilidade lógica ou matemática.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoI_dez" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>

            <!-- TIPO A-->
            <div class="form-group">
                <span>É difícil para mim aceitar regras, limites e algo que me é imposto.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_um" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Para mim, é fácil viver em um ambiente desorganizado e fazer as coisas sem uma lógica.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_dois" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou muito sensível. Acredito que possamos construir um mundo melhor.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_tres" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou uma pessoa idealista. Acredito que possamos construir um mundo melhor.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_quatro" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de criar, inventar, idealizar e fantasiar.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_cinco" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de causar impacto, provocando, entretendo, seduzindo, encantando as pessoas.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_seis" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de descobrir novas possibilidades para as coisas e situações da vida.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_sete" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Muitas vezes, não penso muito antes de tomar uma decisão, nem meço as consequências.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_oito" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de me expressar, de representar ou de me mostrar em público.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_nove" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Responsabilizo-me por minhas atitudes e decisões.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoA_dez" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>

            <!-- TIPO S -->
            <div class="form-group">
                <span>Gosto de liderar, de organizar ou de mobilizar um grupo em torno de uma causa ou ação.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_um" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de ajudar e colaborar com os outros. Sou leal e benevolente.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_dois" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Uso a emoção e a sensibilidade para tomar decisões.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_tres" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Em geral, sou uma pessoa agradável e fácil de lidar.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_quatro" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou idealista e quero mais da vida.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_cinco" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Questões éticas, de justiça ou bem-estar comum são importantes para mim.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_seis" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou responsável. Podem contar comigo porque sempre correspondo ao esperado.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_sete" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Costumo me dedicar a pessoas ou a causas, “vestindo a camisa” de uma entidade, de um grupo ou de um clube que eu acredite.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_oito" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>No geral, me relaciono bem com os outros. Tenho facilidade para dialogar.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_nove" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de ajudar, ensinar, curar e, de alguma forma, quero ser importante para os outros.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoS_dez" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <!-- TIPO E -->
            <div class="form-group">
                <span>Sou firme e confiante em minhas decisões e não preciso de palpites.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_um" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Muitas vezes consigo convencer as pessoas sobre determinado ponto de vista.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_dois" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou uma pessoa motivada, incentivada, otimista.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_tres" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Falo muito. Não desisto facilmente de uma argumentação.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_quatro" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Dou muito valor aos bens materiais. Gosto de comprar e, às vezes, até de demonstrar aos outros minhas conquistas, meus bens materiais, minha sabedoria e meus talentos.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_cinco" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Tomo decisões rapidamente. Ajo sem refletir muito. Chego a ser impulsivo.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_seis" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de estar no meio das pessoas, especialmente para mostrar a elas o modo como penso.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_sete" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto muito de aventuras, de me arriscar e de desafios.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_oito" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Estou sempre procurando novas oportunidades, novos caminhos a seguir*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_nove" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Prefiro ser o dono de um negócio do que trabalhar para alguém.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoE_dez" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>

            <!-- TIPO C-->
            <div class="form-group">
                <span>Aceito bem as regras e o contexto no qual vivo. Gosto de limites claros.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_um" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou introvertido, me resguardo e não me exponho muito.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_dois" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Cuido de minhas coisas e gosto de conservá-las.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_tres" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou bem calmo e tenho bom equilíbrio emocional.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_quatro" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Prefiro ter um plano de ação, uma rotina definida de trabalho.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_cinco" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou um tipo de pessoa estável, confiável, adequada à realidade.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_seis" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Respeito a ética, guardo segredos, cumpro com o combinado.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_sete" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Sou muito organizado e detalhista nas coisas. Eficácia é muito importante para mim.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_oito" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Eu vou até o fim em meus objetivos. Não desisto até atingi-los.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_nove" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>
            <div class="form-group">
                <span>Gosto de satisfazer os outros em relação àquilo que me pedem.*</span>
                <select id="inputs" class="form-control" type="text" name="tipoC_dez" required="required">
                    <?php require '../RespostasFormulario/RespostasTipoR.php' ?><br/>
                </select>
            </div>

            <input id="enviar" type="submit" class="form-control" name="cadastrar"
                   style="background-color: seagreen; border: 0px; color: white; cursor: pointer;">


        </form>
    </div>
</div>
<footer class="text-center">
    <span class="text-center">Feito por Emiliano Fuchs</span>
</footer>
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
            var_dump($maior);
            var_dump($arrayResultados[$i]);
        }
    }
    if($maior == $resultado_R){
        echo "<script> alert('REALÍSTICO - As pessoas com esse perfil de personalidade são práticas e gostam de agir. ' +
 'São vistas como ajustadas e simples. São persistentes, sensatas e na maioria das vezes sinceras, diretas ao modo de ' +
  'se relacionar. Gostam de dizer o que pensam, sem muitos rodeios. Sentem apreço por todas as coisas.') </script>";
        $perfil = "REALÍSTICO";
        echo "<script> window.location.href='Formulario.php'</script>";
    }
    elseif ($maior == $resultado_I){
        echo "<script> alert('INVESTIGATIVO - As pessoas desse tipo, gostam de observar e entender tudo o que está ao ' +
 'seu redor, buscando explicações para o modo como as coisas acontecem. São pessoas muito críticas e independentes em ' +
  'suas ideias. Em geral, são metódicas, bem organizadas, racionais e reservadas em alguns casos. Suas emoções são ' +
   'mais contidas. Gostam de adquirir conhecimento e se alimentam do saber, mostrando muita curiosidade para observar, ' +
    'experimentar, estimar resultados, elaborar teorias e modelos.') </script>";
        $perfil = "INVESTIGATIVO";
        echo "<script> window.location.href='Formulario.php'</script>";
    }
    elseif ($maior == $resultado_A){
        echo "<script> alert('ARTÍSTICO - Gostam de executar as atividades artística, e não somente de apreciá-las. ' +
 'Não gostam de rotina nem de atividades controladas. Preferem realizar tarefas nas quais possam mostrar seus talentos ' +
  'criativos e expressivos. Compreender e expressar as emoções é fundamental. São pessoas originais e inovadoras, ' +
   'expressivas, que gostam de chamar a atenção. São também muito emotivas e intuitivas. Podem ser impulsivos, pois ' +
    'gostam de novidades, espontaneidade e principalmente de liberdade.') </script>";
        $perfil = "ARTÍSTICO";
        echo "<script> window.location.href='Formulario.php'</script>";
    }
    elseif ($maior == $resultado_S){
        echo "<script> alert('SOCIAL - Gostam e buscam interações com os outros, seja para ajudar, informar, treinar, ' +
 'desenvolver, curar, esclarecer, ensinar, ouvir ou cuidar. Mostram bastante interesse pelo bem estar dos outros, pelo ' +
  'trabalho social, humanitário e religioso, e pela boa e justa organização da sociedade. São pessoas atenciosas, ' +
   'compreensivas com os problemas dos outros, simpáticas e colaborativas. Gostam de se dedicar ao outro e também se ' +
    'mostram dominantes. São pessoas em geral responsáveis, idealistas, gentis e de fácil relacionamento.') </script>";
        $perfil = "SOCIAL";
        echo "<script> window.location.href='Formulario.php'</script>";
    }
    elseif ($maior == $resultado_E){
        echo "<script> alert('EMPREENDEDOR - Os empreendedores gostam de manipular, coordenar e supervisionar as ' +
 'atividades dos outros, seja para alcançar seus próprios objetivos, seja para atingir as metas da empresa onde ' +
  'trabalham, ou ainda para conseguir resultados produtivos e obter lucro. São pessoas ativas, que gostam de ' +
   'aventuras, riscos e dos bons prazeres da vida material. Estão sempre buscando novidades e se mostram autoconfiantes.' +
    ' Geralmente são otimistas, sociáveis, líderes, competitivos.') </script>";
        $perfil = "EMPREENDEDOR";
        echo "<script> window.location.href='Formulario.php'</script>";
    }
    elseif ($maior == $resultado_C){
        echo "<script> alert('CONVENCIONAL - Apreciam o trabalho concreto, bem organizado, rotineiro e com regras ' +
 'claras. Não gostam de muita proximidade e intimidade, nem sentem muita necessidade de contato afetivo, ' +
  'especialmente no trabalho, preferindo ás vezes o isolamento. Mostram preferência por atividades de ' +
   'manipulação de dados e fatos, como organização de arquivos e registros. Também gostam de lidar com ' +
    'números e organização, sempre de acordo com planos pré estabelecidos.') </script>";
        $perfil = "CONVENCIONAL";
        echo "<script> window.location.href='Formulario.php'</script>";
    }

    $resultado = new Resultado();

    $resultado->setResultadoFinal($perfil);
    $resultado->setIdPessoaPessoa($retornoIdPessoa);

    $resultadoDAO = new ResultadoDAO();

    $resultadoDAO->insertResultado($resultado);



}