<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

use yii\web\YiiAsset;
/**
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyRevolutionAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
        'assets/vendor/revolution-slider/revolution/css/settings.css',
        'assets/vendor/revolution-slider/revolution/css/layers.css',
        'assets/vendor/revolution-slider/revolution/css/navigation.css',
    ];

    public $js = [
        'assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js',
        'assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js',
    ];

    public $depends = [
        YiiAsset::class
    ];
}