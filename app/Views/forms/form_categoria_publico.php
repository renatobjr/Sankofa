<!-- Form and Validation service -->
<?php 
  $validation = \Config\Services::validation(); 
  $err = 'O campo é obrigatório.'
?>

<div class="card-action">
    <span>Categoria do Público</span>
    <div class="row">
        <div class="col s12 m12 l12">
            <p>
                <label for="auxilio_brasil">
                    <input type="checkbox" name="auxilio_brasil" id="auxilio_brasil" <?php echo set_value('auxilio_brasil') == 'on' ? 'checked' : 'unchecked';?>>
                    <span>Usuário(a) do Programa Auxílio Brasil</span>
                </label>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <p>
                <label for="servico_socioassistencial">
                    <input type="checkbox" name="servico_socioassistencial" id="servico_socioassistencial" <?php echo set_value('servico_socioassistencial') == 'on' ? 'checked' : 'unchecked';?>>
                    <span>Acompanhado(a) por outro serviço da Rede socioassistencial.</span>
                </label>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">local_pharmacy</i>
            <label for="servico_socioassistencial_positivo">Qual?</label>
            <input 
                type="text" 
                name="servico_socioassistencial_positivo" 
                id="servico_socioassistencial_positivo" 
                value="<?php echo isset($aluno) ? $aluno['servico_socioassistencial_positivo'] : set_value('servico_socioassistencial_positivo'); ?>">
        </div>
    </div>
</div>