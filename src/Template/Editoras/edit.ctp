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
                        ['action' => 'delete', $editora->id],
                        ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $editora->id)]
                    )
                ?></li>
                <li><?= $this->Html->link(__('Listar Editoras'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-6">
            <div class="placeholdered">
            <?= $this->Form->create($editora) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Editar Editora') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control']);
                    echo $this->Form->control('contato', ['class' => 'form-control']);
                    echo $this->Form->control('endereco', ['class' => 'form-control']);
                    echo $this->Form->control('email', ['class' => 'form-control']);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['class'=>'col-md-offset-5 col-md-2 btn btn-primary']) ?>
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