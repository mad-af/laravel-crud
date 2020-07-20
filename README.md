<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## About Laravel CRUD

A simple website with CRUD and Soft Delete features

## Installation

First download or clone this repository

    git clone https://github.com/mad-af/lrv-crud.git

Then rename the file `env.example`to `env`and comand for get APP_KEY

    php artisan key:generate

check and create a MySQL database according to the configuration in `env`.
Do the command to create the required table

    php artisan migrate

Then you can run this application

    php artisan serve

## Warning

We have one table created without migration, so you have to make it according to the capital provided
