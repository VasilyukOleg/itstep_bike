<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


1) задать файл настроек .env
2) перейти в командрой строке в каталог проекта
3) запустить установку или обновление композера: composer install
4) Создать таблицу в админ панели PHP c типом UTF8_general_ci согласно файлу настроек .env
5) Запустить миграцию PHP artisan migrate
6) Запустить наполнение данными (seeding) php artisan db:seed
7) товар добавляется в папке \database\seeds файл ProductTableSeeder.php
8) при оплате картой товаров с карзины, можно вводить данные тестовые https://stripe.com/docs/testing для прохождения проверки оплаты
