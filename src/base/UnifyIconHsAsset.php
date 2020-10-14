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
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyIconHsAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/icon-hs/style.css',
    ];

    public $js = [
    ];


    public $depends = [
    ];
    
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $appendTimestamp = \Yii::$app->assetManager->appendTimestamp;
        \Yii::$app->assetManager->appendTimestamp = false;

        $href = self::getAssetUrl('assets/vendor/icon-hs/fonts/hs-icons.ttf?xa77py');
        \Yii::$app->view->registerLinkTag([
            'rel'         => 'preload',
            'href'        => $href,
            'as'          => 'font',
            'type'        => 'font/ttf',
            'crossorigin' => 'crossorigin',
        ]);

        \Yii::$app->assetManager->appendTimestamp = $appendTimestamp;
    }
}