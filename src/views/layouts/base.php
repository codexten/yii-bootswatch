<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 24/2/19
 * Time: 7:54 PM
 */

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@codexten/yii/web/views/layouts/base.php')
?>

    <div class="wrap">

        <?= $this->render('@app/views/layouts/blocks/topMenu.php') ?>

        <div class="container" style="padding-top: 75px">

            <?= $content ?>

        </div>
    </div>


<?= $this->render('@app/views/layouts/blocks/footer.php') ?>

<?php $this->endContent() ?>