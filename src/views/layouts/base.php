<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 24/2/19
 * Time: 7:54 PM
 */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@app/views/layouts/_clear.php')
?>
    <div class="wrap">

        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]); ?>

        <?= Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => Yii::t('bootswatch', 'Home'), 'url' => ['/site/index']],
                ['label' => Yii::t('bootswatch', 'About'), 'url' => ['/page/view', 'slug' => 'about']],
                ['label' => Yii::t('bootswatch', 'Articles'), 'url' => ['/article/index']],
                ['label' => Yii::t('bootswatch', 'Contact'), 'url' => ['/site/contact']],
                [
                    'label' => Yii::t('bootswatch', 'Signup'),
                    'url' => ['/user/sign-in/signup'],
                    'visible' => Yii::$app->user->isGuest,
                ],
                [
                    'label' => Yii::t('bootswatch', 'Login'),
                    'url' => ['/user/sign-in/login'],
                    'visible' => Yii::$app->user->isGuest,
                ],
                [
                    'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
                    'visible' => !Yii::$app->user->isGuest,
                    'items' => [
                        [
                            'label' => Yii::t('bootswatch', 'Settings'),
                            'url' => ['/user/default/index'],
                        ],
                        [
                            'label' => Yii::t('bootswatch', 'Backend'),
                            'url' => Yii::getAlias('@adminUrl'),
                            'visible' => Yii::$app->user->can('manager'),
                        ],
                        [
                            'label' => Yii::t('bootswatch', 'Logout'),
                            'url' => ['/user/sign-in/logout'],
                            'linkOptions' => ['data-method' => 'post'],
                        ],
                    ],
                ],
            ],
        ]); ?>
        <?php NavBar::end(); ?>

        <?= $content ?>

    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
<?php $this->endContent() ?>