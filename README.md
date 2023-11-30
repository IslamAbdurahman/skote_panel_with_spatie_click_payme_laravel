<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel 10

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

#


<a href="https://payme.uz/@longevity" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>


## Featured Payments

- [Payme](http://payme.uz) - Merchant
- [Click](http://click.uz) - Merchant
- [Oson](http://click.uz) - Merchant
- [Uzcard](http://uzcard.uz) - Merchant
- [Paynet](http://paynet.uz) - Merchant
- [Stripe](https://stripe.com/) - Merchant(Subscribe)

## Featured Languages

-  Uzbek
-  Uzbek Krill
-  Russian
-  English
-  Italian
-  Spanish
-  German


## Role documentation

- [Laravel-permission](https://spatie.be/docs/laravel-permission/v6/introduction) - Laravel-permission


## Installation

You can clone from GitLab:

```bash
git clone git@gitlab.com:IslamAbdurahman/skote_panel_with_spatie_click_payme_laravel.git
```

You can clone from GitHub:

```bash
git clone git@github.com:IslamAbdurahman/skote_panel_with_spatie_click_payme_laravel.git
```

You can install composer:

```bash
composer install
```

You install npm:

```bash
npm install
```

Create storage link:

```bash
php artisan storage:link
```

Migrate tables with seeds:

```bash
php artisan migrate --seed
```

Seed payment settings:

```bash
php artisan db:seed --class="Goodoneuz\PayUz\database\seeds\PayUzSeeder"
```

### Default user

```
User : admin@gmail.com
Password : 123456
```

## Payment Usage
------
Placing routes for service in web.php

```php

//handle requests from payment system
Route::any('/handle/{paysys}',function($paysys){
    (new Goodoneuz\PayUz\PayUz)->driver($paysys)->handle();
});

//redirect to payment system or payment form
Route::any('/pay/{paysys}/{key}/{amount}',function($paysys, $key, $amount){
	$model = Goodoneuz\PayUz\Services\PaymentService::convertKeyToModel($key);
    $url = request('redirect_url','/'); // redirect url after payment completed
    $pay_uz = new Goodoneuz\PayUz\PayUz;
    $pay_uz
    	->driver($paysys)
    	->redirect($model, $amount, 860, $url);
});
```

### Security

If you discover any security related issues, please email abdurahmanislam304@gmail.com instead of using the issue tracker.

## Credits

- [GitHub](https://github.com/islamabdurahman)
- [GitLab](https://github.com/islamabdurahman)
####
- [TouTube](https://www.youtube.com/@IslamAbdurahman)
- [Telegram](https://t.me/LiveLongevity)
####
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
