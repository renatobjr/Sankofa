<?php
    $validation = \Config\Services::validation();
    $err = 'O campo é obrigatório.'
?>

<!-- username -->
<div class="row center">
    <div class="col s12 m12 l12 input-field">
        <i class="material-icons prefix">account_circle</i>
        <label for="username">Usuário</label>
        <input 
            type="text" 
            name="username" 
            id="username" 
            class="validate <?php echo $validation->getError('username') ? 'invalid' : '' ;?>"
            value="<?php echo set_value('username'); ?>">
        <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
    </div>
</div>
<!-- passwd -->
<div class="row center">
    <div class="col s12 m12 l12 input-field">
        <i class="material-icons prefix">lock</i>
        <label for="password">Senha</label>
        <input 
            type="password" 
            name="password" 
            id="password" 
            class="validate <?php echo $validation->getError('password') ? 'invalid' : '' ;?>"
            value="<?php echo set_value('password'); ?>">
        <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
    </div>
</div>
<!-- passwd -->
<div class="row center">
    <div class="col s12 m12 l12 input-field">
        <i class="material-icons prefix">lock</i>
        <label for="password_repeat">Repetir Senha</label>
        <input 
            type="password" 
            name="password_repeat" 
            id="password_repeat" 
            class="validate <?php echo $validation->getError('password_repeat') ? 'invalid' : '' ;?>"
            value="<?php echo set_value('password_repeat'); ?>">
        <span class="helper-text invalid" data-error="<?php echo $err ;?>"></span>
    </div>
</div>