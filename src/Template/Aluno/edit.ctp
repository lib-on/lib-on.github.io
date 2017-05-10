<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aluno->MATRICULA],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->MATRICULA)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aluno'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aluno form large-9 medium-8 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Edit Aluno') ?></legend>
        <?php
            echo $this->Form->control('CURSO');
            echo $this->Form->control('PERIODO');
            echo $this->Form->control('TURNO');
            echo $this->Form->control('NOME');
            echo $this->Form->control('LIVRO_ID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
