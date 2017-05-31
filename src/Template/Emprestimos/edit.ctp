<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $emprestimo->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id)]
                    )
                ?></li>
                <li><?= $this->Html->link(__('List Emprestimos'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <?= $this->Form->create($emprestimo) ?>
            <fieldset>
                <legend><?= __('Edit Emprestimo') ?></legend>
                <?php
                    echo $this->Form->control('livro_id', ['options' => $livros, 'class' => 'form-control']);
                    echo $this->Form->control('id_usuario', ['class' => 'form-control']);
                    echo $this->Form->control('codigo_livros', ['class' => 'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['type'=>'submit', 'class'=>'col-md-offset-11 col-md-1 btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
