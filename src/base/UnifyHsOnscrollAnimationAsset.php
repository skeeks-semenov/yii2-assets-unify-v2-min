<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

/**
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsOnscrollAnimationAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/animate.css'
    ];

    public $js = [
        'assets/js/components/hs.onscroll-animation.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class,
        UnifyAppearAsset::class
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $view->registerJs(<<<JS
$.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
JS
    );
        
        $view->registerCss(<<<CSS

/*------------------------------------
  Animation on the scroll
------------------------------------*/
[data-animation]:not(.u-in-viewport) {
  visibility: hidden;
}

[data-animation].js-carousel {
  visibility: visible;
}

.u-in-viewport {
  visibility: visible;
}

CSS
        );
    }
}