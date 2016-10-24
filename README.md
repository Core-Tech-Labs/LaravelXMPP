**A PHP Package that leverages XMPP/ejabberd and laravel to work coherently**

## Install

Via Composer

``` bash
$ composer require ctl/LaravelXMPP
```

## Installation

Run ...

``` bash
$ php artisan vendor:publish
```

To publich im.php configuration file


Add the service provider to the `'providers'` array in `config/app.php`

``` php
CTL\XMPPMessageBase\IMServiceProvider::class,
```

If you want to use the Facade class, add the class to the `'aliases'` array

```php
'IM' => CTL\XMPPMessageBase\IM::class,
```

Navigate to `config/im.php`. Add `host`,`port`, `user`, `password` for your laravel app to connect to service.


## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/Core-Tech-Labs/LaravelXMPP/blob/master/CONTRIBUTING.md) for details.

## License

Eclipse Public License (EPL v1.0). Please see [License](LICENSE.md) for more information.
