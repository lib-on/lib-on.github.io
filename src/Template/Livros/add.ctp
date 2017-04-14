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
            echo $this->Form->control('código do livro');
            echo $this->Form->control('título');
            echo $this->Form->control('ISBN');
            echo $this->Form->control('autor');
            echo $this->Form->control('editora');
            echo $this->Form->control('sinopse');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
