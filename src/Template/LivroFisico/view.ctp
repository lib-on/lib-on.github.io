<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Livro Fisico'), ['action' => 'edit', $livroFisico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Livro Fisico'), ['action' => 'delete', $livroFisico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livroFisico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Livro Fisico'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro Fisico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="col-sm-9">
    <h3><?= h($livroFisico->id) ?></h3>
    <table class="table table-hover">
        <tr>
            <th scope="row"><?= __('Livro') ?></th>
            <td><?= $livroFisico->has('livro') ? $this->Html->link($livroFisico->livro->identificador, ['controller' => 'Livros', 'action' => 'view', $livroFisico->livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Livro') ?></th>
            <td><?= $this->Number->format($livroFisico->codigo_livro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alugado') ?></th>
            <td><?= $livroFisico->alugado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
</div>
</div>
