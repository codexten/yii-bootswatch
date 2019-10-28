<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 27/2/19
 * Time: 11:06 AM
 */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<?php
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse',
    ],
]); ?>

<?= Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => Yii::t('bootswatch', 'Home'), 'url' => ['/site/index']],
        [
            'label' => Yii::t('app', 'Signup'),
            'url' => Yii::$app->user->registerUrl,
            'visible' => Yii::$app->user->isGuest,
        ],
        [
            'label' => Yii::t('bootswatch', 'Login'),
            'url' => Yii::$app->user->loginUrl,
            'visible' => Yii::$app->user->isGuest,
        ],
        [
            'label' => Yii::t('app', 'Logout'),
            'url' => Yii::$app->user->logoutUrl,
            'visible' => !Yii::$app->user->isGuest,
        ],
    ],
]); ?>

<?php NavBar::end(); ?>
