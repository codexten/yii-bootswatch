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
            'defaultTheme' => 'bootswatchFlatly',
            'themes' => [
                'bootswatchFlatly' => [
                    'class' => \codexten\yii\web\Theme::class,
                    'pathMap' => [
                        '@app/views/layouts' => [
                            '@codexten/yii/bootswatch/views/layouts',
                        ],
                    ],
                ],
            ],
        ],
    ],
];