<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <!-- <li class="heading"><?= __('Actions') ?></li> -->
                <li><?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $livro->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]
                    )
                ?></li>
                <li><?= $this->Html->link(__('Listar Livros'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Listar Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Nova Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('Listar Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Nova Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('Listar Emprestimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo Emprestimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
            </ul>
        </div>

        <div class="col-sm-9">
            <?= $this->Form->create($livro) ?>
            <fieldset>
                <legend><?= __('Editar Livro') ?></legend>
                <?php
                    echo $this->Form->control('titulo', ['class' => 'form-control']);
                    echo $this->Form->control('isbn', ['class' => 'form-control']);
                    echo $this->Form->control('edicao', ['class' => 'form-control']);
                    echo $this->Form->control('autor', ['class' => 'form-control']);
                    echo $this->Form->control('categoria_id', ['options' => $categorias, 'class' => 'form-control']);
                    echo $this->Form->control('editora_id', ['options' => $editoras, 'empty' => true, 'class' => 'form-control']);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['type'=>'submit', 'class'=>'col-md-offset-11 col-md-1 btn btn-primary']); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

