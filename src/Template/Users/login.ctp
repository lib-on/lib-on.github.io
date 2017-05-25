<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
	<legend><?= __('Por favor entre com usuário e senha') ?></legend>
	<form class="form">
		
		<?= $this->Form->control('username',['class' => 'form-control']) ?>
		<?= $this->Form->control('password', ['class' => 'form-control']) ?>
	</form>
	<div class="" >
		
		<?= $this->Form->button(__('Cadastre-se'),['class' => 'btn btn-default','action' => 'add']) ?>
		
	</div>
	</fieldset><br>
<?= $this->Form->button(__('Login'),['class' => 'btn btn-success']); ?>
<?= $this->Form->end() ?>
</div>