<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->matricula]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->matricula], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->matricula)]) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alunos view large-9 medium-8 columns content">
    <h3><?= h($aluno->matricula) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= h($aluno->matricula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= h($aluno->curso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= h($aluno->periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($aluno->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($aluno->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($aluno->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Pessoa') ?></th>
            <td><?= $this->Number->format($aluno->id_pessoa) ?></td>
        </tr>
    </table>
</div>
