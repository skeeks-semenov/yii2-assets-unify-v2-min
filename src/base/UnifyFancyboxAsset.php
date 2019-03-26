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
class UnifyFancyboxAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/fancybox/jquery.fancybox.min.css',
    ];

    public $js = [
        'assets/vendor/fancybox/jquery.fancybox.min.js',
    ];

    public $depends = [
        YiiAsset::class,
    ];
}