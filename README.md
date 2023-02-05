## Run
1. Install the dependencies  
```
composer install
```
2. Generate APP_KEY
```
php artisan key:generate
```
3. Generate JWT secret
```
php artisan jwt:secret
```
4. Migrate the user migrations
```
php artisan migrate
```
5. Run the server
```
php artisan serve
```

## Route
-   api/auth/signin\
email (required, email)\
password (required)
```
{
    "email":"your@email.com",
    "password":"yourpassword"
}
```
-   api/auth/signup
name (required, only Alphabet and Space, max:50)\
email (required, email)\
password (required)
```

{
    "name":"yourname",
    "email":"your@email.com",
    "password":"yourpassword"
}
```
-   api/auth/signout
Just hit the endpoint with token given and set it on Authorization Header with given token

-   api/auth/refresh
Just hit the endpoint with token given and set it on Authorization Header with given token

## Feel free to discus etc
