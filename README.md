<h1 align="center">
    <a href="http://demos.krajee.com" title="Krajee Demos" target="_blank">
        <img src="http://kartik-v.github.io/bootstrap-fileinput-samples/samples/krajee-logo-b.png" alt="Krajee Logo"/>
    </a>
    <br>
    yii2-widget-fileinput
    <hr>
    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DTP3NZQ6G2AYU"
       title="Donate via Paypal" target="_blank">
        <img src="http://kartik-v.github.io/bootstrap-fileinput-samples/samples/donate.png" alt="Donate"/>
    </a>
</h1>

[![Stable Version](https://poser.pugx.org/kartik-v/yii2-widget-fileinput/v/stable)](https://packagist.org/packages/kartik-v/yii2-widget-fileinput)
[![Unstable Version](https://poser.pugx.org/kartik-v/yii2-widget-fileinput/v/unstable)](https://packagist.org/packages/kartik-v/yii2-widget-fileinput)
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

Refer the [CHANGE LOG](https://github.com/kartik-v/yii2-widget-fileinput/blob/master/CHANGE.md) for details of release wise changes.

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

## Contributors

### Code Contributors

This project exists thanks to all the people who contribute. [[Contribute](CONTRIBUTING.md)].
<a href="https://github.com/kartik-v/yii2-widget-fileinput/graphs/contributors"><img src="https://opencollective.com/yii2-widget-fileinput/contributors.svg?width=890&button=false" /></a>

### Financial Contributors

Become a financial contributor and help us sustain our community. [[Contribute](https://opencollective.com/yii2-widget-fileinput/contribute)]

#### Individuals

<a href="https://opencollective.com/yii2-widget-fileinput"><img src="https://opencollective.com/yii2-widget-fileinput/individuals.svg?width=890"></a>

#### Organizations

Support this project with your organization. Your logo will show up here with a link to your website. [[Contribute](https://opencollective.com/yii2-widget-fileinput/contribute)]

<a href="https://opencollective.com/yii2-widget-fileinput/organization/0/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/0/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/1/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/1/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/2/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/2/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/3/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/3/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/4/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/4/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/5/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/5/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/6/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/6/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/7/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/7/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/8/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/8/avatar.svg"></a>
<a href="https://opencollective.com/yii2-widget-fileinput/organization/9/website"><img src="https://opencollective.com/yii2-widget-fileinput/organization/9/avatar.svg"></a>

## License

**yii2-widget-fileinput** is released under the BSD-3-Clause License. See the bundled `LICENSE.md` for details.