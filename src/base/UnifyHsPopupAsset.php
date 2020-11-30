<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

use skeeks\cms\assets\FancyboxAssets;
/**
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsPopupAsset extends UnifyAsset
{
    public $css = [
    ];

    public $js = [
        'assets/js/components/hs.popup.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class,
        //UnifyFancyboxAsset::class,
        FancyboxAssets::class,
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        \Yii::$app->view->registerJs(<<<JS
$.HSCore.components.HSPopup.init('.js-fancybox-media', {
    helpers: {
        media: {},
        overlay: {
            css: {
                'background': 'rgba(0, 0, 0, .8)'
            }
        }
    }
});
JS
        );
    }
}