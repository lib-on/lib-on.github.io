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
                ['action' => 'delete', $editora->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $editora->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Editoras'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="editoras form large-9 medium-8 columns content">
    <?= $this->Form->create($editora) ?>
    <fieldset>
        <legend><?= __('Edit Editora') ?></legend>
        <?php
            echo $this->Form->control('contato');
            echo $this->Form->control('endereco');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
