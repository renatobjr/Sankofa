<?php
    $validation = \Config\Services::validation();
    $err = 'O campo é obrigatório.'
?>

<!-- Card content -->
<div class="card-action">
    <!-- fullname -->
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">person</i>
            <label for="nome_completo">Nome Completo</label>
            <input type="text" name="nome_completo" id="nome_completo" class="validate
            <?php echo $validation->getError('nome_completo') ? 'invalid' : '' ?>"
                value="<?php echo set_value('nome_completo') ?>">
            <span class="helper-text" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <!-- username -->
    <div class="row">
        <div class="col s12 m12 l12 input-field">
            <i class="material-icons prefix">person</i>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="validate
            <?php echo $validation->getError('username') ? 'invalid' : '' ?>"
                value="<?php echo set_value('username') ?>">
            <span class="helper-text" data-error="<?php echo $err ;?>"></span>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l12">
            <i class="material-icons prefix">manege_account</i>
            <select name="isAdmin" id="role">
                <option value="0">Admin</option>
                <option value="1">User</option>
            </select>
            <label for="role">Role</label>
            <span class="helper-text" data-error="O Campo é obrigatório"></span>
        </div>
    </div>
</div>