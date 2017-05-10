<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionarios index large-9 medium-8 columns content">
    <h3><?= __('Funcionarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('siape') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('setor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td><?= h($funcionario->siape) ?></td>
                <td><?= h($funcionario->funcao) ?></td>
                <td><?= h($funcionario->setor) ?></td>
                <td><?= h($funcionario->email) ?></td>
                <td><?= h($funcionario->endereco) ?></td>
                <td><?= h($funcionario->contato) ?></td>
                <td><?= $funcionario->has('pessoa') ? $this->Html->link($funcionario->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $funcionario->pessoa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $funcionario->siape]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionario->siape]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionario->siape], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->siape)]) ?>
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
