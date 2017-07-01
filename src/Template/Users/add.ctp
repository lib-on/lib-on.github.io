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
                <!-- <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li> -->
            </ul>
        </div>
        <div class="col-sm-9 col-sm-6">
                <div class="placeholdered">
            <?= $this->Form->create($user) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Cadastrar Usuário') ?></legend>
                    

                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control my-input', 'placeholder' => 'Digite seu nome']);
                    echo $this->Form->control('matricula', ['class' => 'form-control', 'placeholder' => 'Digite matricula']);
                    echo $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Digite email']);
                    echo $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite seu usuario']);
                    echo $this->Form->control('password', ['class' => 'form-control', 'placeholder' => '*****']);
                    echo $this->Form->control('Função', [
                                            'options' => ['Students' => 'Aluno',
                                                'Employee' => 'Administrador',
                                                'Teacher' => 'Professor',

                                                'Librarian' => 'bibliotecária'], 'class' => 'form-control' ]);
                ?>
            </fieldset>
            <br>
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