<?php echo $this->extend('components/default') ;?>

<?php echo $this->section('content') ;?>
<!-- navbar -->
<?php echo $this->include('components/navbar') ;?>
<!-- Form and Validation service -->

<div class="container" style="margin-top: 7vh;">
    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title light">Novo Usuário
                    <i class="material-icons small right">account_circle</i></span>
                </div>
                <!-- Form open -->
                <?php echo form_open('/dashboard/usuario/salvar') ;?>
                <?php echo csrf_field() ;?>

                <!-- Dados do usuarios -->
                <?php echo $this->include('forms/form_usuario') ;?>

                <!-- btn submit -->
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