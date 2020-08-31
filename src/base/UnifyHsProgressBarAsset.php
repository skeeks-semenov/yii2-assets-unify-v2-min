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
 *  // initialization of horizontal progress bars
      var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
        direction: 'horizontal',
        indicatorSelector: '.js-hr-progress-bar-indicator'
      });

      // initializtion of vertical progress bars
      var verticalProgressBars = $.HSCore.components.HSProgressBar.init('.js-vr-progress-bar', {
        direction: 'vertical',
        indicatorSelector: '.js-vr-progress-bar-indicator'
      });
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsProgressBarAsset extends UnifyAsset
{
    public $css = [
    ];

    public $js = [
        'assets/js/components/hs.progress-bar.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class
    ];
}