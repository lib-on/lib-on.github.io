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
        <li><?= $this->Html->link(__('New Livro Fisico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="col-sm-9">
    <table  class="table table-striped table-bordered">
        <thead class="thead-inverse">
            <tr>
    <h3><?= __('Livro Fisico') ?></h3>
                <th scope="col"><?= $this->Paginator->sort('livros_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alugado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_livro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livroFisico as $livroFisico): ?>
            <tr>
                <td><?= $livroFisico->has('livro') ? $this->Html->link($livroFisico->livro->titulo, ['controller' => 'Livros', 'action' => 'view', $livroFisico->livro->titulo]) : '' ?></td>
                <td><?= h($livroFisico->alugado == 1 ? 'alugado' : '') ?></td>
                <td><?= $this->Number->format($livroFisico->codigo_livro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $livroFisico->id], ['class' => 'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livroFisico->id],  ['class' => 'btn btn-default']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livroFisico->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $livroFisico->id)]) ?>
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
