<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 24/2/19
 * Time: 7:27 PM
 */

return [
    'components' => [
        'themeManager' => [
            'defaultTheme' => 'bootswatch',
            'themes' => [
                'bootswatch' => [
                    'class' => \codexten\yii\bootswatch\BootswatchTheme::class,
                    'assets' => [
                        \codexten\yii\bootswatch\BootswatchAsset::class,
                    ],
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => [
                        '@codexten/yii/bootswatch/views',
                    ],
                ],
            ],
        ],
    ],
];