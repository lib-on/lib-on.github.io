<?php
/**
  * @var \App\View\AppView $this
  */
    $this->assign('title', 'Acervo');
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
         <!--li class="heading"><?= __('Actions') ?></li-->
        <li><?= $this->Form->postLink(
                __(' Deletar'),
                ['action' => 'delete', $livroFisico->id],
                ['class' => 'fa fa-trash'],
                ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $livroFisico->id)]
            ) 
        ?></li>
        <li><?= $this->Html->link(__(' Listar Livro Fisico'), ['action' => 'index'], ['class' => 'fa fa-server']) ?></li>
        <li><?= $this->Html->link(__(' Listar Livros'), ['controller' => 'Livros', 'action' => 'index'], ['class' => 'fa fa-server']) ?></li>
        <li><?= $this->Html->link(__(' Novo Livro'), ['controller' => 'Livros', 'action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li>
    </ul>
    </div>
        <div class="col-sm-9 col-sm-6">
            <div class="placeholdered">
            <?= $this->Form->create($livroFisico) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Editar Livro Fisico') ?></legend>
                <?php
                    echo $this->Form->control('livros_id', ['options' => $books]);
                    echo $this->Form->control('alugado');
                    echo $this->Form->control('codigo_livro' , ['class' => 'form-control', 'placeholder' => 'Digite o codigo do livro']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'col-md-offset-5 col-md-2 btn btn-primary']) ?>
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

