<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
	<legend><?= __('Please enter your username and password') ?></legend>
	<?= $this->Form->control('username') ?>
	<?= $this->Form->control('password') ?>
	<div class="btn btn-default" >
		
		<?= $this->Html->link(__('Cadastre-se'), ['action' => 'add']) ?>
		
	</div>
	</fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>