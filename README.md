<p align="center">
    <a href="https://symfony.com" target="_blank">
        <img src="https://d1pwix07io15pr.cloudfront.net/vc71be9d739/logos/symfony_black_02.png" height="100px">
    </a>
    <a href="https://symfonyfutureimperfect.slavapleshkov.com" target="_blank">
        <img src="https://symfonyfutureimperfect.slavapleshkov.com/images/logo.jpg" height="100px">
    </a>
    <h1 align="center">symfony-future-imperfect</h1>
    <br>
</p>
<p align="center">The blog was created using the Symfony</p>

## Installation Dev

1. Clone the repo and `cd` into it
1. Run this command `composer install`
1. Rename or copy `.env.test` file to `.env`
1. Set your database credentials in your `.env` file
1. Set your mail credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file
1. Set your `APP_ENV` in your `.env` file with the value `dev`
1. Set your `APP_DEBUG` in your `.env` file with the value `1`
1. Run this command `yarn install`
1. Run this command `yarn run dev`
1. Run this command `php bin/console server:start`
1. Visit `localhost:8000` in your browser

## Installation Production

1. Clone the repo and `cd` into it
1. Create users and table in MySQL
1. Configure Nginx with these settings `nginx.conf`
1. Run this command `composer install --no-dev --optimize-autoloader`
1. Rename or copy `.env.test` file to `.env`
1. Set your database credentials in your `.env` file
1. Set your mail credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file
1. Set your `APP_ENV` in your `.env` file with the value `prod`
1. Set your `APP_DEBUG` in your `.env` file with the value `0 `
1. Run this command `yarn install`
1. Run this command `yarn run production`
