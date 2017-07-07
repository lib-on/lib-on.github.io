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
                <!-- <li><?= $this->Html->link(__('Editar Livro'), ['action' => 'edit', $livro->id]) ?> </li> -->

                <li><?= $this->Form->postLink(__(' Deletar Livro'), ['action' => 'delete', $livro->id], ['class' => 'fa fa-trash-o'], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $livro->id)]) ?> </li>
                <li><?= $this->Html->link(__(' Listar Livros'), ['action' => 'index'], ['class' => 'fa fa-server']) ?> </li>
                <li><?= $this->Html->link(__(' Novo Livro'), ['action' => 'add'], ['class' => 'fa fa-plus-square']) ?> </li>

               <!--  <li><?= $this->Html->link(__('Listar Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Nova Categoria'), ['controller' => 'Categorias', 'action' => 'adicionar']) ?> </li>
                <li><?= $this->Html->link(__('Listar Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Nova Editora'), ['controller' => 'Editoras', 'action' => 'adicionar']) ?> </li>
                <li><?= $this->Html->link(__('Listar Emprestimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo Emprestimo'), ['controller' => 'Emprestimos', 'action' => 'adicionar']) ?> </li> -->
            </ul>
        </div>
        <div class="col-sm-9">
            <h3><?= h($livro->id) ?></h3> 
            <table class="table table-hover">
                <tr>
                    <th scope="row"><?= __('Titulo') ?></th>
                    <td><?= h($livro->titulo) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Isbn') ?></th>
                    <td><?= h($livro->isbn) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Edição') ?></th>
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
                <h4><?= __('Relação Emprestimos') ?></h4>
                <?php if (!empty($livro->emprestimos)): ?>
                <table  class="table table-bordered">
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
                        <td><?= h($emprestimos->codigo_livro) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__(' Visualizar'), ['controller' => 'Emprestimos', 'action' => 'view', $emprestimos->id], ['class' => 'fa fa-eye btn btn-info']) ?>
                            <?= $this->Html->link(__(' Editar'), ['controller' => 'Emprestimos', 'action' => 'edit', $emprestimos->id], ['class' => 'fa fa-pencil-square btn btn-default']) ?>
                            <?= $this->Form->postLink(__(' Deletar'), ['controller' => 'Emprestimos', 'action' => 'delete', $emprestimos->id], ['class' => 'fa fa-trash btn btn-danger'], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $emprestimos->id)]) ?>
                        </td>
                    </tr>
                   <?php endforeach; ?> 
                </table>
               <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</div>
