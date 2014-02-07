# PHP Exception Interfaces

Exception interfaces for PHP inspired by

* Ralph Schindler's [Exception Best Practices in PHP 5.3][1] blog post
* John Barton's [RFC for the 7XX Range of HTTP Status codes - Developer
  Errors][2] project
* [This tweet][3] from Kent Beck

## Usage

Simply create your own custom Exception, extend `\Exception`, and implement one
of the exception interfaces. Done!

```php
<?php

namespace Example;

use EI\EdgeCases\ThatsJustSilly;

class RidiculousException extends \Exception implements ThatsJustSilly {}
```

See Ralph Schindler's post, linked above, for background.

## Installation

Install via [Composer][4].

[1]: http://ralphschindler.com/2010/09/15/exception-best-practices-in-php-5-3
[2]: https://github.com/joho/7XX-rfc
[3]: https://twitter.com/kentbeck/status/294689698360737792
[4]: http://getcomposer.org
