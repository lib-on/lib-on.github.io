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
                <li><?= $this->Html->link(__(' Listar Editoras'), ['action' => 'index'], ['class' => 'fa fa-server']) ?></li>
                <li><?= $this->Html->link(__(' Listar Livros'), ['controller' => 'Livros', 'action' => 'index'], ['class' => 'fa fa-server']) ?></li>
                <li><?= $this->Html->link(__(' Novo Livro'), ['controller' => 'Livros', 'action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-6">
            <div class="placeholdered">
            <?= $this->Form->create($editora) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Adicionar Editora') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control', 'placeholder' => 'Digite seu nome']);
                    echo $this->Form->control('contato', ['class' => 'form-control', 'placeholder' => 'Digite seu celular']);
                    echo $this->Form->control('endereco', ['class' => 'form-control', 'placeholder' => 'Digite seu endereço']);
                    echo $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Digite seu email']);
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
