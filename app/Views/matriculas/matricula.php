<?php echo $this->extend('components/default') ;?>

<?php echo $this->section('content') ;?>
<!-- navbar -->
<?php echo $this->include('components/navbar') ;?>
<!-- Modal docs obrigatorios -->
<?php echo $this->include('components/modal_docs_obrigatorios') ;?>
<!-- Form and Validation service -->
<?php 
  helper('form');  
?>
<div class="container" style="margin-top: 2vh;">
    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title light">Matrícula de Alunos
                    <i class="material-icons small right">account_circle</i></span>
                </div>
                <!-- Form open -->
                <?php echo form_open_multipart('/dashboard/matricula/salvar') ;?>
                <?php echo csrf_field() ;?>

                <!-- Dados do Beneficiário -->
                <?php echo $this->include('forms/form_beneficiario') ;?>
                <!-- Categoria do Público -->
                <?php echo $this->include('forms/form_categoria_publico') ;?>
                <!-- Dados do responsasável -->
                <?php echo $this->include('forms/form_dados_responsavel') ;?>
                <!-- Dados socioeconomicos -->
                <?php echo $this->include('forms/form_socio_economicos') ;?>
                <!-- Documentos -->
                <?php echo $this->include('forms/form_documentos') ;?>
                <!-- Btn submit -->
                <div class="card-action">
                    <div class="center">
                        <button type="submit" class="btn waves-effect waves-light green">Salvar</button>
                    </div>
                </div>
                <!-- form close -->
                <?php echo form_close() ;?>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection('content') ;?>