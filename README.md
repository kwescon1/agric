#Simple Procurement Application

##Configuration and Installation

Clone the repository and make a copy of the .env.example file and save it as .env

Configuration

Open .env file and set the values for the following variables

DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

###Software Requirements

PHP 7.2 or above
MySQL
Composer
Installation

Open terminal or command prompt in the directory of the project and run the following commands.

composer install
php artisan key:generate

-Migrate Tables
php artisan migrate

###Start Application

Open terminal in the project's directory and run the following commands.

php artisan serve