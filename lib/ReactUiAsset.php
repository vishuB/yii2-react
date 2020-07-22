<?php
namespace vishuB\react;

use yii\web\AssetBundle;

/**
 * Class ReactUiAsset
 * @package vishuB\react
 */
class ReactUiAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__ . '/assets';

    public $js = [
        YII_ENV_DEV ?
            'reactUi.js' : 'reactUi.min.js'
    ];

    public $depends = [
        'vishuB\react\ReactAsset'
    ];
}
