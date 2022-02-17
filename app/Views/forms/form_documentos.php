<!-- Form and Validation service -->
<?php 
  $validation = \Config\Services::validation(); 
  $err = 'O campo é obrigatório.'
?>

<div class="card-action">
    <span>Documentos necessários</span>
    <div class="row">
        <p>Documentos Digitalizados</p>
        <div class="file-field input-field">
            <div class="btn">
                <span>PFD</span>
                <input name="documentos_digitalizados" type="file">
            </div>
            <div class="file-path-wrapper">
                <input name="documentos_digitalizados_arquivo" class="file-path validate <?php echo $validation->getError('documentos_digitalizados_arquivo') ? 'invalid' : '' ;?>" 
                    type="text">
                <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
            </div>
        </div>
    </div>
</div>