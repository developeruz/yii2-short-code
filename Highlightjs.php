<?php
namespace developeruz\shortcode;

use yii\base\View;
use yii\base\ViewEvent;

class Highlightjs
{
    public static function shortCode($event)
    {
        $view = $event->sender;
        HighlightjsAsset::register($view);
        $view->registerJs("hljs.initHighlightingOnLoad();");

        if(isset($event->output)){
            $content = $event->output;
            $event->output = preg_replace('/\[code\](.*?)\[\/code\]/is','<pre><code class="php">$1</code></pre>',$content);
        }
        return true;
    }
}