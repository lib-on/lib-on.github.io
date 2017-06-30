<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
        <!--li class="heading"><?= __('Actions') ?></li-->
        <li><?= $this->Html->link(__('List Livro Fisico'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="col-sm-9">
    <?= $this->Form->create($livroFisico) ?>
    <fieldset>
        <legend><?= __('Add Livro Fisico') ?></legend>
        <?php
            echo $this->Form->control('livros_id', ['options' => $books]);
            echo $this->Form->control('alugado');
            echo $this->Form->control('codigo_livro');
        ?>
    </fieldset><br>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>

