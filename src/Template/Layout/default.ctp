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

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="message">
        
    </div>
    <nav class="navbar navbar-default" id="navigator">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">LIB-on</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'index'])?></li>
            <li><?= $this->Html->link(__('Livraria'), ['controller' => 'livros', 'action' => 'index'])?></li>
            <li><a href="#">Equipe</a></li>
            <li><a href="#">Emprestimos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- <form name="form-search" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" class="form">
                <input type="text" name="palavra" class="form-control" />
                <input type="submit"  value="Buscar" class="btn btn-default" />
            </form> -->

            <li><?= $this->Html->link(__('Login'), ['controller' => 'users', 'action' => 'login'])?></li>
          </ul>
        </div>
      </div>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="content">
        <?= $this->fetch('content') ?>
    </div>
    <style type="text/css">
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
    </style>
    <footer>
    </footer>
    
</body>
</html>
