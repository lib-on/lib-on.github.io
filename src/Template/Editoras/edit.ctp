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
                        __('Delete'),
                        ['action' => 'delete', $editora->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $editora->id)]
                    )
                ?></li>
                <li><?= $this->Html->link(__('List Editoras'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="editoras form large-9 medium-8 columns content">
            <?= $this->Form->create($editora) ?>
            <fieldset>
                <legend><?= __('Edit Editora') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control']);
                    echo $this->Form->control('contato', ['class' => 'form-control']);
                    echo $this->Form->control('endereco', ['class' => 'form-control']);
                    echo $this->Form->control('email', ['class' => 'form-control']);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['class'=>'col-md-offset-11 col-md-1 btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
