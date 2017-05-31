<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('List Emprestimos'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <?= $this->Form->create($emprestimo) ?>
            <fieldset>
                <legend><?= __('Add Emprestimo') ?></legend>
                <?php
                    echo $this->Form->control('livro_id', ['options' => $livros]);
                    echo $this->Form->control('id_usuario', ['options' => $users]);
                    echo $this->Form->control('codigo_livros');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
