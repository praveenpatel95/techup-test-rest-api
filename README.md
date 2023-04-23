# Techup Test - Rest API Design Pattern

The application is developed for the manage "Therapist Management App".

## Requirement

- PHP 8.1

## Installation

Clone the repository:

```
git clone https://github.com/praveenpatel95/techup-test-rest-api.git

```

Then cd into the folder with this command:
```
cd techup-test-rest-api
```

Install composer with below command:
```
composer install
```


## Quick usage

1. Copy .env.example file and rename with .env file.<br />
   Or you can run this command
   `cp .env.example .env`
   <br />Just update the database credentials.
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_db_name
DB_USERNAME=my_user_name
DB_PASSWORD=my_password
```
And for the send email, please update with your credential in .env file

```
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

2. Now you need to run migration command for create all migrations tables:

```
php artisan migrate
```


3Run seeder:

```
php artisan db:seed
```

4. Install passport, use below command:

```
php artisan passport:install
```



## Run Server

Now you can run your server with this command:
```
php artisan serve
```

## Run Queue

For send email you need to run queue:
```
php artisan queue:work
```
or install supervisor
```
sudo apt-get install supervisor
```

### Admin login credentials :
```
Email: admin@gmail.com
Password: asdasd
```


## Rest API with example

I attached the postman collection file for a better understanding and using the APIs.
Import the file in your postman and change the {{base_url}} in your postman environment.

```
https://documenter.getpostman.com/view/9499370/2s93Y5NetE
```


## License

[MIT](https://choosealicense.com/licenses/mit/)
