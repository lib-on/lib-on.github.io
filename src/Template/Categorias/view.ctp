<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorias view large-9 medium-8 columns content">
    <h3><?= h($categoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($categoria->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identificador') ?></th>
            <td><?= $this->Number->format($categoria->identificador) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Livros') ?></h4>
        <?php if (!empty($categoria->livros)): ?>
        <table cellpadding="0" cellspacing="0">
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
            <?php foreach ($categoria->livros as $livros): ?>
            <tr>
                <td><?= h($livros->id) ?></td>
                <td><?= h($livros->titulo) ?></td>
                <td><?= h($livros->isbn) ?></td>
                <td><?= h($livros->edicao) ?></td>
                <td><?= h($livros->autor) ?></td>
                <td><?= h($livros->categoria_id) ?></td>
                <td><?= h($livros->editora_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Livros', 'action' => 'view', $livros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Livros', 'action' => 'edit', $livros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Livros', 'action' => 'delete', $livros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
