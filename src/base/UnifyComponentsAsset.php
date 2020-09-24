<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

use yii\web\AssetBundle;
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyComponentsAsset extends UnifyAsset
{
    public $css = [
        'assets/css/unify-components.css',
    ];

    public $depends = [
        UnifyCoreAsset::class
    ];
}