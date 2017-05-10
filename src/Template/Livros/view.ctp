<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Livro'), ['action' => 'edit', $livro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Livro'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emprestimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="livros view large-9 medium-8 columns content">
    <h3><?= h($livro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($livro->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= h($livro->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edicao') ?></th>
            <td><?= h($livro->edicao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor') ?></th>
            <td><?= h($livro->autor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $livro->has('categoria') ? $this->Html->link($livro->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $livro->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Editora') ?></th>
            <td><?= $livro->has('editora') ? $this->Html->link($livro->editora->id, ['controller' => 'Editoras', 'action' => 'view', $livro->editora->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($livro->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Emprestimos') ?></h4>
        <?php if (!empty($livro->emprestimos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Livro Id') ?></th>
                <th scope="col"><?= __('Id Usuario') ?></th>
                <th scope="col"><?= __('Codigo Livros') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($livro->emprestimos as $emprestimos): ?>
            <tr>
                <td><?= h($emprestimos->livro_id) ?></td>
                <td><?= h($emprestimos->id_usuario) ?></td>
                <td><?= h($emprestimos->codigo_livros) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Emprestimos', 'action' => 'view', $emprestimos->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Emprestimos', 'action' => 'edit', $emprestimos->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emprestimos', 'action' => 'delete', $emprestimos->], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimos->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
