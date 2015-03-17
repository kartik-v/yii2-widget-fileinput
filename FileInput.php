<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2015
 * @package yii2-widgets
 * @subpackage yii2-widget-fileinput
 * @version 1.0.1
 */

namespace kartik\file;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\web\JsExpression;
use kartik\base\Config;

/**
 * FileInput widget styled for Bootstrap 3.0 with ability to multiple file
 * selection and preview, format button styles and inputs. Runs on all modern
 * browsers supporting HTML5 File Inputs and File Processing API. For browser
 * versions IE9 and below, this widget will gracefully degrade to normal HTML
 * file input.
 *
 * Wrapper for the Bootstrap FileInput JQuery Plugin by Krajee
 *
 * @see http://plugins.krajee.com/bootstrap-fileinput
 * @see https://github.com/kartik-v/bootstrap-fileinput
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 * @see http://twitter.github.com/typeahead.js/examples
 */
class FileInput extends \kartik\base\InputWidget
{
    /**
     * @var bool whether to show 'plugin unsupported' message for IE browser versions 9 & below
     */
    public $showMessage = true;

    /*
     * @var array HTML attributes for the container for the warning
     * message for browsers running IE9 and below.
     */
    public $messageOptions = ['class' => 'alert alert-warning'];

    /**
     * @var array the internalization configuration for this widget
     */
    public $i18n = [];

    /**
     * @var array initialize the FileInput widget
     */
    public function init()
    {
        parent::init();
        Yii::setAlias('@fileinput', dirname(__FILE__));
        if (empty($this->i18n)) {
            $this->i18n = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@fileinput/messages'
            ];
        }
        Yii::$app->i18n->translations['fileinput'] = $this->i18n;
        $this->registerAssets();
        if ($this->pluginLoading) {
            Html::addCssClass($this->options, 'file-loading');
        }
        $input = $this->getInput('fileInput');
        $id = 'jQuery("#' . $this->options['id'] . '")';
        if ($this->showMessage) {
            $validation = ArrayHelper::getValue($this->pluginOptions, 'showPreview', true) ? 'file preview and multiple file upload' : 'multiple file upload';
            $message = '<strong>' . Yii::t('fileinput', 'Note:') . '</strong> ' . Yii::t('fileinput', 'Your browser does not support {validation}. Try an alternative or more recent browser to access these features.', ['validation' => $validation]);
            $content = Html::tag('div', $message, $this->messageOptions) . "<script>{$id}.removeClass('file-loading');</script>";
            $input .= "\n" . $this->validateIE($content);
        }
        echo $input;
    }

    /**
     * Validates and returns content based on IE browser version validation
     *
     * @param string $content
     * @param string $validation
     * @return string
     */
    protected function validateIE($content, $validation = 'lt IE 10')
    {
        return "<!--[if {$validation}]><br>{$content}<![endif]-->";
    }
    
    /**
     * Registers the asset bundle and locale
     */
    protected function registerAssetBundle() {
        $view = $this->getView();
        if (!empty($this->language) && substr($this->language, 0, 2) != 'en') {
            $path = Yii::getAlias('@vendor/kartik-v/bootstrap-fileinput/js');
            $file = "fileinput_locale_{$this->language}.js";
            if (!Config::fileExists("{$path}/{$file}")) {
                $file = "fileinput_locale_{$this->_lang}.js";
            }
            if (Config::fileExists("{$path}/{$file}")) {
                FileInputAsset::register($view)->js[] = 'js/' . $file;
                return;
            }
        }
        FileInputAsset::register($view);
    }
    
    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        $this->registerAssetBundle();
        $this->registerPlugin('fileinput');
    }
}
