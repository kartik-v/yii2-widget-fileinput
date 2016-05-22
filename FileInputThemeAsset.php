<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2016
 * @package yii2-widgets
 * @subpackage yii2-widget-rating
 * @version 1.0.5
 */

namespace kartik\file;

use kartik\base\AssetBundle;

/**
 * Theme Asset bundle for StarRating Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class FileInputThemeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/kartik-v/bootstrap-fileinput';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->depends = array_merge($this->depends, ['kartik\rating\FileInputAsset']);
        parent::init();
    }

    /**
     * Add star rating theme file
     *
     * @param string $theme the theme file name
     */
    public function addTheme($theme)
    {
        $this->css[] = "css/theme-{$theme}.css";
    }
}