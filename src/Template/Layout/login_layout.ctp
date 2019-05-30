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
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php //= $this->Html->css('base.css') ?>
    <?= $this->Html->css('/vendor/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/vendor/font-awesome/css/font-awesome.min.css') ?>
    <?= $this->Html->css('/vendor/linearicons/style.css') ?>
    <?= $this->Html->css('/vendor/chartist/css/chartist-custom.css') ?>
    <?= $this->Html->css('main.css') ?>
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="/geu/img/apple-icon.png">
    <?= $this->Html->meta(
        'favicon.png',
        '/img/favicon.png',
        ['type' => 'icon', 'sizes'=>'96x96']
    );
    ?>
    <?php //= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <!-- MAIN -->
    <?= $this->element('content') ?>
    <!-- END MAIN -->

    <div class="clearfix"></div>

</body>
<!--<body>
    <div class="container clearfix">
        <?php /*= $this->fetch('content') */?>
    </div>
    <footer>
    </footer>
</body>-->
</html>
