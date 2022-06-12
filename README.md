# Rafa-cake-and-bakery

Rafa Cake and Bakery is a web-based application project that aims to introduce Rafa Cake and Bakery, introduce what products are sold and can also order them via Whatsapp.

## How To Use?

Make sure you have [XAMPP](https://www.apachefriends.org/download.html), [Composer](https://getcomposer.org/download/), and [NodeJs](https://nodejs.org/en/download/) installed.

## :memo: getting started
1. Clone Repository
```
git clone https://github.com/aaneviannanda/Rafa-cake-and-bakery
```
```
cd Rafa-cake-and-bakery
```
2. Set .env file
    - make .env file and copy from .env.example
```
composer install
```
```
php artisan key:generate
```
```
npm install
```
```
npm run dev
```
3. Create database
    - create database in localhost/phpmyadmin with name: rafa-cake
```
php artisan migrate
```
```
php artisan serve
```



Notes : to access the admin dashboard
> create an admin account via registration menu

> open database localhost/phpmyadmin : rafa-cake

> open users table

> update isAdmin from 0 to 1

> Login using Admin account
