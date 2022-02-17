<?php echo $this->extend('components/default') ?>

<?php echo $this->section('content') ?>
<!-- login-card -->
<div class="row" style="margin-top: 20vh;">
	<div class="col s12 m12 l4 offset-l4">
		<div class="card-panel white black-text">
			<!-- img -->
			<div class="row center">
				<div class="col s12 m12 l12">
					<img 
						src="<?php echo base_url('/svg/logo.svg')?>" 
						alt=""
						width="60%">
				</div>
			</div>
			
			<!-- Form open -->
			<?php echo form_open('login') ;?>
			<?php echo csrf_field() ;?>

			<!-- form_login -->
			<?php echo $this->include('forms/form_login') ;?>

			<!-- btn submit -->
			<div class="row center">
				<button type="submit" class="btn waves-light waves-effect green">Login</button>
				<a href="<?php echo base_url('primeiro-login') ;?>" class="btn waves-light waves-effect blue">Primeiro Acesso</a>
			</div>
			<!-- form close -->
			<?php echo form_close() ;?>
		</div>
	</div>
</div>
<!-- /login-card -->
<?php echo $this->endSection() ?>