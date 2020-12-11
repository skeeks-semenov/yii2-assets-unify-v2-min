<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsCarouselAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/slick-carousel/slick/slick.css',
    ];

    public $js = [
        'assets/vendor/slick-carousel/slick/slick.js',
        'assets/js/components/hs.carousel.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class,
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $view->registerCss(<<<CSS
.slick-slide:focus {
  outline: 0 none;
}
CSS
        );

        if (!\Yii::$app->request->isPjax && !\Yii::$app->request->isAjax) {
            $view->registerJs(<<<JS
$(document).on('pjax:complete', function (e) {
    setTimeout(function() {
        $(window).resize();
    }, 300);
    
    $.HSCore.components.HSCarousel.init('.js-carousel');
    
});

JS
            );

            $view->registerJs(<<<JS
        $.HSCore.components.HSCarousel.init('.js-carousel');
        /*setTimeout(function() {
            $('.js-carousel').slick('refresh');
        }, 300);*/
JS
            );

        }


    }
}