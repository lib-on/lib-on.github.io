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
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $livroFisico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $livroFisico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Livro Fisico'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="livroFisico form large-9 medium-8 columns content">
    <?= $this->Form->create($livroFisico) ?>
    <fieldset>
        <legend><?= __('Editar Livro Fisico') ?></legend>
        <?php
            echo $this->Form->control('livros_id', ['options' => $livros]);
            echo $this->Form->control('alugado');
            echo $this->Form->control('codigo_livro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>

