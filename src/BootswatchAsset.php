<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 24/2/19
 * Time: 10:32 PM
 */

namespace codexten\yii\bootswatch;

use yii\web\AssetBundle;

class BootswatchAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootswatch';
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

    /**
     * Initialize the class properties depending on the current active theme.
     *
     * When debug mode is disabled, the minified version of the css is used.
     *
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath = $this->sourcePath . DIRECTORY_SEPARATOR . \Yii::$app->params['bootswatch.theme'];

        $this->css = [
            'bootstrap.min.css',
        ];
        // optimized asset publication : only publish bootswatch theme folders and font folder.
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            if (is_dir($from)) {
                $name = pathinfo($from, PATHINFO_BASENAME);

                return !in_array($name,
                    ['2', 'api', 'assets', 'bower_components', 'tests', 'help', 'global', 'default']);
            } else {
                $ext = pathinfo($from, PATHINFO_EXTENSION);

                return in_array($ext, ['css', 'eot', 'svg', 'ttf', 'woff', 'woff2']);
            }
        };
        parent::init();
    }
}