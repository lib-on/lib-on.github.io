<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pessoas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Add Pessoa') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('nome');
            echo $this->Form->control('idade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
