<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Livro Fisico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livroFisico index large-9 medium-8 columns content">
    <h3><?= __('Livro Fisico') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('livros_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alugado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_livro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livroFisico as $livroFisico): ?>
            <tr>
                <!-- <td><?= $this->Number->format($livroFisico->id) ?></td> -->
                <td><?= $livroFisico->has('livro') ? $this->Html->link($livroFisico->livro->titulo, ['controller' => 'Livros', 'action' => 'view', $livroFisico->livro->id]) : '' ?></td>
                <td><?= h($livroFisico->alugado==1?'alugado':'') ?></td>
                <td><?= h($livroFisico->codigo_livro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $livroFisico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livroFisico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livroFisico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livroFisico->id)]) ?>
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
