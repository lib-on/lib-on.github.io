<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcionario->siape],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->siape)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionarios form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= __('Edit Funcionario') ?></legend>
        <?php
            echo $this->Form->control('funcao');
            echo $this->Form->control('setor');
            echo $this->Form->control('email');
            echo $this->Form->control('endereco');
            echo $this->Form->control('contato');
            echo $this->Form->control('pessoa_id', ['options' => $pessoas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
