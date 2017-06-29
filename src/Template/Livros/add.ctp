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

        <div class="col-sm-5 col-sm-offset-1">
        <div class="placeholdered">
            <?= $this->Form->create($livro) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Adicionar Livro') ?></legend>
                    
                <?php

                    echo $this->Form->control('titulo', ['class' => 'form-control my-input', 'placeholder' => 'Digite titulo do livro']);
                    echo $this->Form->control('isbn', ['class' => 'form-control my-input', 'placeholder' => 'Digite isbn']);
                    echo $this->Form->control('edicao', ['class' => 'form-control my-input', 'placeholder' => 'Digite edição']);
                    echo $this->Form->control('autor', ['class' => 'form-control my-input', 'placeholder' => 'Digite autor']);
                    echo $this->Form->control('categoria_id', ['options' => $categorias, 'empty' => true, 'class' => 'form-control my-input', 'placeholder' => 'Coloque id da categoria']);
                    echo $this->Form->control('editora_id', ['options' => $editoras, 'empty' => true, 'class' => 'form-control my-input', 'placeholder' => 'Coloque id da editora']);
                   //debug($identificator);
                ?>
            
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['type'=>'submit','class'=>'col-md-offset-5 col-md-2 btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
        </div>
    </div>
</div>
<style type="text/css">

.placeholdered {

    font-size: 1.5em;
}
.place {
    font-size: 1.5em;
}
.font {
    font-size: 1.5em;
}
</style>