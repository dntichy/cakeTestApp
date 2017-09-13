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

$cakeDescription = 'testCakeApp';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('home.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="top-bar expanded" data-topbar role="navigation">
    <ul class="title-area large-3 medium-4 columns">
        <li class="name">
            <h1><a href="">Controller => <?= $this->fetch('title') ?></a></h1>
        </li>
    </ul>
    <div class="top-bar-section">
        <ul class="right">
            <?php
            if ($this->request->Session()->read('Auth.User')) {
                echo '<li><a target="" href="/cakeTestApp/users/logout">Logout</a></li>';
            } else {
                echo "<li><a href='/cakeTestApp/users/login'>Login</a></li>";
                echo '<li><a target="" href="/cakeTestApp/users/register">Registration</a></li>';
                //do not login
            }
            ?>


        </ul>
    </div>
</nav>
<?= $this->Flash->render() ?>
<div class="container clearfix">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">

        <ul class="side-nav">
            <li><?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'display', 'home']); ?>
            </li>
            <li><?= $this->Html->link(__('Users'), ['controller' => 'users', 'action' => 'index']); ?>
            </li>
            <li><?= $this->Html->link(__('News'), ['controller' => 'news', 'action' => 'index']) ?>
            </li>

        </ul>


    </nav>
    <div class="users index large-9 medium-8 columns content">
        <?= $this->fetch('content') ?>
    </div>
</div>
<footer>
</footer>
</body>
</html>
