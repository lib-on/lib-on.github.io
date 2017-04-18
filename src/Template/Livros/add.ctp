<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="livros form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Add Livro') ?></legend>
        <?php
            echo $this->Form->control('código do livro', ['placeholder'=>'codigo do livro']);
            echo $this->Form->control('título', ['placeholder'=>'titulo']);
            echo $this->Form->control('ISBN', ['placeholder'=>'ISBN']);
            echo $this->Form->control('autor', ['placeholder'=>'autor']);
            echo $this->Form->control('editora', ['placeholder'=>'editora']);
            echo $this->Form->control('sinopse', ['placeholder'=>'sinopse']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
