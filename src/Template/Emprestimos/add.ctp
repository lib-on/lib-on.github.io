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
        <li><?= $this->Html->link(__('List Emprestimos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="col-sm-9">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Add Emprestimo') ?></legend>
        <?php
            echo $this->Form->control('livro_id', ['class'=> 'form-control', 'placeholder']);
            echo $this->Form->control('id_usuario', ['class'=> 'form-control', 'placeholder' => 'Digite o id do usuario']);
            echo $this->Form->control('identificador_livro', ['class'=> 'form-control', 'placeholder' => 'Digite o id do livro']);
            echo $this->Form->control('data_emprestimo', ['class'=> 'form-control', 'placeholder' => 'Digite a data do emprestimo']);
            echo $this->Form->control('data_entrega',['class'=> 'form-control', 'placeholder' => 'Digite a data de entrega'], ['empty' => true]);
        ?>
    </fieldset><br>
    <?= $this->Form->button(__('Submit'), ['type'=>'submit','class'=>'col-md-offset-11 col-md-1 btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
