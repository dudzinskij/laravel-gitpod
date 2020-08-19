# Laravel Gitpod

## Prerequisites

You will need to have a github account to get started on gitpod.io. Register for an account on [github.com](https://github.com/join?ref_cta=Sign+up&ref_loc=header+logged+out&ref_page=%2F&source=header-home)

## Getting started

0. Log in to your github account. 

1. In your browser navigate to: https://gitpod.io/#https://gitpod.io/#https://github.com/mchljams/laravel-gitpod. If required, log into your gitpod.io account with your github account.
2. Open the terminal
3. Change directory to: "laravel"
    ```
    cd laravel
    ```
4. Run the following Commands:
    ```
    mv .env.example .env 
    ```
    ```
    composer install
    ```
    ```
    php artisan key:generate
    ```
    ```
    php artisan serve
    ```