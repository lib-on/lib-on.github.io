<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Lib-on') ?></li>
        <li><?= $this->Html->link(__('Cadastre o Livro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livros index large-9 medium-8 columns content">
    <h3><?= __('Livros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('código do livro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('título') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ISBN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('editora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sinopse') ?></th>
                <!-- <th scope="col" class="actions"><?= __('Funções') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?= $this->Number->format($livro->id) ?></td>
                <td><?= h($livro->codigo_livro) ?></td>
                <td><?= h($livro->titulo) ?></td>
                <td><?= h($livro->isbn) ?></td>
                <td><?= h($livro->autor) ?></td>
                <td><?= h($livro->editora) ?></td>
                <td><?= h($livro->sinopse) ?></td>
                <!-- <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $livro->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $livro->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?>
                </td> -->
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
