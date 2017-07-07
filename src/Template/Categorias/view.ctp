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
                <li><?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Deletar Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $categoria->id)]) ?> </li>
                <li><?= $this->Html->link(__('Listar Categorias'), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?> </li>
                <!-- <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li> -->
            </ul>
        </div>
        <div class="col-sm-9">
            <h3><?= h($categoria->id) ?></h3>
            <table class="table table-hover">
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
                <h4><?= __('Relação Livros') ?></h4>
                <?php if (!empty($categoria->livros)): ?>
                <table class="table table-bordered">
                    <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Titulo') ?></th>
                        <th scope="col"><?= __('Isbn') ?></th>
                        <th scope="col"><?= __('Edição') ?></th>
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
                            <?= $this->Html->link(__(' Visualizar'), ['controller' => 'Livros', 'action' => 'view', $livros->id], ['class' => 'fa fa-eye btn btn-info']) ?>
                            <?= $this->Html->link(__(' Editar'), ['controller' => 'Livros', 'action' => 'edit', $livros->id], ['class' => 'fa fa-pencil-square btn btn-default']) ?>
                            <?= $this->Form->postLink(__(' Deletar'), ['controller' => 'Livros', 'action' => 'delete', $livros->id], ['class' => 'fa fa-trash btn btn-danger'], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $livros->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
