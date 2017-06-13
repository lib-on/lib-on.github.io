<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!-- <li class="heading"><?= __('Actions') ?></li> -->
        <li><?= $this->Html->link(__('New Emprestimo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emprestimos index large-9 medium-8 columns content">
    <h3><?= __('Emprestimos') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('livro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identificador_livro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprestimos as $emprestimo): ?>
            <tr>
                <!-- <td><?= $this->Number->format($emprestimo->id) ?></td> -->
                <td><?= $emprestimo->has('livro') ? $this->Html->link($emprestimo->livro->identificador, ['controller' => 'Livros', 'action' => 'view', $emprestimo->livro->id]) : '' ?></td>
                <td><?= $this->Number->format($emprestimo->id_usuario) ?></td>
                <td><?= $this->Number->format($emprestimo->identificador_livro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emprestimo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emprestimo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id)]) ?>
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
