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
You can change ADMIN_EMAIL value in .env file for get admin email.
```
ADMIN_EMAIL='youradmin@email.com'
```

2. Now you need to run migration command for create all migrations tables:

```
php artisan migrate
```


3. Run seeder:

```
php artisan db:seed
```

4. Install passport, use below command:

```
php artisan passport:install
```

5. Generate app key

```
php artisan key:generate
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

I have attached the Postman collection file. It will help you to run API's endpoints and check the response and body.
Import the file in your Postman and change the {{base_url}} in your Postman environment.
Open this link in a new tab.

[Postman Collection](https://documenter.getpostman.com/view/9499370/2s93Y5NetE)


Create a environment in postman collection. Create 2 vairbles base_url and adminToken

### base_url
```
serverUrl/api/v1
```
serverUrl = Your application server url Ex. http://127.0.0.1:8000 
<br>
Ex. base_url = http://127.0.0.1:8000/api/v1

### adminToken
Login as a admin credentials and get the token and update adminToken value in postman environment for access admin endpoints.

## License

[MIT](https://choosealicense.com/licenses/mit/)
