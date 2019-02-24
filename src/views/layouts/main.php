<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 24/2/19
 * Time: 7:44 PM
 */

/* @var $this \yii\web\View */

use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/* @var $content string */

$this->beginContent('@app/views/layouts/base.php')
?>
    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?php if (Yii::$app->session->hasFlash('alert')): ?>
            <?= \yii\bootstrap\Alert::widget([
                'body' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                'options' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
            ]) ?>
        <?php endif; ?>


        <?= $content ?>

    </div>
<?php $this->endContent() ?>