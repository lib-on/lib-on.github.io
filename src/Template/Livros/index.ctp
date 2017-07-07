<?php
/**
  * @var \App\View\AppView $this
  */
    $this->assign('title', 'Liv');
use Cake\ORM\TableRegistry;
?>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav" id="actions-sidebar">
            <ul class="nav nav-pills nav-stacked">
                <!-- <li class="heading"><?= __('Actions') ?></li> -->
                <li><?= $this->Html->link(__(' Novo Livro'), ['action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li>
                <!-- <li><?= $this->Html->link(__('Listar Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li> -->
                <!-- <li><?= $this->Html->link(__('Nova Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li> -->
                <!-- <li><?= $this->Html->link(__('Listar Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?></li> -->
                <!-- <li><?= $this->Html->link(__('Nova Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?></li> -->
                <!-- <li><?= $this->Html->link(__('Listar Emprestimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li> -->
                <!-- <li><?= $this->Html->link(__('Novo Emprestimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li> -->
            </ul>
        </div>
        <div class="col-sm-9">
            <table class="table table-striped table-bordered">
                <thead class="thead-inverse">
                    <tr >
            <h3><?= __('Livros') ?></h3>
                        <!-- <th scope="col"><?= $this->Paginator->sort('Id') ?></th> -->
                        <th scope="col"><?= $this->Paginator->sort('Titulo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Isbn') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Edição') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Autor') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Categoria_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Editora_id') ?></th>
                        <!-- <th scope="col"><?= $this->Paginator->sort('Quantidade') ?></th> -->
                        <th scope="col" class="actions"><?= __('Actions') ?></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($livros as $livro): ?>
                    <tr>
                        <!-- <td><?= $this->Number->format($livro->id) ?></td> -->
                        <td><?= h($livro->titulo) ?></td>
                        <td><?= h($livro->isbn) ?></td>
                        <td><?= h($livro->edicao) ?></td>
                        <td><?= h($livro->autor) ?></td>
                        <td><?= $livro->has('categoria') ? $this->Html->link($livro->categoria->identificador, ['controller' => 'Categorias', 'action' => 'view', $livro->categoria->id]) : '' ?></td>
                        <td><?= $livro->has('editora') ? $this->Html->link($livro->editora->nome, ['controller' => 'Editoras', 'action' => 'view', $livro->editora->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__(' Visualizar'), ['action' => 'view', $livro->id], ['class' => 'fa fa-eye btn btn btn-info']) ?>
                            <?= $this->Html->link(__(' Editar'), ['action' => 'edit', $livro->id], ['class' => 'fa fa-pencil-square btn btn-default']) ?>
                            <?= $this->Form->postLink(__(' Deletar'), ['action' => 'delete', $livro->id], ['class' => 'fa fa-trash btn btn btn-danger'], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $livro->id)]) ?>
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
