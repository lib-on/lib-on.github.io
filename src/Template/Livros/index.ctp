<?php
/**
  * @var \App\View\AppView $this
  */
use Cake\ORM\TableRegistry;
?>
<div class="container-fluid">
    <div class="row content">
        
        <div class="col-sm-3 sidenav" id="actions-sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('New Livro'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Emprestimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
            </ul>
        </div>
    <?php 
        $categories = TableRegistry::get('Categorias');
        $queryCategories = $categories->find();
        $identificator = $queryCategories->select('identificador')->where('id');
     ?>
        <div class="col-sm-9">
            <h3><?= __('Livros') ?></h3>
            <table cellpadding="0" cellspacing="0" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('edicao') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('autor') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('editora_id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($livros as $livro): ?>
                    <tr>
                        <td><?= $this->Number->format($livro->id) ?></td>
                        <td><?= h($livro->titulo) ?></td>
                        <td><?= h($livro->isbn) ?></td>
                        <td><?= h($livro->edicao) ?></td>
                        <td><?= h($livro->autor) ?></td>
                        <td><?= $livro->has('categoria') ? $this->Html->link($livro->categoria->identificador, ['controller' => 'Categorias', 'action' => 'view', $livro->categoria->id]) : '' ?></td>
                        <td><?= $livro->has('editora') ? $this->Html->link($livro->editora->nome, ['controller' => 'Editoras', 'action' => 'view', $livro->editora->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $livro->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livro->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?>
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
    </div>
</div>
