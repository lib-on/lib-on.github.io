<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Editora'), ['action' => 'edit', $editora->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Editora'), ['action' => 'delete', $editora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $editora->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Editoras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Editora'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="editoras view col-md-offset-0 columns content">
    <h3><?= h($editora->id) ?></h3>
    <table class="table table-hover">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($editora->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($editora->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($editora->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($editora->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($editora->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Livros') ?></h4>
        <?php if (!empty($editora->livros)): ?>
        <table  class="table table-bordered">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Isbn') ?></th>
                <th scope="col"><?= __('Edicao') ?></th>
                <th scope="col"><?= __('Autor') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Editora Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($editora->livros as $livros): ?>
            <tr>
                <td><?= h($livros->id) ?></td>
                <td><?= h($livros->titulo) ?></td>
                <td><?= h($livros->isbn) ?></td>
                <td><?= h($livros->edicao) ?></td>
                <td><?= h($livros->autor) ?></td>
                <td><?= h($livros->categoria_id) ?></td>
                <td><?= h($livros->editora_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Livros', 'action' => 'view', $livros->id], ['class' => 'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Livros', 'action' => 'edit', $livros->id], ['class' => 'btn btn-default']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Livros', 'action' => 'delete', $livros->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $livros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
