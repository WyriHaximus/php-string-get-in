# Wrapper around igorw/get-in using strings rather then arrays are keys

[![Build Status](https://travis-ci.com/WyriHaximus/php-string-get-in.svg?branch=master)](https://travis-ci.com/WyriHaximus/php-string-get-in)
[![Latest Stable Version](https://poser.pugx.org/wyrihaximus/string-get-in/v/stable.png)](https://packagist.org/packages/wyrihaximus/string-get-in)
[![Total Downloads](https://poser.pugx.org/wyrihaximus/string-get-in/downloads.png)](https://packagist.org/packages/wyrihaximus/string-get-in/stats)
[![Code Coverage](https://scrutinizer-ci.com/g/wyrihaximus/php-string-get-in/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/wyrihaximus/php-string-get-in/?branch=master)
[![License](https://poser.pugx.org/wyrihaximus/string-get-in/license.png)](https://packagist.org/packages/wyrihaximus/string-get-in)
[![PHP 7 ready](http://php7ready.timesplinter.ch/wyrihaximus/php-string-get-in/badge.svg)](https://travis-ci.com/WyriHaximus/php-string-get-in)

# Install

To install via [Composer](http://getcomposer.org/), use the command below, it will automatically detect the latest version and bind it with `^`.

```
composer require wyrihaximus/string-get-in
```

# Usage

```php
// igorw/get-in
$a = igorw\get_in($haystack, ['nee', 'dle'], $default);

// wyrihaximus/string-get-in
$a = WyriHaximus\getIn($haystack, 'nee.dle', $default);
```

# License

The MIT License (MIT)

Copyright (c) 2018 Cees-Jan Kiewiet

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
