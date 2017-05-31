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
                <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $categoria->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]
                    )
                ?></li>
                <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="ccol-sm-9">
            <?= $this->Form->create($categoria) ?>
            <fieldset>
                <legend><?= __('Edit Categoria') ?></legend>
                <?php
                    echo $this->Form->control('identificador', ['class' => 'form-control']);
                    echo $this->Form->control('descricao', ['class' => 'form-control']);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['type'=>'submit', 'class'=>'col-md-offset-11 col-md-1 btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
