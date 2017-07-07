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
                <li><?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $user->id],
                        ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $user->id)]
                    )
                ?></li>
                <li><?= $this->Html->link(__('Listar Users'), ['action' => 'index']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-6">
            <div class="placeholdered">
            <?= $this->Form->create($user) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Editar User') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control']);
                    echo $this->Form->control('matricula', ['class' => 'form-control']);
                    echo $this->Form->control('email', ['class' => 'form-control']);
                    echo $this->Form->control('username', ['class' => 'form-control']);
                    // echo $this->Form->control('password', ['class' => 'form-control']);
                    echo $this->Form->control('role', ['class' => 'form-control']);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['type'=>'submit', 'class'=>'col-md-offset-5 col-md-2 btn btn-primary']); ?>
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