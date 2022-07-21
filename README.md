<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Pasos para instalar Pokedex_laravel

clonar el Repositorio

    git clone https://github.com/Darios1415/pokedex_laravel.git

Cambiar a la carpeta del Proyecto

    cd pokedex_laravel

Instalar dependencias utilizando composer

    composer install

Copiar el archivo .env.example y realice los cambios de configuración necesarios en el archivo .env

    cp .env.example .env


Ejecute las migraciones de la base de datos (**Establezca la conexión de la base de datos en .env antes de migrar**)

    php artisan migrate

Inicie el servidor de desarrollo local

    php artisan serve

Ahora puede acceder al servidor en http://localhost:8000