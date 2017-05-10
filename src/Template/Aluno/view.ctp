<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->MATRICULA]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->MATRICULA], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->MATRICULA)]) ?> </li>
        <li><?= $this->Html->link(__('List Aluno'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aluno view large-9 medium-8 columns content">
    <h3><?= h($aluno->MATRICULA) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('MATRICULA') ?></th>
            <td><?= h($aluno->MATRICULA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CURSO') ?></th>
            <td><?= h($aluno->CURSO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PERIODO') ?></th>
            <td><?= h($aluno->PERIODO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TURNO') ?></th>
            <td><?= h($aluno->TURNO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOME') ?></th>
            <td><?= h($aluno->NOME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LIVRO ID') ?></th>
            <td><?= $this->Number->format($aluno->LIVRO_ID) ?></td>
        </tr>
    </table>
</div>
