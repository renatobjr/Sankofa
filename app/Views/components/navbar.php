<div class="navbar-fixed z-depth-1">
    <nav>
        <div class="nav-wrapper grey lighten-4">
            <a href="<?php echo base_url('dashboard') ;?>" class="brand-logo left">
                <img 
                    src="<?php echo base_url('svg/logo_sankofa_menu.svg') ;?>" 
                    alt="logo_sankofa"
                    height="80px"
                    style="padding: 5px 0 20px 30px">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class=" black-text" href="<?php echo base_url('/dashboard/matricula') ;?>">Nova Matrícula</a></li>
                <?php if ($_SESSION['isAdmin'] == 0) : ?>
                    <li><a class=" black-text" href="<?php echo base_url('/dashboard/novo-usuario') ;?>">Novo Usuário</a></li>
                <?php endif ?>
                <li><a class=" black-text" href="<?php echo base_url('/dashboard/logout') ;?>">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>