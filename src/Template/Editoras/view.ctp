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
                <li><?= $this->Html->link(__('Edit Editora'), ['action' => 'edit', $editora->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Deletar Editora'), ['action' => 'delete', $editora->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $editora->id)]) ?> </li>
                <li><?= $this->Html->link(__('Listar Editoras'), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Nova Editora'), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
            </ul>
        </div>
        <div class="col-sm-9">
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
                    <th scope="row"><?= __('Endereço') ?></th>
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
                <h4><?= __('Relação Livros') ?></h4>
                <?php if (!empty($editora->livros)): ?>
                <table  class="table table-bordered">
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
                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Livros', 'action' => 'view', $livros->id], ['class' => 'btn btn-info']) ?>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'Livros', 'action' => 'edit', $livros->id], ['class' => 'btn btn-default']) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Livros', 'action' => 'delete', $livros->id], ['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $livros->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
