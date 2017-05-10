<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoas view large-9 medium-8 columns content">
    <h3><?= h($pessoa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($pessoa->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($pessoa->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idade') ?></th>
            <td><?= $this->Number->format($pessoa->idade) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Funcionarios') ?></h4>
        <?php if (!empty($pessoa->funcionarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Siape') ?></th>
                <th scope="col"><?= __('Funcao') ?></th>
                <th scope="col"><?= __('Setor') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Endereco') ?></th>
                <th scope="col"><?= __('Contato') ?></th>
                <th scope="col"><?= __('Pessoa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pessoa->funcionarios as $funcionarios): ?>
            <tr>
                <td><?= h($funcionarios->siape) ?></td>
                <td><?= h($funcionarios->funcao) ?></td>
                <td><?= h($funcionarios->setor) ?></td>
                <td><?= h($funcionarios->email) ?></td>
                <td><?= h($funcionarios->endereco) ?></td>
                <td><?= h($funcionarios->contato) ?></td>
                <td><?= h($funcionarios->pessoa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Funcionarios', 'action' => 'view', $funcionarios->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Funcionarios', 'action' => 'edit', $funcionarios->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funcionarios', 'action' => 'delete', $funcionarios->], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionarios->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
