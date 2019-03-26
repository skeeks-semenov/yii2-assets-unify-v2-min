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
 * $(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
    });
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsHeaderAsset extends UnifyAsset
{
    public $css = [];

    public $js = [
        'assets/js/components/hs.header.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class
    ];
}