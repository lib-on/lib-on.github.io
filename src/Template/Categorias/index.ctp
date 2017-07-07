<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav" id="actions-sidebar">
            <ul class="nav nav-pills nav-stacked">
                <!-- <li class="heading"><?= __('Actions') ?></li> -->
                <li><?= $this->Html->link(__(' Nova Categoria'), ['action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li>
                <li><?= $this->Html->link(__(' Listar Livros'), ['controller' => 'Livros', 'action' => 'index'], ['class' => 'fa fa-server']) ?></li>
                <li><?= $this->Html->link(__(' Novo Livro'), ['controller' => 'Livros', 'action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <h3><?= __('Categorias') ?></h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('identificador') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categorias as $categoria): ?>
                    <tr>
                        <td><?= $this->Number->format($categoria->id) ?></td>
                        <td><?= $this->Number->format($categoria->identificador) ?></td>
                        <td><?= h($categoria->descricao) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__(' Visualizar'), ['action' => 'view', $categoria->id], ['class' => 'fa fa-eye btn btn-info']) ?>
                            <?= $this->Html->link(__(' Editar'), ['action' => 'edit', $categoria->id], ['class' => 'fa fa-pencil-square btn btn-default']) ?>
                            <?= $this->Form->postLink(__(' Deletar'), ['action' => 'delete', $categoria->id], ['class' => 'fa fa-trash btn btn-danger'], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $categoria->id)]) ?>
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
