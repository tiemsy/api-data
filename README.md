<h1 align="center"><a href="https://laravel.com" target="_blank">API DATA REST</a></h1>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation and Configuration

<h4>Clown the project in your web root directory</h4>

- git clone https://github.com/tiemsy/api-data.git

<h4>Install vendor with composer</h4>

- <code>composer install</code>

<h4>Type the following commands</h4>

- <code>php artisan db:create</code> - **Create the database**

- <code>php artisan migrate</code> - **Generate tables in database**

<h4>Install node and vue</h4>

- <code>npm install</code>

- <code>npm run dev</code> or <code>npm run watch</code>

<h4>Don't forget to put these two lines in your .env about sessions and caches</h4>

<div>CACHE_DRIVER = file</div>
SESSION_DRIVER = file
