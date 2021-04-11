<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Architecture:

### Frameworks:

-   Server Side Framework: `Laravel 8.29.0`
-   Javascript Framework: `Vuejs 2.6.*`
-   CSS Framework: `Bootstrap v4.6.0`

### System Requirements:

-   PHP >7.4.14
-   node/npm latest stable
-   composer latest stable

### Laravel Packages Installed

-   Repository
    -   `"prettus/l5-repository"`
-   Validation:

    -   `"prettus/laravel-validation"`

-   Authentication:

    -   `"laravel/ui"`
    -   `"laravel/passport"`,

-   Debugging:
    -   `"barryvdh/laravel-debugbar"`,
    -   `"laravel/telescope"`,

# Getting Started

1. Clone Repository

    `git clone https://github.com/devfreemight/takumoi-laravel.git`

2. Install composer dependencies

    `composer install`

3. Install package dependencies

    `npm install`

4. copy .env.example and rename it to .env

5. create DataBase in your local by using phpMyAdmin

6. fill in DB_DATABASE name in your .env

7. Migrations and Seeders

    `php artisan migrate:refresh --seed`

8. Passport Installation

    `php artisan passport:install`

9. Running Mix
   `npm run dev`

10. Begin Local Web Server

    `php artisan serve` or add your port `php artisan serve --port=8000`


11. Open your browser `http://127.0.0.1:8000/`
