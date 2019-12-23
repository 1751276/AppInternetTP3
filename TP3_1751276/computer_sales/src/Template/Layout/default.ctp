<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        echo $this->Html->script([
            'https://code.jquery.com/jquery-1.12.4.js',
            'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
            'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.js',
            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'
                ], ['block' => 'scriptLibraries']
        );
        ?>

    <?php
        echo $this->Html->css([
            'base.css',
            'style.css',
            'bootstrap.min.css',
            'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
            'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'
        ]);
        ?>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius: 0; margin-bottom: 0;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <?= $this->Html->link(__('Home'), ['controller' => 'Products', 'action' => 'index'], ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?= $this->Html->link(__('Products'), ['controller' => 'Products', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('New Products'), ['controller' => 'Products', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('Reviews'), ['controller' => 'Reviews', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('New Reviews'), ['controller' => 'Reviews', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('New Users'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('Files'), ['controller' => 'Files', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('New Files'), ['controller' => 'Files', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('Tags'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('New Tags'), ['controller' => 'Tags', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('Sales'), ['controller' => 'Sales', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('New Sales'), ['controller' => 'Sales', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('Places'), ['controller' => 'Places', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('À propos'), ['controller' => 'Apropos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                        
                </li>
            </ul>
            <ul class="navbar-nav ml-auto navbar-right">
            <li class="nav-item">
                    <?= $this->Html->link('English', ['action' => 'changeLang', 'en_US'], ['class' => 'nav-link'], ['escape' => false]); ?>
                </li>
           
            <li class="nav-item">
                    <?= $this->Html->link('Français', ['action' => 'changeLang', 'fr_CA'], ['class' => 'nav-link'], ['escape' => false]); ?>
                </li>

                

                <li class="nav-item">
                <?= $this->Html->link(__('Romanian'), ['action' => 'changeLang', 'ro_RO'], ['class' => 'nav-link'], ['escape' => false]); ?>
                </li>

            

                <span class="border-right"></span>

                <li class="nav-item"><?php
                $loguser = $this->request->session()->read('Auth.User');
                if ($loguser) {
                    $user = $loguser['email'];
                    echo $this->Html->link($user . ' Logout', ['controller' => 'Users', 'action' => 'logout']);
                } else {
                    echo $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']);
                }
                ?></li>
            </ul>
        </div>
 </nav>
        
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
   
    </footer>
    <?= $this->fetch('scriptLibraries') ?>
        <?= $this->fetch('script'); ?>
        <?= $this->fetch('scriptBottom') ?> 
</body>
</html>
