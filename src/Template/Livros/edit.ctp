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
                        ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $livro->id)]
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

        <div class="col-sm-9 col-sm-6">
            <div class="placeholdered">  
            <?= $this->Form->create($livro) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Editar Livro') ?></legend>
                <?php
                    echo $this->Form->control('titulo', ['class' => 'form-control']);
                    echo $this->Form->control('isbn', ['class' => 'form-control']);
                    echo $this->Form->control('edição', ['class' => 'form-control']);
                    echo $this->Form->control('autor', ['class' => 'form-control']);
                    echo $this->Form->control('categoria_id', ['options' => $categorias, 'class' => 'form-control']);
                    echo $this->Form->control('editora_id', ['options' => $editoras, 'empty' => true, 'class' => 'form-control']);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['type'=>'submit', 'class'=>'col-md-offset-5 col-md-2 btn btn-primary']); ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    
    .place {
        font-size: 1.5em;
    }
    .font {
        text-align: center;
        font-size: 1.5em;
    }
    .placeholdered {
        font-size: 1.5em;
    }

</style>
