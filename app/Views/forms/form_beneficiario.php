<!-- Form and Validation service -->
<?php 
  $validation = \Config\Services::validation(); 
  $err = 'O campo é obrigatório.'
?>

<div class="card-action">
    <span>Dados do Beneficiário(a):</span>
    <!-- row 1 -->
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">face</i>
            <label for="nome_beneficiario">Nome</label>
            <input 
                type="text" 
                name="nome_beneficiario" 
                id="nome_beneficiario" 
                class="validate <?php echo $validation->getError('nome_beneficiario') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['nome_beneficiario'] : set_value('nome_beneficiario'); ?>">
              <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">event</i>
            <label for="data_nascimento">Data de Nasc.</label>
            <input 
                type="text" 
                name="data_nascimento" 
                id="data_nascimento" 
                class="date validate <?php echo $validation->getError('data_nascimento') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['data_nascimento'] : set_value('data_nascimento'); ?>">
                <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">person</i>
            <select name="etnia">
                <?php foreach ($selectEtnia as $etnia) : ?>
                    <option value="<?php echo $etnia['id'] ?>"<?php echo set_select('etnia',$etnia['id']) ;?>><?php echo $etnia['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="etnia">Etnia/Raça/Cor</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">looks_one</i>
            <label for="idade">Idade</label>
            <input 
                type="text" 
                name="idade" 
                id="idade" 
                class="validate <?php echo $validation->getError('idade') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['idade'] : set_value('idade'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span> 
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">wc</i>
            <select name="sexo">
                <?php foreach ($selectSexo as $sexo) : ?>
                    <option value="<?php echo $sexo['id'] ?>" <?php echo set_select('sexo',$sexo['id']) ;?>><?php echo $sexo['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="sexo">Sexo</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">card_travel</i>
            <label for="naturalidade">Naturalidade</label>
            <input 
                type="text" 
                name="naturalidade" 
                id="naturalidade" 
                class="validate <?php echo $validation->getError('naturalidade') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['naturalidade'] : set_value('naturalidade'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">card_travel</i>
            <select name="uf">
                <?php foreach ($selectUF as $uf) : ?>
                    <option value="<?php echo $uf['id'] ?>"<?php echo set_select('uf',$uf['id']) ;?>><?php echo $uf['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="uf">UF</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">looks_one</i>
            <label for="certidao_nascimento">Nº. Certidão de Nasc.</label>
            <input 
                type="text" 
                name="certidao_nascimento" 
                id="certidao_nascimento" 
                class="validate <?php echo $validation->getError('certidao_nascimento') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['certidao_nascimento'] : set_value('certidao_nascimento'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">looks_one</i>
            <label for="folha_certidao_nascimento">Folha</label>
            <input 
                type="text" 
                name="folha_certidao_nascimento" 
                id="folha_certidao_nascimento" 
                class="validate <?php echo $validation->getError('folha_certidao_nascimento') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['folha_certidao_nascimento'] : set_value('folha_certidao_nascimento'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">looks_one</i>
            <label for="livro">Livro</label>
            <input 
                type="text" 
                name="livro" 
                id="livro" 
                class="validate <?php echo $validation->getError('livro') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['livro'] : set_value('livro'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">accessible</i>
            <select name="pessoa_deficiencia">
                <?php foreach ($selectBooleana as $booleana) : ?>
                    <option value="<?php echo $booleana['id'] ?>"<?php echo set_select('pessoa_deficiencia',$booleana['id']) ;?>><?php echo $booleana['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="pessoa_deficiencia">Pessoa com deficiência</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">accessible</i>
            <label for="tipo_deficiencia">Se sim, qual?</label>
            <input 
                type="text" 
                name="tipo_deficiencia" 
                id="tipo_deficiencia"
                value="<?php echo isset($aluno) ? $aluno['tipo_deficiencia'] : set_value('tipo_deficiencia'); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">account_balance</i>
            <label for="nome_escola">Nome da escola</label>
            <input 
                type="text" 
                name="nome_escola" 
                id="nome_escola" 
                class="validate <?php echo $validation->getError('nome_escola') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['nome_escola'] : set_value('nome_escola'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">account_balance</i>
            <select name="nivel_escolaridade">
                <?php foreach ($selectNivelEscolaridade as $nivel) : ?>
                    <option value="<?php echo $nivel['id'] ?>"<?php echo set_select('nivel_escolaridade',$nivel['id']) ;?>><?php echo $nivel['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="nivel_escolaridade">Nivel de escolaridade</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">account_balance</i>
            <label for="ano_escolar">Ano escolar</label>
            <input 
                type="text" 
                name="ano_escolar" 
                id="ano_escolar" 
                class="validate <?php echo $validation->getError('ano_escolar') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['ano_escolar'] : set_value('ano_escolar'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">account_balance</i>
            <select name="turno">
                <?php foreach ($selectTurno as $turno) : ?>
                    <option value="<?php echo $turno['id'] ?>"<?php echo set_select('turno',$turno['id']) ;?>><?php echo $turno['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="turno">Turno</label>
        </div>
    </div>
    <div class="row">        
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">account_balance</i>
            <select name="eja">
                <?php foreach ($selectBooleana as $booleana) : ?>
                    <option value="<?php echo $booleana['id'] ?>"<?php echo set_select('eja',$booleana['id']) ;?>><?php echo $booleana['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="eja">Aluno EJA</label>
        </div>
    </div>
    <div class="row">        
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">local_pharmacy</i>
            <select name="confirma_vacina">
                <?php foreach ($selectBooleana as $booleana) : ?>
                    <option value="<?php echo $booleana['id'] ?>"<?php echo set_select('confirma_vacina',$booleana['id']) ;?>><?php echo $booleana['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="confirma_vacina">Já foi vacinado contra o COVID - 19?</label>
        </div>
    </div>
    <div class="row">        
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">account_balance</i>
            <select name="turma">
                <?php foreach ($selectTurmas as $turma) : ?>
                    <option value="<?php echo $turma['id'] ?>"<?php echo set_select('turma',$turma['id']) ;?>><?php echo $turma['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="turma">Horário Projeto</label>
        </div>
    </div>
</div>