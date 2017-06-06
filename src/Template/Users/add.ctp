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
                <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>

                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control']);
                    echo $this->Form->control('matricula', ['class' => 'form-control']);
                    echo $this->Form->control('email', ['class' => 'form-control']);
                    echo $this->Form->control('username', ['class' => 'form-control']);
                    echo $this->Form->control('password', ['class' => 'form-control']);
                    echo $this->Form->control('role', [
                                            'options' => ['Students' => 'Aluno',
                                                'Employee' => 'Administrador',
                                                'Teacher' => 'Professor',

                                                'Librarian' => 'bibliotecária'], 'class' => 'form-control' ]);
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'col-md-offset-11 col-md-1 btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

