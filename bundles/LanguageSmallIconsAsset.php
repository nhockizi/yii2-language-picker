<?php

namespace nhockizi\languagepicker\bundles;

use yii\web\AssetBundle;

class LanguageSmallIconsAsset extends AssetBundle {

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/nhockizi/yii2-language-picker/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'stylesheets/language-picker.min.css',
        'stylesheets/flags-small.min.css',
    ];

}
