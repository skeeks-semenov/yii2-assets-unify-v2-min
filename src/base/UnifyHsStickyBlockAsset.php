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
class UnifyHsStickyBlockAsset extends UnifyAsset
{
    public $css = [
        //'assets/vendor/hamburgers/hamburgers.min.css'
    ];

    public $js = [
        'assets/js/components/hs.sticky-block.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class
    ];
    
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $view->registerJs(<<<JS
$(document).on('ajaxComplete', function() {
  setTimeout(function() {
      $('.js-sticky-block').trigger("update");
  }, 200);
  setTimeout(function() {
      $('.js-sticky-block').trigger("update");
  }, 1000);
});
$(document).on('pjax:complete', function() {
  $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
});

$(window).on('load', function () {
    setTimeout(function() { // important in this case
      $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
    }, 1);
});
JS
        );
    }
}