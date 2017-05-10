<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Livro'), ['action' => 'edit', $livro->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Livro'), ['action' => 'delete', $livro->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Livro'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="livro view large-9 medium-8 columns content">
    <h3><?= h($livro->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('TITULO') ?></th>
            <td><?= h($livro->TITULO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ISBN') ?></th>
            <td><?= h($livro->ISBN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AUTOR') ?></th>
            <td><?= h($livro->AUTOR) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($livro->ID) ?></td>
        </tr>
    </table>
</div>
