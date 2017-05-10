<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Livro'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="livro form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Add Livro') ?></legend>
        <?php
            echo $this->Form->control('TITULO');
            echo $this->Form->control('ISBN');
            echo $this->Form->control('AUTOR');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
