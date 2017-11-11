# JSON5 for PHP - JSON for Humans

[![Latest Version on Packagist][ico-version]][link-packagist]
[![PHP 5.4+][ico-php]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![SensioLabs Insight][ico-sensio]][link-sensio]
![UTF-8 Compatible][ico-utf8]
[![Total Downloads][ico-downloads]][link-downloads]


This library is a PHP fork of the [JSON5 reference implementation][link-json5].

JSON5 is a JS-compatible extension to JSON which allows comments, trailing commas, single-quoted strings, and more:


```js
{
    foo: 'bar',
    while: true,

    this: 'is a \
multi-line string',

    // this is an inline comment
    here: 'is another', // inline comment

    /* this is a block comment
       that continues on another line */

    hex: 0xDEADbeef,
    half: .5,
    delta: +10,
    to: Infinity,   // and beyond!

    finally: 'a trailing comma',
    oh: [
        "we shouldn't forget",
        'arrays can have',
        'trailing commas too',
    ],
}
```


[See the JSON5 website for additional examples and details][link-json5-site].


## Install

Via Composer

``` bash
$ composer require colinodell/json5
```

## Usage

This package adds a `json5_decode()` function which is a drop-in replacement for PHP's built-in `json_decode()`:

``` php
$json = file_get_contents('foo.json5');
$arr = json5_decode($json);
```

It takes the same exact parameters in the same order.  For more details on these, see the [PHP docs][link-php-jsondecode].

## Binary / Executable

A binary/executable named `json5` is also provided for converting JSON5 to plain JSON via your terminal.

```
Usage: json5 [OPTIONS] [FILE]

  -h, --help  Shows help and usage information

  (Reading data from STDIN is not currently supported on Windows)
```

### Examples:

Converting a file named file.json5:

```bash
json5 file.json5
```

Converting a file and saving its output:

```bash
json5 file.json5 > file.json
```

Converting from STDIN:

```bash
echo -e "{hello: 'world!'}" | json5
```

Converting from STDIN and saving the output:
```bash
echo -e "{hello: 'world!'}" | json5 > output.json
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email colinodell@gmail.com instead of using the issue tracker.

## Credits

- [Colin O'Dell][link-author]
- [Aseem Kishore][link-upstream-author], [the JSON5 project][link-json5], and [their contributors][link-upstream-contributors]
- [All other contributors to this project][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/colinodell/json5.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/colinodell/json5/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/colinodell/json5.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/colinodell/json5.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/colinodell/json5.svg?style=flat-square
[ico-utf8]: https://img.shields.io/badge/utf--8-compatible-brightgreen.svg?style=flat-square
[ico-sensio]: https://img.shields.io/sensiolabs/i/45decdff-5544-43c4-9547-61c9f514b121.svg?style=flat-square
[ico-php]: https://img.shields.io/packagist/php-v/colinodell/json5.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/colinodell/json5
[link-travis]: https://travis-ci.org/colinodell/json5
[link-scrutinizer]: https://scrutinizer-ci.com/g/colinodell/json5/code-structure/master/code-coverage
[link-code-quality]: https://scrutinizer-ci.com/g/colinodell/json5
[link-downloads]: https://packagist.org/packages/colinodell/json5
[link-sensio]: https://insight.sensiolabs.com/projects/45decdff-5544-43c4-9547-61c9f514b121
[link-author]: https://github.com/colinodell
[link-json5]: https://github.com/json5/json5
[link-php-jsondecode]: http://php.net/manual/en/function.json-decode.php
[link-upstream-author]: https://github.com/aseemk
[link-upstream-contributors]: https://github.com/json5/json5#credits
[link-json5-site]: http://json5.org
[link-contributors]: ../../contributors
