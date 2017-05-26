<?php
/**
  * @var \App\View\AppView $this
  */
use Cake\ORM\TableRegistry;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emprestimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="form">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Adicionar Livro') ?></legend>
        <?php

            echo $this->Form->control('titulo', ['class' => 'form-control']);
            echo $this->Form->control('isbn', ['class' => 'form-control']);
            echo $this->Form->control('edicao', ['class' => 'form-control']);
            echo $this->Form->control('autor', ['class' => 'form-control']);
            echo $this->Form->control('categoria_id', ['options' => $categorias, 'empty' => true, 'class' => 'form-control']);
            echo $this->Form->control('editora_id', ['options' => $editoras, 'empty' => true, 'class' => 'form-control']);
           //debug($identificator);
        ?>
    </fieldset><br>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-default']) ?>
    <?= $this->Form->end() ?>
</div>
