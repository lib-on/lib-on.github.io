<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?> -->
    <!-- <?= $this->Html->css('cake.css') ?> -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->script('jquery-3.1.1.js') ?>
    <?= $this->Html->script('typeahead.bundle.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="message">

    </div>
    <nav class="navbar navbar-inverse" id="navigator">
    <?php $loguser = $this->request->session ()->read ( 'Auth.User' );
    ?>
      <div class="container-fluid" id="home">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><b>LIB-on</b></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">

            <li><?php echo $this->Html->link('<i class="fa fa-home fa-lg"></i> ' . 'Home', ($this->fetch('title') === 'index') ? '#home' : '/#home', array (
                    'escape' => false,
                    'id' => 'home-link'

            )); ?></li>

            <!-- <li><?= $this->Html->link(__('Livros'), ['controller' => 'livros', 'action' => 'index'])?></li> -->


            <li><?php echo $this->Html->link ('<i class="fa fa-book fa-lg"></i>' . ' Livros', array (
                                    'controller' => 'livros',
                                    'action' => 'index'
                            ), array (
                                    'escape' => false
                            ) );?></li>


            <!-- <li><?= $this->Html->link(_('Acervo'), ['controller' => 'livro_fisico', 'action' => 'index'])?></li>  -->
            <li><?php echo $this->Html->link ('<i class="fa fa-book fa-lg"></i>' . ' Acervo', array (
                                    'controller' => 'livro_fisico',
                                    'action' => 'index'
                            ), array (
                                    'escape' => false
                            ) );?></li>


            <!-- <li><?= $this->Html->link(_('Emprestimos'), ['controller' => 'emprestimos', 'action' => 'index'])?></li> -->

            <li><?php echo $this->Html->link ('<i class="fa fa-list-alt fa-lg"></i>' . ' Empréstimos', array (
                                    'controller' => 'emprestimos',
                                    'action' => 'index'
                            ), array (
                                    'escape' => false
                            ) );?></li>
            <!-- <li><?= $this->Html->link(_('Usuarios'), ['controller' => 'users', 'action' => 'index'])?></li>
            <li><?= $this->Html->link(_('Editoras'), ['controller' => 'editoras', 'action' => 'index'])?></li>
            <li><?= $this->Html->link(_('Categorias'), ['controller' => 'categorias', 'action' => 'index'])?></li> -->
           <li><?php echo $this->Html->link ('<i class="fa fa fa-list fa-lg"></i>' . ' Categorias', array (
                                    'controller' => 'categorias',
                                    'action' => 'index'
                            ), array (
                                    'escape' => false
                            ) );?></li>


            <li><?php echo $this->Html->link ('<i class="fa fa-reorder fa-lg"></i>' . ' Editoras', array (
                                    'controller' => 'editoras',
                                    'action' => 'index'
                            ), array (
                                    'escape' => false
                            ) );?></li>


            <li><?php
                    echo $this->Html->link ( '<i class="fa fa-hand-peace-o"></i>' . ' Equipe', ($this->fetch ( 'title' ) === 'index') ? '#team' : '/#team', array (
                            'escape' => false,
                            'id' => 'team-link'
                    ) );
                    ?></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- <form name="form-search" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" class="form">
                <input type="text" name="palavra" class="form-control" />
                <input type="submit"  value="Buscar" class="btn btn-default" />
            </form> -->
            <?php 
                if ($loguser) {
                    $user = $loguser['username'] . ' (' . $loguser['role'] . ') ';
                    // echo $user;
               
             ?>
                <ul>
                    
                <li><?php echo $this->Html->link ( '<i class="fa fa-sign-out" aria-hidden="true"></i>' . 'Sair', array (
                                'controller' => 'users',
                                'action' => 'logout'
                            ), array ('escape' => false ) ); ?></li>
                <li><?php echo '<i class="fa fa-id-card" aria-hidden="true"></i> '. $user ?></li>
                </ul>
            
             <?php 
                }else{
             ?>
                    <li><?php echo $this->Html->link ('<i class="fa fa-sign-in fa-xs"></i>' . ' Login', array (
                                    'controller' => 'users',
                                    'action' => 'login'
                            ), array (
                                    'escape' => false
                            ) );
                    ?></li>
            <?php
             }
             ?>
          </ul>
        </div>
      </div>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="content">
        <?= $this->fetch('content') ?>
    </div>
    <style type="text/css">
    body, html {
        /*height: 100%;*/
        /*background-repeat: no-repeat;*/
        background-color: #F9F9F9;
    }
        .formSearch{
            max-width: 250px;
        }
        .btn{
            font-weight: 500;
            height: 30px;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            cursor: default;
        }
        .navbar-inverse {
            background-image: linear-gradient(to bottom, #0B9BA2 0px, #70D8D8 100%);
            background-repeat: repeat-x;
            border-radius: 0px;
            border-color: linear-gradient(to bottom, #0B9BA2 0px, #70D8D8 100%);
        }
        .navbar-nav li{
            font-weight: 400;
            font-style: none;
            font-family: verdana;
            color: #FFF;

        }
        .navbar-right ul li{
            float: right;
            font-weight: 400;
            font-family: verdana;
            list-style: none;
            padding: 15px;
            color: #000;
        }
        .navbar-inverse .navbar-nav>li>a {
            color: #171212;
        }
        .navbar-inverse .navbar-brand {
            color: #FFF;
        }
    </style>
    <footer>
    </footer>

</body>
</html>
