[![Latest Stable Version](https://poser.pugx.org/ctl/laravelxmpp/v/stable?format=flat-square)](https://packagist.org/packages/ctl/laravelxmpp)
[![Build Status](https://travis-ci.org/Core-Tech-Labs/LaravelXMPP.svg?branch=master)](https://travis-ci.org/Core-Tech-Labs/LaravelXMPP)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Core-Tech-Labs/LaravelXMPP/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Core-Tech-Labs/LaravelXMPP/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Core-Tech-Labs/LaravelXMPP/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Core-Tech-Labs/LaravelXMPP/?branch=master)
[![Total Downloads](https://poser.pugx.org/ctl/laravelxmpp/downloads?format=flat-square)](https://packagist.org/packages/ctl/laravelxmpp)
[![Latest Unstable Version](https://poser.pugx.org/ctl/laravelxmpp/v/unstable?format=flat-square)](https://packagist.org/packages/ctl/laravelxmpp)


**A PHP Package that leverages XMPP/ejabberd and laravel to work coherently**

## Install

Via Composer

``` bash
$ composer require ctl/laravelxmpp
```

## Installation

Add the service provider to the `'providers'` array in `config/app.php`

``` php
CTL\XMPPMessageBase\IMServiceProvider::class,
```

If you want to use the Facade class, add the class to the `'aliases'` array

```php
'IM' => CTL\XMPPMessageBase\IM::class,
```

Navigate to `config/im.php`. Add `host`,`port`, `user`, `password` for your laravel app to connect to service.

Run ...

``` bash
$ php artisan vendor:publish
```

To publich im.php configuration file

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/Core-Tech-Labs/LaravelXMPP/blob/master/CONTRIBUTING.md) for details.

## License

Eclipse Public License (EPL v1.0). Please see [License](LICENSE.md) for more information.
