<?php
/**
  * @var \App\View\AppView $this
  */
use Cake\ORM\TableRegistry;
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <!-- <li class="heading"><?= __('Actions') ?></li> -->
                <li><?= $this->Html->link(__('List Livros'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Emprestimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <?= $this->Form->create($livro) ?>
            <fieldset>
                <legend><?= __('Adicionar Livro') ?></legend>
                <?php

                    echo $this->Form->control('titulo', ['class' => 'form-control', 'placeholder' => 'Digite titulo do livro']);
                    echo $this->Form->control('isbn', ['class' => 'form-control', 'placeholder' => 'Digite isbn']);
                    echo $this->Form->control('edicao', ['class' => 'form-control', 'placeholder' => 'Digite edição']);
                    echo $this->Form->control('autor', ['class' => 'form-control', 'placeholder' => 'Digite autor']);
                    echo $this->Form->control('categoria_id', ['options' => $categorias, 'empty' => true, 'class' => 'form-control']);
                    echo $this->Form->control('editora_id', ['options' => $editoras, 'empty' => true, 'class' => 'form-control']);
                   //debug($identificator);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['class'=>'col-md-offset-11 col-md-1 btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
