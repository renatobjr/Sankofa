<!-- Form and Validation service -->
<?php 
  $validation = \Config\Services::validation(); 
  $err = 'O campo é obrigatório.'
?>

<div class="card-action">
    <span>Dados Socioeconômicos</span>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">people</i>
            <label for="composicao_familiar">Composição Familiar</label>
            <input 
                type="text" 
                name="composicao_familiar" 
                id="composicao_familiar" 
                class="validate <?php echo $validation->getError('composicao_familiar') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['composicao_familiar'] : set_value('composicao_familiar'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">monetization_on</i>
            <label for="quantidade_atividades_laborativas">Nº de pessoas que exerccem atividade laborativas:</label>
            <input 
                type="text" 
                name="quantidade_atividades_laborativas" 
                id="quantidade_atividades_laborativas" 
                class="validate <?php echo $validation->getError('quantidade_atividades_laborativas') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['quantidade_atividades_laborativas'] : set_value('quantidade_atividades_laborativas'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">monetization_on</i>
            <label for="quantidade_vinculo_empregaticio">Nº de pessoas com vínculos empregatícios:</label>
            <input 
                type="text" 
                name="quantidade_vinculo_empregaticio" 
                id="quantidade_vinculo_empregaticio" 
                class="validate <?php echo $validation->getError('quantidade_vinculo_empregaticio') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['quantidade_vinculo_empregaticio'] : set_value('quantidade_vinculo_empregaticio'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">favorite</i>
            <select name="beneficio_familia" id="beneficio_familia">
                <?php foreach ($selectBooleana as $booleana) : ?>
                    <option value="<?php echo $booleana['id'] ?>"<?php echo set_select('beneficio_familia',$booleana['id']) ;?>><?php echo $booleana['descricao'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="beneficio_familia">A família possui algum benefício?</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">favorite</i>
            <label for="descricao_beneficios">Quais?</label>
            <input 
                type="text" 
                name="descricao_beneficios" 
                id="descricao_beneficios" 
                class="validate <?php echo $validation->getError('descricao_beneficios') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['descricao_beneficios'] : set_value('descricao_beneficios'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">monetization_on</i>
            <label for="renda_total">Renda total</label>
            <input 
                type="text" 
                name="renda_total" 
                id="renda_total" 
                class="real validate <?php echo $validation->getError('renda_total') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['renda_total'] : set_value('renda_total'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">favorite</i>
            <label for="violacao_direitos">Está passando por violação de direitos?</label>
            <input 
                type="text" 
                name="violacao_direitos" 
                id="violacao_direitos"
                value="<?php echo isset($aluno) ? $aluno['violacao_direitos'] : set_value('violacao_direitos'); ?>">
        </div>
    </div>
</div>