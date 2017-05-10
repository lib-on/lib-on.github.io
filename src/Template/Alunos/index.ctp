<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="alunos index large-9 medium-8 columns content">
    <h3><?= __('Alunos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_pessoa') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= h($aluno->matricula) ?></td>
                <td><?= h($aluno->curso) ?></td>
                <td><?= h($aluno->periodo) ?></td>
                <td><?= h($aluno->email) ?></td>
                <td><?= h($aluno->endereco) ?></td>
                <td><?= h($aluno->contato) ?></td>
                <td><?= $this->Number->format($aluno->id_pessoa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->matricula]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->matricula]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->matricula], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->matricula)]) ?>
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
