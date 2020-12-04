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
class UnifyIconLineProAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/icon-line-pro/style.css',
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

        $href = self::getAssetUrl('assets/vendor/icon-line-pro/finance/webfont/fonts/finance.woff');
        \Yii::$app->view->registerLinkTag([
            'rel'         => 'preload',
            'href'        => $href,
            'as'          => 'font',
            'type'        => 'font/woff2',
            'crossorigin' => 'crossorigin',
        ]);

        $href = self::getAssetUrl('assets/vendor/icon-line-pro/education/webfont/fonts/education-48.woff');
        \Yii::$app->view->registerLinkTag([
            'rel'         => 'preload',
            'href'        => $href,
            'as'          => 'font',
            'type'        => 'font/woff2',
            'crossorigin' => 'crossorigin',
        ]);
        
        $href = self::getAssetUrl('assets/vendor/icon-line-pro/transport/webfont/fonts/transport.woff');
        \Yii::$app->view->registerLinkTag([
            'rel'         => 'preload',
            'href'        => $href,
            'as'          => 'font',
            'type'        => 'font/woff2',
            'crossorigin' => 'crossorigin',
        ]);

        $href = self::getAssetUrl('assets/vendor/icon-line-pro/real-estate/webfont/fonts/real-estate.woff');
        \Yii::$app->view->registerLinkTag([
            'rel'         => 'preload',
            'href'        => $href,
            'as'          => 'font',
            'type'        => 'font/woff2',
            'crossorigin' => 'crossorigin',
        ]);


        \Yii::$app->assetManager->appendTimestamp = $appendTimestamp;
    }
}