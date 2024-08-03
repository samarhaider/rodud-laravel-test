<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to Setup Local

Run the below commands for setting up local

```sh
composer require laravel/sail --dev
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
./vendor/bin/sail npm run install
./vendor/bin/sail npm run dev
```

Seed command will create 3 users 1 admin and 2 customers

## How to access application locally

For Admin:
URL: http://localhost

email: admin@samar.com
password: 12345678

For Customers: http://localhost/api/

email: customer1@samar.com
password: 12345678

email: customer2@samar.com
password: 12345678

# Instructions

Postman collection is added for apis (app.postman_collection.json)

Admin will receive email on creating new orders.

Customers also get email on update order status

# To view emails locally

http://localhost:8025/
