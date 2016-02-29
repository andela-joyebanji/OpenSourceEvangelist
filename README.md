**Open Source Evangelist**  
-
[![Coverage Status](https://coveralls.io/repos/github/andela-joyebanji/OpenSourceEvangelist/badge.svg?branch=develop)](https://coveralls.io/github/andela-joyebanji/OpenSourceEvangelist?branch=develop)
[![Build Status](https://travis-ci.org/andela-joyebanji/OpenSourceEvangelist.svg?branch=develop)](https://travis-ci.org/andela-joyebanji/OpenSourceEvangelist) 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-joyebanji/OpenSourceEvangelist/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/andela-joyebanji/OpenSourceEvangelist/?branch=develop)

--

This package aims to provide an analysis based on the number of open source projects an individual possess on Github.

```
    Number of repository < 5 : None Evangelist.
    Number of repository >= 5 and Number of repository <= 10 : Junior Evangelist.
    Number of repository >= 11 and Number of repository <= 20 : Associate Evangelist.
    Number of repository >= 21 : Senior Evangelist.
```


## Install

Via Composer

``` bash
$ composer require pyjac/opensourceevangelist
```

## Usage

```php
	require 'vendor/autoload.php';

	use Pyjac\OpenSourceEvangelist\OpenSourceEvangelist;
	use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource;
	use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory;

	$openSourceEvangelist = new OpenSourceEvangelist(new OpenSourceEvangelistDataSource(), new OpenSourceEvangelistFactory());
	$evangelist = $openSourceEvangelist->getEvangelist('pyjac');
	echo $evangelist->getStatus();
```


## Security

If you discover any security related issues, please email [Oyebanji Jacob](oyebanji.jacob@andela.com) or create an issue.

## Credits

[Oyebanji Jacob](https://github.com/andela-joyebanji)

## License

### The MIT License (MIT)

Copyright (c) 2016 Oyebanji Jacob <oyebanji.jacob@andela.com>

> Permission is hereby granted, free of charge, to any person obtaining a copy
> of this software and associated documentation files (the "Software"), to deal
> in the Software without restriction, including without limitation the rights
> to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
> copies of the Software, and to permit persons to whom the Software is
> furnished to do so, subject to the following conditions:
>
> The above copyright notice and this permission notice shall be included in
> all copies or substantial portions of the Software.
>
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
> IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
> FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
> AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
> LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
> OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
> THE SOFTWARE.

