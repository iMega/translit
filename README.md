# Translit

[![Latest Stable Version](https://img.shields.io/packagist/v/imega/translit.svg?style=flat-square)](https://packagist.org/packages/imega/translit)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.4-8892BF.svg?style=flat-square)](https://php.net/)
[![CircleCI](https://circleci.com/gh/iMega/translit.svg?style=svg)](https://circleci.com/gh/iMega/translit)
[![Travis Build Status](https://travis-ci.org/iMega/translit.svg?branch=master)](https://travis-ci.org/iMega/translit)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/iMega/translit/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/iMega/translit/?branch=master)
[![Scrutinizer Code Coverage](https://scrutinizer-ci.com/g/iMega/translit/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/iMega/translit/?branch=master)
[![Scrutinizer Build Status](https://scrutinizer-ci.com/g/iMega/translit/badges/build.png?b=master)](https://scrutinizer-ci.com/g/iMega/translit/build-status/master)

The conversion of scripts or writing is a procedure of replacing text written in one script or writing system with the characters of another script or system in order to make the text (e.g., proper names) legible for users of another language or script.

## Usage

```php
$formatter = new Formatter(
    [
        Passport::setDefault('translit', ''),
    ]
);
echo $formatter->getValue('translit', 'щука'); // shchuka
```

```
$formatter = new Formatter(
    [
        Passport::setDefault('translit', ''),
        Passport2010::setDefault('passport2010', ''),
        Passport1997::setDefault('passport1997', ''),
    ]
);

$value = "Ехал Грека через реку, видит Грека - в реке рак. Сунул Грека руку в реку, рак за руку Грека - цап!";

//Ekhal Greka cherez reku, vidit Greka - v reke rak. Sunul Greka ruku v reku, rak za ruku Greka - tsap!
echo $formatter->getValue('translit', $value);

//Ekhal Greka cherez reku, vidit Greka - v reke rak. Sunul Greka ruku v reku, rak za ruku Greka - tcap!
echo $formatter->getValue('passport2010', $value);

//Ekhal Greka cherez reku, vidit Greka - v reke rak. Sunul Greka ruku v reku, rak za ruku Greka - tsap!
echo $formatter->getValue('passport1997', $value);
```
