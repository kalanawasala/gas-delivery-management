<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

<h1>Gas Delivery Management System </h1>
    
    This is the our first project that developed using laravel framework.The purpose of the application 
    is to handle the Local Gas Delivery managemnt events smoothly .

<h2>How to install</h1>
<h2>STEP-01</h2> You Should have installed the all of necessary softwares on your pc 
    
    php server
    Git
    composer
<h2>STEP-02</h2> clone the git repository to the location on your machine that you need to store the application.
go to that location and open your terminal there and run the git clone command.
    
    git clone <repository url>.git
<h2>STEP-03</h2> Move into the application directory using the cd command: 
    
    cd <project-location>
<h2>STEP-04</h2> Laravel uses Composer for PHP dependency management for that You has to have installed php composer in your directory 
    
    composer install
    (This command will download and install all the required packages specified in the composer.json file.)
    
<h2>STEP-05</h2> Duplicate the .env.example file and rename it to .env and open .env file and update database details as
follows.
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=book-management
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_passwords   
    (change DB_DATABASE=book-management,DB_USERNAME=root)

<h2>STEP-06</h2> Generate application key for project
    
    php artisan key:generate
    (This key is used for encrypting user sessions and other sensitive data)

<h2>STEP-07</h2> Run database migrations to create tables.
    
    php artisan migrate
    (this will create necessry tables on the database using migrations tables)
<h2>STEP-08</h2> To run the Laravel development server, use the following command:
    
    php artisan serve
<h4>After successfully following above steps, you can quickly get the project up and running in your local development environment </h4>
    

