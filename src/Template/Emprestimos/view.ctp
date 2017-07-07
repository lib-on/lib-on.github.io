<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
        <!-- <li class="heading"><?= __('Actions') ?></li> -->
        <li><?= $this->Html->link(__('Editar Emprestimo'), ['action' => 'edit', $emprestimo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Emprestimo'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $emprestimo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Emprestimos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Emprestimo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="col-sm-9">
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
            <th scope="row"><?= __('Identificador Livro') ?></th>
            <td><?= $this->Number->format($emprestimo->identificador_livro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Emprestimo') ?></th>
            <td><?= h($emprestimo->data_emprestimo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Entrega') ?></th>
            <td><?= h($emprestimo->data_entrega) ?></td>
        </tr>
    </table>
</div>
</div>
</div>
