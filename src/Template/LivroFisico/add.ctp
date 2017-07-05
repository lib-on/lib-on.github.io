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
                <li><?= $this->Html->link(__('Listar Livro Fisico'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-6">
            <div class="placeholdered">
            <?= $this->Form->create($livroFisico) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Adicionar Livro Fisico') ?></legend>
                <?php
                    echo $this->Form->control('livros_id', ['options' => $livros, 'empty' => true]);
                    echo $this->Form->control('codigo_livro', ['class' => 'form-control', 'placeholder' => 'Digite o codigo do livro']);
                    echo $this->Form->control('alugado');
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['class' => 'col-md-offset-5 col-md-2 btn btn-primary']) ?>
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