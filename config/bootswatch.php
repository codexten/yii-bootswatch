<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 24/2/19
 * Time: 7:27 PM
 */

use codexten\yii\bootswatch\BootswatchAsset;
use codexten\yii\bootswatch\BootswatchTheme;

return [
    'components' => [
        'themeManager' => [
            'defaultTheme' => 'bootswatch',
            'themes' => [
                'bootswatch' => [
                    'class' => BootswatchTheme::class,
                    'assets' => [
                        BootswatchAsset::class,
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
                    '@app/widgets/views' => [
                        '@codexten/yii/bootswatch/widgets/views',
                    ],
                ],
            ],
        ],
    ],
];
