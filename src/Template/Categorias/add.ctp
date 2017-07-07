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
                <li><?= $this->Html->link(__(' Listar Categorias'), ['action' => 'index'], ['class' => 'fa fa-server']) ?></li>
                <li><?= $this->Html->link(__(' Listar Livros'), ['controller' => 'Livros', 'action' => 'index'], ['class' => 'fa fa-server']) ?></li>
                <li><?= $this->Html->link(__(' Novo Livro'), ['controller' => 'Livros', 'action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-6">
            <div class="placeholdered">    
            <?= $this->Form->create($categoria) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Add Categoria') ?></legend>
                <?php
                    echo $this->Form->control('identificador', ['class' => 'form-control', 'placeholder' => 'Selecione o identificador']);
                    echo $this->Form->control('descricao', ['class' => 'form-control', 'placeholder' => 'Digite a descrição']);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['type'=>'submit', 'class'=>'col-md-offset-5 col-md-2 btn btn-primary']) ?>
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