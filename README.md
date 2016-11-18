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

```php
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

## The MIT License (MIT)

Copyright © 2016 iMega <info@imega.ru>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
