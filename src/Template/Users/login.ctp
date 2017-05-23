<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
	<legend><?= __('Please enter your username and password') ?></legend>
	<?= $this->Form->control('username') ?>
	<?= $this->Form->control('password') ?>
	<div class="btn btn-default glyphicon glyphicon-plus" >
		
		<?= $this->Html->link(__('Cadastre-se'), ['action' => 'add']) ?>
		
	</div>
	</fieldset>
<?= $this->Form->button(__('Login'),['class' => 'btn btn-success']); ?>
<?= $this->Form->end() ?>
</div>