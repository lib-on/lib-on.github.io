<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav" id="actions-sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('New Editora'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <h3><?= __('Editoras') ?></h3>
            <table cellpadding="0" cellspacing="0" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('contato') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($editoras as $editora): ?>
                    <tr>
                        <td><?= $this->Number->format($editora->id) ?></td>
                        <td><?= h($editora->nome) ?></td>
                        <td><?= h($editora->contato) ?></td>
                        <td><?= h($editora->endereco) ?></td>
                        <td><?= h($editora->email) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $editora->id], ['class' => 'btn btn-info']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $editora->id], ['class' => 'btn btn-default']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $editora->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $editora->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </div>
        </div>
    </div>    
</div>