<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2016
 * @package yii2-widgets
 * @subpackage yii2-widget-fileinput
 * @version 1.0.5
 */

namespace kartik\file;

use kartik\base\AssetBundle;

/**
 * Theme Asset bundle for the FileInput Widget
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
    public $depends = ['kartik\file\FileInputAsset'];

    /**
     * Add file input theme file
     *
     * @param string $theme the theme file name
     */
    public function addTheme($theme)
    {
        if ($this->checkExists("themes/{$theme}/{$theme}.js")) {
            $this->js[] = "themes/{$theme}/{$theme}.js";
        } 
        if ($this->checkExists("themes/{$theme}/{$theme}.css")) {
            $this->css[] = "themes/{$theme}/{$theme}.css";
        } 
        return $this;
    }
    
    /**
     * Check if file exists in path provided
     *
     * @param string $path the file path
     *
     * @return bool
     */
    protected  function checkExists($path)
    {
        return file_exists(Yii::getAlias($this->sourcePath . '/' . $path));
    }
}