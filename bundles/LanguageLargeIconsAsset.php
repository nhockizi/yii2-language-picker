<?php

namespace nhockizi\languagepicker\bundles;

use yii\web\AssetBundle;

class LanguageLargeIconsAsset extends AssetBundle {

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/nhockizi/yii2-language-picker/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'stylesheets/language-picker.min.css',
        'stylesheets/flags-large.min.css',
    ];

}
