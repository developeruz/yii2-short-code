yii2-short-code - подсветка кода на основе Highlightjs для проектов на Yii2
===============

Установка:
```bash
$ php composer.phar require developeruz/yii2-short-code "*"
```

###Использование###
В action контроллера прописываем событие:
```php
Yii::$app->view->on(View::EVENT_AFTER_RENDER, ['developeruz\shortcode\Highlightjs', 'shortCode']);
```
Теперь после генерации шаблона, поведение будет заменять куски
```
[code]
some code
[/code]
```
на
```
<pre><code class="php">
some code
</code></pre>
```
и подключать файлы Highlightjs. Подробнее об Highlightjs можно почитать на сайте http://highlightjs.org/