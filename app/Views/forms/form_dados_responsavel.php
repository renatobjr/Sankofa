<!-- Form and Validation service -->
<?php 
  $validation = \Config\Services::validation(); 
  $err = 'O campo é obrigatório.'
?>

<div class="card-action">
    <span>Dados do Responsável</span>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">people</i>
            <label for="nome_responsavel">Nome do responsável</label>
            <input 
                type="text" 
                name="nome_responsavel" 
                id="nome_responsavel" 
                class="validate <?php echo $validation->getError('nome_responsavel') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['nome_responsavel'] : set_value('nome_responsavel'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">people</i>
            <label for="nome_mae">Nome da Mãe</label>
            <input 
                type="text" 
                name="nome_mae" 
                id="nome_mae" 
                class="validate <?php echo $validation->getError('nome_mae') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['nome_mae'] : set_value('nome_mae'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">assignment</i>
            <label for="nis">NIS</label>
            <input 
                type="text" 
                name="nis" 
                id="nis" 
                class="nis validate <?php echo $validation->getError('nis') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['nis'] : set_value('nis'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">assignment</i>
            <label for="cpf_responsavel">CPF responsável</label>
            <input 
                type="text" 
                name="cpf_responsavel" 
                id="cpf_responsavel" 
                class="cpf validate <?php echo $validation->getError('cpf_responsavel') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['cpf_responsavel'] : set_value('cpf_responsavel'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div> 
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">assignment</i>
            <label for="identidade_responsavel">RG responsável</label>
            <input 
                type="text" 
                name="identidade_responsavel" 
                id="identidade_responsavel" 
                class="validate <?php echo $validation->getError('identidade_responsavel') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['identidade_responsavel'] : set_value('identidade_responsavel'); ?>">
                <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">assignment</i>
            <label for="orgao_emissor_responsavel">Órgão Emissor</label>
            <input 
                type="text" 
                name="orgao_emissor_responsavel" 
                id="orgao_emissor_responsavel" 
                class="validate <?php echo $validation->getError('orgao_emissor_responsavel') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['orgao_emissor_responsavel'] : set_value('orgao_emissor_responsavel'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">domain</i>
            <label for="cep">CEP</label>
            <input 
                type="text" 
                name="cep" 
                id="cep" 
                class="cep validate <?php echo $validation->getError('cep') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['cep'] : set_value('cep'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">domain</i>
            <label for="endereco">Endereço</label>
            <input 
                type="text" 
                name="endereco" 
                id="endereco" 
                class="validate <?php echo $validation->getError('endereco') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['endereco'] : set_value('endereco'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">domain</i>
            <label for="numero">Número</label>
            <input 
                type="text" 
                name="numero" 
                id="numero" 
                class="validate <?php echo $validation->getError('numero') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['numero'] : set_value('numero'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">domain</i>
            <label for="bairro">Bairro</label>
            <input 
                type="text" 
                name="bairro" 
                id="bairro"
                class="validate <?php echo $validation->getError('bairro') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['bairro'] : set_value('bairro'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">local_phone</i>
            <label for="telefone_contato">Telefone para contato</label>
            <input 
                type="text" 
                name="telefone_contato" 
                id="telefone_contato" 
                class="movel validate <?php echo $validation->getError('telefone_contato') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['telefone_contato'] : set_value('telefone_contato'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">home</i>
            <select name="tipo_moradia">
                <?php foreach ($selectTipoMoradia as $tipoMoradia) : ?>
                    <option value="<?php echo $tipoMoradia['id'] ?>"<?php echo set_select('tipo_moradia',$tipoMoradia['id']) ;?>><?php echo $tipoMoradia['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="tipo_moradia">Condições da Moradia</label>
        </div>
    </div>
</div>