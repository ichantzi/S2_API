# S2_API2
A search service for all SpiN clients (Spitogatos hiring process assignment)

## This is the REST API endpoint 


## The source code which contains the project is in the master branch.


### To initialize the project, please do the following:

- download the project

- create .env file in your project directory, copy and paste the following:

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:/0SEfPFfyOtsRrKR7/djZdACblVO62ek3XgjNQ73W7Q=
APP_DEBUG=true
APP_URL=http://S2.test

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=S2
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

BEARER_TOKEN = eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vZGVtby5jb29yZGkudGVzdC9hcGkvbG9naW4iLCJpYXQiOjE2NDY4MTEwODgsImV4cCI6MTY0Njg5NzQ4OCwibmJmIjoxNjQ2ODExMDg4LCJqdGkiOiJBamtVMGVINEdDOXdpQ0l3Iiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.cOurhqZxd-eZA5NFF4tCc1da7ha8lpD2VsSsrn6fG8Y


- create a mysql database named S2.

## This is a Laravel 8 project, so the appropriate Laravel installation is required

- run the following commands to your terminal, in the project directory:

- php artisan migrate
- php artisan db:seed
- php artisan serve (to serve in localhost - 127.0.0.1:8000)

the url invoking the endpoint is /api/properties

## You can use Postman to make a request.

- Select a POST request.
- in the AUTH section, choose the Bearer token option, and insert the bearer token given above.
- in the BODY section, enter a JSON object, such as the example below:
  
  {
    "location": ["Athens","Patra"],
    "availability": "Sale",
    "min_price": 23,
    "max_price": 3230000,
    "min_square_meters": 34,
    "max_square_meters": 1234,
    "type":["Apartment"]
}
