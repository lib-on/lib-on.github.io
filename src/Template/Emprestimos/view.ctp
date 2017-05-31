<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emprestimo'), ['action' => 'edit', $emprestimo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emprestimo'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emprestimos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emprestimos view col-md-offset-0 columns content">
    <h3><?= h($emprestimo->id) ?></h3>
    <table class="table table-hover">
        <tr>
            <th scope="row"><?= __('Livro') ?></th>
            <td><?= $emprestimo->has('livro') ? $this->Html->link($emprestimo->livro->identificador, ['controller' => 'Livros', 'action' => 'view', $emprestimo->livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emprestimo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($emprestimo->id_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Livros') ?></th>
            <td><?= $this->Number->format($emprestimo->codigo_livros) ?></td>
        </tr>
    </table>
</div>
