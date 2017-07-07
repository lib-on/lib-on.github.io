<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav" id="actions-sidebar">
            <ul class="side-nav">
                <!-- <li class="heading"><?= __('Actions') ?></li> -->
                <li><?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $emprestimo->id],
                        ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $emprestimo->id)]
                    )
                ?></li>
                <li><?= $this->Html->link(__('Listar Emprestimos'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-6">
            <div class="placeholdered">                
            <?= $this->Form->create($emprestimo) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Editar Emprestimo') ?></legend>
                <?php
                    /*echo $this->Form->control('livro_id', ['options' => $livros]);
                    echo $this->Form->control('id_usuario');
                    echo $this->Form->control('identificador_livro');*/
                    echo $this->Form->control('data_emprestimo');
                    echo $this->Form->control('data_entrega', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'col-md-offset-5 col-md-2 btn btn-primary']) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    
    .place {
        font-size: 1.5em;
    }
    .font {
        text-align: center;
        font-size: 1.5em;
    }
    .placeholdered {
        font-size: 1.5em;
    }

</style>