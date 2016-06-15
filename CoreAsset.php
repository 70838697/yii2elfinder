<?php

namespace yii2elfinder;

use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class CoreAsset extends AssetBundle
{
    public $sourcePath = '@yii2elfinder/assets';
    
    public $css = [
        'css/elfinder.min.css'     ,
        'css/theme.css'     ,
    ];
    
    public $js = [
        "js/elfinder.min.js",
        "js/i18n/elfinder.zh_CN.js",
        "js/proxy/elFinderSupportVer1.js"
    ];
    
    public $depends = [
        'yii\jui\JuiAsset'
    ];
}
