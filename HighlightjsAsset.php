<?php
namespace developeruz\shortcode;

use yii\web\AssetBundle;

class HighlightjsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/components/highlightjs';

    public $js = ['highlight.pack.js'];
    public $css = ['styles/default.css'];
} 