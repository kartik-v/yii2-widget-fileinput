<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2019
 * @package yii2-widgets
 * @subpackage yii2-widget-fileinput
 * @version 1.0.9
 */

namespace kartik\file;

use kartik\base\AssetBundle;

/**
 * BaseAsset is the base asset bundle class used by all FileInput widget asset bundles.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class BaseAsset extends AssetBundle {
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/kartik-v/bootstrap-fileinput';
}