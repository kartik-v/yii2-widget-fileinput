<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2019
 * @package yii2-widgets
 * @subpackage yii2-widget-fileinput
 * @version 1.0.9
 */

namespace kartik\file;

use yii\web\AssetBundle;
use Yii;

/**
 * Theme Asset bundle for the FileInput Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class FileInputThemeAsset extends BaseAsset
{
    /**
     * @inheritdoc
     */
    public $depends = ['kartik\file\FileInputAsset'];

    /**
     * Add file input theme file
     *
     * @param string $theme the theme file name
     * @return AssetBundle
     */
    public function addTheme($theme)
    {
        $file = YII_DEBUG ? "theme.js" : "theme.min.js";
        if ($this->checkExists("themes/{$theme}/{$file}")) {
            $this->js[] = "themes/{$theme}/{$file}";
        }
        $file = YII_DEBUG ? "theme.css" : "theme.min.css";
        if ($this->checkExists("themes/{$theme}/{$file}")) {
            $this->css[] = "themes/{$theme}/{$file}";
        }
        return $this;
    }

    /**
     * Check if file exists in path provided
     *
     * @param string $path the file path
     *
     * @return boolean
     */
    protected function checkExists($path)
    {
        return file_exists(Yii::getAlias($this->sourcePath . '/' . $path));
    }
}
