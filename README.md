# xsl
XSL 2.0 Transpiler in PHP

### Installation

Requires PHP 5.6 or later. There are no plans to support PHP 5.5 or earlier. PRs in this matter are rejected. It is installable and autoloadable via Composer as [genkgo/xsl](https://packagist.org/packages/genkgo/xsl).

### Quality

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/genkgo/xsl/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/genkgo/xsl/)
[![Code Coverage](https://scrutinizer-ci.com/g/genkgo/xsl/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/genkgo/xsl/)
[![Build Status](https://travis-ci.org/genkgo/xsl.png?branch=master)](https://travis-ci.org/genkgo/xsl)

To run the unit tests at the command line, issue `phpunit -c tests/`. [PHPUnit](http://phpunit.de/manual/) is required.

This library attempts to comply with [PSR-1][], [PSR-2][], and [PSR-4][]. If
you notice compliance oversights, please send a patch via pull request.

[PSR-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[PSR-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md

## Getting Started

Just replace `XSLTProcessor` with `Genkgo\Xsl\XsltProcessor` and you are done!

```php
<?php
use Genkgo\Xsl\XsltProcessor;

$xslDoc = new DOMDocument();
$xslDoc->load('Stubs/collection.xsl');

$xmlDoc = new DOMDocument();
$xmlDoc->load('Stubs/collection.xml');

$transpiler = new XsltProcessor();
$transpiler->importStylesheet($xslDoc);
echo $transpiler->transformToXML($xmlDoc);
```

## Contributing

- Found a bug? Please try to solve it yourself first and issue a pull request. If you are not able to fix it, at least
  give a clear description what goes wrong. We will have a look when there is time.
- Want to see a feature added, issue a pull request and see what happens. You could also file a bug of the missing
  feature and we can discuss how to implement it.