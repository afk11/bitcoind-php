nbobtc/bitcoind-php
===================

[![Build Status](https://travis-ci.org/nbobtc/bitcoind-php.png?branch=master)](https://travis-ci.org/nbobtc/bitcoind-php) [![Latest Stable Version](https://poser.pugx.org/nbobtc/bitcoind-php/v/stable.svg)](https://packagist.org/packages/nbobtc/bitcoind-php) [![Total Downloads](https://poser.pugx.org/nbobtc/bitcoind-php/downloads.svg)](https://packagist.org/packages/nbobtc/bitcoind-php) [![Latest Unstable Version](https://poser.pugx.org/nbobtc/bitcoind-php/v/unstable.svg)](https://packagist.org/packages/nbobtc/bitcoind-php) [![License](https://poser.pugx.org/nbobtc/bitcoind-php/license.svg)](https://packagist.org/packages/nbobtc/bitcoind-php)

This project is a wrapper for a bitcoind daemon. This project is still
being worked on and the interface may change a little until I get something
more stable.

# Installation

You can install this library by using [composer](http://getcomposer.org/). You
can also view more info about this on [packagist](https://packagist.org/packages/nbobtc/bitcoind-php).

Add this to the `requires` in your `composer.json` file.

    "nbobtc/bitcoind-php": "~1.1"

# Usage

To use the project you need to just create a new instance of the class.

    <?php

    use Nbobtc\Bitcoind\Bitcoind;
    use Nbobtc\Bitcoind\Client;

    $bitcoind = new Bitcoind(new Client('https://username:password@localhost:18332'));

You can view the [BitcoindInterface](https://github.com/nbobtc/bitcoind-php/blob/master/src/Nbobtc/Bitcoind/BitcoindInterface.php)
file for a list of methods and descriptions of what they are and how to use them.

# Tests

To run the tests you need to install the development packages using composer

    php composer.phar install --dev

Once this is complete you can run phpunit

    ./bin/phpunit

# API Documentation

The API Documentation can be generated by install composer development packages
like so:

    php composer.phar install --dev
    ./bin/sami.php update sami.php

Docs are output into the `docs/` directory. You can use php's command line server
or view them another way.

# Donate

Consider a donation [16yRSB46xMeWKfWtqcuqSVV7B2eSjkd92D](bitcoin:16yRSB46xMeWKfWtqcuqSVV7B2eSjkd92D)

Thanks.

# License (MIT)

Copyright (C) 2012-2014 Joshua Estes

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
