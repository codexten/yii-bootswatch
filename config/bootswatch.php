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
                    'pathMap' => [
                        '@app/views/layouts' => [
                            '@codexten/yii/bootswatch/views/layouts',
                        ],
                    ],
                    'assets' => [
                        \codexten\yii\bootswatch\BootswatchAsset::class,
                    ],
                ],
            ],
        ],
    ],
];