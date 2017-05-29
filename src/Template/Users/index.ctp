<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
<<<<<<< HEAD
    <div class="row content" id="actions-sidebar">
        <div class="col-sm-2 sidenav">
            
            <ul class="nav nav-pills nav-stacked">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('Cadastrar Usuário'), ['action' => 'add']) ?></li>
            </ul>
        </div>
        

        <div class="col-sm-8">
            <h3><?= __('Users') ?></h3>
=======
    <div class="row content">
        <div class="col-sm-3 sidenav" id="actions-sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('Cadastrar usuário'), ['action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <h3><?= __('Usuários') ?></h3>
>>>>>>> 070e55b3ea6efb3f42263f37e69e18184c653320
            <table cellpadding="0" cellspacing="0" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('matricula') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('username') ?></th>
<<<<<<< HEAD
                        <th scope="col"><?= $this->Paginator->sort('password') ?></th>
=======
                        <!-- <th scope="col"><?= $this->Paginator->sort('password') ?></th> -->
>>>>>>> 070e55b3ea6efb3f42263f37e69e18184c653320
                        <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->nome) ?></td>
                        <td><?= h($user->matricula) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->username) ?></td>
<<<<<<< HEAD
                        <td><?= h($user->password) ?></td>
=======
                        <!-- <td><?= h($user->password) ?></td> -->
>>>>>>> 070e55b3ea6efb3f42263f37e69e18184c653320
                        <td><?= h($user->role) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        <td class="actions">
<<<<<<< HEAD
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
=======
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-default']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
>>>>>>> 070e55b3ea6efb3f42263f37e69e18184c653320
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
