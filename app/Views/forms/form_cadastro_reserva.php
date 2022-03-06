<!-- Form and Validation service -->
<?php 
  $validation = \Config\Services::validation(); 
  $err = 'O campo é obrigatório.'
?>

<div class="card-action">
    <span>Dados da Reserva:</span>
    <!-- row 1 -->
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">face</i>
            <label for="nome_beneficiario">Nome do responsável</label>
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
            <i class="material-icons prefix">assignment_late</i>
            <label for="observacoes">Observações - Favor indicar Turma e faixa etária para a reserva</label>
            <input 
                type="text" 
                name="observacoes" 
                id="observacoes" 
                class="validate <?php echo $validation->getError('observacoes') ? 'invalid' : '' ;?>"
                value="<?php echo isset($aluno) ? $aluno['observacoes'] : set_value('observacoes'); ?>">
            <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
</div>