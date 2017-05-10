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
                ['action' => 'delete', $livro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emprestimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livros form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Edit Livro') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('isbn');
            echo $this->Form->control('edicao');
            echo $this->Form->control('autor');
            echo $this->Form->control('categoria_id', ['options' => $categorias]);
            echo $this->Form->control('editora_id', ['options' => $editoras, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
