<?php

/* @var  $this \yii\web\View */
/* @var  $content string */

$this->registerMetaTag([
    'http-equiv' => 'X-UA-Compatible',
    'content' => 'IE=edge',
]);

$this->registerMetaTag([
    'name' => 'viewport',
    'content' => 'width=device-width, initial-scale=1   ',
]);
?>

<?php $this->beginContent('@codexten/yii/web/views/layouts/_clear.php'); ?>

<?= $content ?>

<?php $this->endContent(); ?>