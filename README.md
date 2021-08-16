# Categories App

This project is just a test in codeigniter 4 and doesn't have a useful function 

## Setup

1. Clone the project.
   ```bash
   git clone git@github.com:Sohib/categories.git
   ```
2. Run Composer install
    ```bash
      cd categories
      composer install
    ```
3. Copy `env` and name it `.env` then open it and verify the settings:
    1. `CI_ENVIRONMENT = development` to enable error 
    2. Edit the database settings to match your database.
    3. Next make sure that `app.baseURL` matches whatever you are currently running your site at. If you use spark, then it already matches the default. If this doesn't match, then generated links might not work, and your developer toolbar will never show up.


4. Run the following commands 
    ```bash
    php spark migrate
    php spark db:seed CategoriesSeeder
    ```
   
5. Run the Server
   ```bash
   php spark serve   
   ```

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
