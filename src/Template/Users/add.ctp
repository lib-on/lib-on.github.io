<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
            </ul>
<<<<<<< HEAD
            
        </div>       
    
=======
        </div>
>>>>>>> 070e55b3ea6efb3f42263f37e69e18184c653320

        <div class="col-sm-9">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
<<<<<<< HEAD
                <form class="form">
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control', 'placeholder' => 'nome']);
                    echo $this->Form->control('matricula', ['class' => 'form-control', 'placeholder' => 'matricula']);
                    echo $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'email']);
                    echo $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'usuario']);
                    echo $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'senha']);
                    echo "<br>";
=======
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control']);
                    echo $this->Form->control('matricula', ['class' => 'form-control']);
                    echo $this->Form->control('email', ['class' => 'form-control']);
                    echo $this->Form->control('username', ['class' => 'form-control']);
                    echo $this->Form->control('password', ['class' => 'form-control']);
>>>>>>> 070e55b3ea6efb3f42263f37e69e18184c653320
                    echo $this->Form->control('role', [
                                            'options' => ['Students' => 'Aluno',
                                                'Employee' => 'Administrador',
                                                'Teacher' => 'Professor',
<<<<<<< HEAD
                                                'Librarian' => 'bibliotecária'], ['class' => 'form-control']]);
                ?>
                    
                </form>
                <br>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
=======
                                                'Librarian' => 'bibliotecária'], 'class' => 'form-control' ]);
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
>>>>>>> 070e55b3ea6efb3f42263f37e69e18184c653320
