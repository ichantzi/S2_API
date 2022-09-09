# S2_API2
A search service for all SpiN clients (Spitogatos hiring process assignment)

## This is the REST API endpoint 


## The source code which contains the project is in the master branch.


### To initialize the project, please do the following:

download the project

- go to your .env file and add the following variable:

BEARER_TOKEN = eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vZGVtby5jb29yZGkudGVzdC9hcGkvbG9naW4iLCJpYXQiOjE2NDY4MTEwODgsImV4cCI6MTY0Njg5NzQ4OCwibmJmIjoxNjQ2ODExMDg4LCJqdGkiOiJBamtVMGVINEdDOXdpQ0l3Iiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.cOurhqZxd-eZA5NFF4tCc1da7ha8lpD2VsSsrn6fG8Y

## This is a Laravel 8 project, so the appropriate Laravel installation is required

- run the following commands to your terminal, in the project's directory:

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
