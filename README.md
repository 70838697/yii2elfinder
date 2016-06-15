I'v tested many yii2 elfinder on git hub. Either it is harded to use, or has no detailed instructions until I found philippfrenzel's version.
It worked!
I did some work to make it work with the latest elFinder-2.1.12.
The old version is not right with local zh_CN.

yii2elfinder
============

Thanks to:
https://github.com/Studio-42/elFinder

Thanks to:
zybodya for the current yii version
philippfrenzel  for the current yii version

yii2elfinder
============

Intro: The old version could not be used, as it's completly not working with the latest jquery version! So
apart from the action, i had to change everything;)

This extension allows you to integrate ElFinder file manager into your Yii web site's pages. Comparing with elfinder-widget extension this one is implemented with an attempt to provide a more flexible way to configure both ElFinder's client and connector. The extension also relies on the latest release of ElFinder 2.0-rc1 (10th of April, 2012).

How to install:
yii2elfinder needs yii-jui at https://github.com/yiisoft/yii2-jui which depends on Jquery UI 1.11 https://blog.jqueryui.com/2014/06/jquery-ui-1-11-0/.

You can install this package manually by downloading the ziped file, extracting it under verndor/philippfrenze. 
Add two line to your config/web.php

```php
    'aliases' => [
        '@yii2elfinder' => '@vendor/yii2elfinder',
        '@yii/jui' => '@vendor/yiisoft/yii2-jui',
    ],
```


Add this to your composer.json require section

```json
  "70838697/yii2elfinder": "dev-master",
```

After that add into your controller the following function

```php
public function actions()
  {
    return array(
      'connector' => array(
        'class' => 'yii2elfinder\ConnectorAction',
        'clientOptions'=>array(
          'locale' => '',
          'debug'  => false,
            'roots'  => array(
                array(
                    'driver' => 'LocalFileSystem',
                    'path'   => dirname(__DIR__).'/../www/img/cms/',
                    'URL'    => '',
                )
            )   
        )
      )
    );
  }
```

And finaly the view should look like this:

```php

use yii\helpers\Html;
use yii2elfinder\yii2elfinder;

/**
 * @var yii\base\View $this
 */

$this->title = 'File Manager';

?>

<h1><?php echo Html::encode($this->title); ?></h1>

<?php
echo yii2elfinder::widget(
  array(
    'connectorRoute' => 'site/connector',
  )
);
?>
```
