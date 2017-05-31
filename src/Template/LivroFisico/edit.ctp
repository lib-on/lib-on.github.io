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
                ['action' => 'delete', $livroFisico->codigo_livro],
                ['confirm' => __('Are you sure you want to delete # {0}?', $livroFisico->codigo_livro)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Livro Fisico'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livroFisico form large-9 medium-8 columns content">
    <?= $this->Form->create($livroFisico) ?>
    <fieldset>
        <legend><?= __('Edit Livro Fisico') ?></legend>
        <?php
            echo $this->Form->control('livros_id', ['options' => $livros, 'class' => 'form-control']);
            echo $this->Form->control('alugado');
            echo $this->Form->control('quantidade', ['class' => 'form-control']);
        ?>
    </fieldset><br>
    <?= $this->Form->button(__('Submit'), ['type'=>'submit', 'class'=>'col-md-offset-11 col-md-1 btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
