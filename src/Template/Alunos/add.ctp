<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Add Aluno') ?></legend>
        <?php
            echo $this->Form->control('curso');
            echo $this->Form->control('periodo');
            echo $this->Form->control('email');
            echo $this->Form->control('endereco');
            echo $this->Form->control('contato');
            echo $this->Form->control('id_pessoa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
