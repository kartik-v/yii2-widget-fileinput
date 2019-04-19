<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2019
 * @package yii2-widgets
 * @subpackage yii2-widget-fileinput
 * @version 1.0.9
 */

namespace kartik\file;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\base\InputWidget;
use kartik\base\TranslationTrait;

/**
 * Wrapper for the Bootstrap FileInput JQuery Plugin by Krajee. The FileInput widget is styled for Bootstrap 3.x
 * & 4.x with ability to multiple file selection and preview, format button styles and inputs. Runs on all modern
 * browsers supporting HTML5 File Inputs and File Processing API. For browser versions IE9 and below, this widget
 * will gracefully degrade to a native HTML file input.
 *
 * @see http://plugins.krajee.com/bootstrap-fileinput
 * @see https://github.com/kartik-v/bootstrap-fileinput
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 * @see http://twitter.github.com/typeahead.js/examples
 */
class FileInput extends InputWidget
{
    /**
     * @var boolean whether to resize images on client side
     */
    public $resizeImages = false;

    /**
     * @var boolean whether to auto orient images on client side
     */
    public $autoOrientImages = true;

    /**
     * @var boolean whether to load sortable plugin to rearrange initial preview images on client side
     */
    public $sortThumbs = true;

    /**
     * @var boolean whether to load dom purify plugin to purify HTML content in purfiy
     */
    public $purifyHtml = true;

    /**
     * @var boolean whether to show 'plugin unsupported' message for IE browser versions 9 & below
     */
    public $showMessage = true;

    /*
     * @var array HTML attributes for the container for the warning
     * message for browsers running IE9 and below.
     */
    public $messageOptions = ['class' => 'alert alert-warning'];

    /**
     * @inheritdoc
     */
    public $pluginName = 'fileinput';

    /**
     * @var array the list of inbuilt themes
     */
    protected static $_themes = ['fa', 'fas', 'gly', 'explorer', 'explorer-fa', 'explorer-fas'];

    /**
     * @inheritdoc
     * @throws \ReflectionException
     * @throws \yii\base\InvalidConfigException
     */
    public function run()
    {
        return $this->initWidget();
    }

    /**
     * Initializes widget
     * @throws \ReflectionException
     * @throws \yii\base\InvalidConfigException
     */
    protected function initWidget()
    {
        $this->_msgCat = 'fileinput';
        $this->initI18N(__DIR__);
        $this->initLanguage();
        $this->registerAssets();
        if ($this->pluginLoading) {
            Html::addCssClass($this->options, 'file-loading');
        }
        /**
         * Auto-set form enctype for file uploads
         */
        if (isset($this->field) && isset($this->field->form) && !isset($this->field->form->options['enctype'])) {
            $this->field->form->options['enctype'] = 'multipart/form-data';
        }
        /**
         * Auto-set multiple file upload naming convention
         */
        if (ArrayHelper::getValue($this->options, 'multiple')) {
            $hasModel = $this->hasModel();
            if ($hasModel && strpos($this->attribute, '[]') === false) {
                $this->attribute .= '[]';
            } elseif (!$hasModel && strpos($this->name, '[]') === false) {
                $this->name .= '[]';
            }
        }
        $input = $this->getInput('fileInput');
        $script = 'document.getElementById("' . $this->options['id'] . '").className.replace(/\bfile-loading\b/,"");';
        if ($this->showMessage) {
            $validation = ArrayHelper::getValue($this->pluginOptions, 'showPreview', true) ?
                Yii::t('fileinput', 'file preview and multiple file upload') :
                Yii::t('fileinput', 'multiple file upload');
            $message = '<strong>' . Yii::t('fileinput', 'Note:') . '</strong> ' .
                Yii::t(
                    'fileinput',
                    'Your browser does not support {validation}. Try an alternative or more recent browser to access these features.',
                    ['validation' => $validation]
                );
            $content = Html::tag('div', $message, $this->messageOptions) . "<script>{$script};</script>";
            $input .= "\n" . $this->validateIE($content);
        }
        return $input;
    }

    /**
     * Validates and returns content based on IE browser version validation
     *
     * @param string $content
     * @param string $validation
     *
     * @return string
     */
    protected function validateIE($content, $validation = 'lt IE 10')
    {
        return "<!--[if {$validation}]><br>{$content}<![endif]-->";
    }

    /**
     * Registers the asset bundle and locale
     * @throws \yii\base\InvalidConfigException
     */
    public function registerAssetBundle()
    {
        $view = $this->getView();
        $this->pluginOptions['resizeImage'] = $this->resizeImages;
        $this->pluginOptions['autoOrientImage'] = $this->autoOrientImages;
        if ($this->resizeImages || $this->autoOrientImages) {
            PiExifAsset::register($view);
        }
        if (empty($this->pluginOptions['theme']) && $this->isBs4()) {
            $this->pluginOptions['theme'] = 'fas';
        }
        $theme = ArrayHelper::getValue($this->pluginOptions, 'theme');
        if (!empty($theme) && in_array($theme, self::$_themes)) {
            FileInputThemeAsset::register($view)->addTheme($theme);
        }
        if ($this->sortThumbs) {
            SortableAsset::register($view);
        }
        if ($this->purifyHtml) {
            DomPurifyAsset::register($view);
            $this->pluginOptions['purifyHtml'] = true;
        }
        FileInputAsset::register($view)->addLanguage($this->language, '', 'js/locales');
    }

    /**
     * Registers the needed assets
     * @throws \yii\base\InvalidConfigException
     */
    public function registerAssets()
    {
        $this->registerAssetBundle();
        $this->registerPlugin($this->pluginName);
    }
}
