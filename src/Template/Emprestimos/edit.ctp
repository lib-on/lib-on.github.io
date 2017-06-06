<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!-- <li class="heading"><?= __('Actions') ?></li> -->
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emprestimo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Emprestimos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Edit Emprestimo') ?></legend>
        <?php
            echo $this->Form->control('livro_id', ['options' => $livros]);
            echo $this->Form->control('id_usuario');
            echo $this->Form->control('codigo_livros');
            echo $this->Form->control('entrega');
            echo $this->Form->control('data_emprestimo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
