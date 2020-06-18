
<div id="formulario">
    <form id="form" method="post" action="index.php">
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