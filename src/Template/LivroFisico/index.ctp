<?php
/**
  * @var \App\View\AppView $this
  */
    $this->assign('title', 'Acervo');
?>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav" id="actions-sidebar">
            <ul class="nav nav-pills nav-stacked">
        <!-- <li class="heading"><?= __('Actions') ?></li> -->
        <li><?= $this->Html->link(__(' Novo Acervo'), ['action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li>
        <li><?= $this->Html->link(__(' Listar Livros'), ['controller' => 'Livros', 'action' => 'index'], ['class' => 'fa fa-server']) ?></li>
        <li><?= $this->Html->link(__(' Novo Livro'), ['controller' => 'Livros', 'action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li> 
    </ul>
</div>
<div class="col-sm-9">
    <table  class="table table-striped table-bordered">
        <thead class="thead-inverse">
            <tr>
    <h3><?= __('Acervo') ?></h3>
                <th scope="col"><?= $this->Paginator->sort('livros_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alugado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_livro') ?></th>
                <!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livroFisico as $livroFisico): ?>
            <tr>
                <td><?= $livroFisico->has('livro') ? $this->Html->link($livroFisico->livro->titulo, ['controller' => 'Livros', 'action' => 'view', $livroFisico->livro->titulo]) : '' ?></td>
                <td><?= h($livroFisico->alugado == 1 ? 'alugado' : '') ?></td>
                <td><?= $this->Number->format($livroFisico->codigo_livro) ?></td>
                <!-- <td class="actions">
                    <?= $this->Html->link(__(' Visualizar'), ['action' => 'view', $livroFisico->id], ['class' => 'fa fa-eye btn btn-info']) ?>
                    <?= $this->Html->link(__(' Editar'), ['action' => 'edit', $livroFisico->id],  ['class' => 'fa fa-pencil-square btn btn-default']) ?>
                    <?= $this->Form->postLink(__(' Deletar'), ['action' => 'delete', $livroFisico->id], ['class' => 'fa fa-trash btn btn-danger'], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $livroFisico->id)]) ?>
                </td> -->
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
