<?php
/**
  * @var \App\View\AppView $this
  */
    echo $this->Flash->render('positive')
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <!-- <li class="heading"><?= __('Actions') ?></li> -->
                <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
            </ul>
        </div>
        <div class="col-sm-9">
            <h3><?= h($user->id) ?></h3>
            <table class="table table-hover">
                <tr>
                    <th scope="row"><?= __('Nome') ?></th>
                    <td><?= h($user->nome) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Matricula') ?></th>
                    <td><?= h($user->matricula) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
              <!--   <tr>
                    <th scope="row"><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr> -->
                <tr>
                    <th scope="row"><?= __('Role') ?></th>
                    <td><?= h($user->role) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
