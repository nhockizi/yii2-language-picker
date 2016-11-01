<?php

namespace nhockizi\languagepicker\bundles;

use yii\web\AssetBundle;

class LanguagePluginAsset extends AssetBundle {

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/nhockizi/yii2-language-picker/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'javascripts/language-picker.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
