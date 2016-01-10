yii2-widget-fileinput
=====================

[![Latest Stable Version](https://poser.pugx.org/kartik-v/yii2-widget-fileinput/v/stable)](https://packagist.org/packages/kartik-v/yii2-widget-fileinput)
[![License](https://poser.pugx.org/kartik-v/yii2-widget-fileinput/license)](https://packagist.org/packages/kartik-v/yii2-widget-fileinput)
[![Total Downloads](https://poser.pugx.org/kartik-v/yii2-widget-fileinput/downloads)](https://packagist.org/packages/kartik-v/yii2-widget-fileinput)
[![Monthly Downloads](https://poser.pugx.org/kartik-v/yii2-widget-fileinput/d/monthly)](https://packagist.org/packages/kartik-v/yii2-widget-fileinput)
[![Daily Downloads](https://poser.pugx.org/kartik-v/yii2-widget-fileinput/d/daily)](https://packagist.org/packages/kartik-v/yii2-widget-fileinput)

The FileInput widget is a customized file input widget based on Krajee's [Bootstrap FileInput JQuery Plugin](http://plugins.krajee.com/file-input). The widget enhances the default HTML file input with various features including the following:

* Specially styled for Bootstrap 3.0 with customizable buttons, caption, and preview
* Ability to select and preview multiple files
* Includes file browse and optional remove and upload buttons.
* Ability to format your file picker button styles
* Ability to preview files before upload - images and/or text (uses HTML5 FileReader API)
* Ability to preview multiple files of different types (both images and text)
* Set your upload action/route (defaults to form submit). Customize the Upload and Remove buttons.
* Internationalization enabled for easy translation to various languages

> NOTE: This extension is a sub repo split of [yii2-widgets](https://github.com/kartik-v/yii2-widgets). The split has been done since 08-Nov-2014 to allow developers to install this specific widget in isolation if needed. One can also use the extension the previous way with the whole suite of [yii2-widgets](http://demos.krajee.com/widgets).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Check the [composer.json](https://github.com/kartik-v/yii2-widget-fileinput/blob/master/composer.json) for this extension's requirements and dependencies. Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

To install, either run

```
$ php composer.phar require kartik-v/yii2-widget-fileinput "@dev"
```

or add

```
"kartik-v/yii2-widget-fileinput": "@dev"
```

to the ```require``` section of your `composer.json` file.

## Latest Release

> NOTE: The latest version of the module is v1.0.4. Refer the [CHANGE LOG](https://github.com/kartik-v/yii2-widget-fileinput/blob/master/CHANGE.md) for details.

## Demo

You can refer detailed [documentation and demos](http://demos.krajee.com/widget-details/fileinput) on usage of the extension.

## Usage

```php
use kartik\file\FileInput;

// Usage with ActiveForm and model
echo $form->field($model, 'avatar')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
]);

// With model & without ActiveForm
echo '<label class="control-label">Add Attachments</label>';
echo FileInput::widget([
    'model' => $model,
    'attribute' => 'attachment_1',
    'options' => ['multiple' => true]
]);
```

## License

**yii2-widget-fileinput** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.