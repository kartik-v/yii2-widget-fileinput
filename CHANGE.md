Change Log: `yii2-widget-fileinput`
===================================

## Version 1.0.9

**Date:** 19-Apr-2019

- (enh #147): Auto-set multiple file upload naming convention.
- Bump composer dependencies.

## Version 1.0.8

**Date:** 19-Sep-2018

- Bump version.

## Version 1.0.7

**Date:** 07-Sep-2018

- Updates to support Bootstrap 4.x.
- (kartik-v/yii2-krajee-base#94): Refactor code and consolidate / optimize properties within traits.
- Reorganize relevant code in "src" directory.
- Optimize asset bundles.
- (enh #134): Add Slovak Translations.
- (enh #126): Add Finnish Translations.
- (enh #120): Add Explorer FA Theme support.

## Version 1.0.6

**Date:** 26-May-2017

- Enhancements for plugin v4.4.1 (inclusion of `PiExifAsset` and removal of `CanvasBlobAsset`).
- Add github contribution and issue/PR log templates.
- Update copyright year to current.
- (enh #117): Add Bulgarian Translations.
- (enh #114): Automatically add `enctype` to form options when using with Yii Active Field and Active Form.
- (enh #112): Add Explorer Theme support.
- (enh #90): Fixed namespace fatal error.
- (enh #88): Add Vietnamese Translations.
- (enh #79): Add Lithuanian Translations.

## Version 1.0.5

**Date:** 16-Jun-2016

- (enh #74): Add Ukranian Translations.
- (enh #71): Enhancements for plugin v4.3.2.
- (enh #70): Add Estonian Translations.
- Add branch alias for dev-master latest release.

## Version 1.0.4

**Date:** 10-Jan-2016

- (enh #58): Enhancements for PJAX based reinitialization. Complements enhancements in kartik-v/yii2-krajee-base#52 and kartik-v/yii2-krajee-base#53.
- (enh #57): Enhance localizations and allow yii to generate message files via config.
- (enh #40): Add Persian Translations
- (enh #37): Add Greek Translations
- (enh #36): Add Indonesian Translations

## Version 1.0.3

**Date:** 26-Jun-2015

- (bug #33): Initialize `language` correctly.

## Version 1.0.2

**Date:** 03-May-2015

- (enh #29): Better validation for graceful downgrade for older browsers.
- (enh kartik-v/yii2-krajee-base#34, kartik-v/yii2-krajee-base#35): Enhance i18n translation locales. 
- (enh #23): Add Chinese translations.

## Version 1.0.1

**Date:** 30-Mar-2015

- (enh #22): Added Thai language translations.
- (enh #21): Updates to widget for v4.1.8 bootstrap-fileinput plugin
    - All plugin related translations now reside in the [locales files in the plugin folder](http://github.com/kartik-v/bootstrap-fileinput/js). Pull requests for new translations or editing translations needs to be done in the plugin folder.
    - The `language` property can be set at the widget level to set the language (this will default to `Yii::$app->language`).
- (enh #20): Croatian translations
- (enh #4): Hungarian translations

## Version 1.0.0

**Date:** 08-Nov-2014

- Sub repo split from [yii2-widgets](https://github.com/kartik-v/yii2-widgets)
- Initial release 