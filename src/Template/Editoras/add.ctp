<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Editoras'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="editoras form large-9 medium-8 columns content">
    <?= $this->Form->create($editora) ?>
    <fieldset>
        <legend><?= __('Add Editora') ?></legend>
        <?php
            echo $this->Form->control('nome', ['class' => 'form-control']);
            echo $this->Form->control('contato', ['class' => 'form-control']);
            echo $this->Form->control('endereco', ['class' => 'form-control']);
            echo $this->Form->control('email', ['class' => 'form-control']);
        ?>
    </fieldset><br>
    <?= $this->Form->button(__('Submit'), ['class'=>'col-md-offset-11 col-md-1 btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
