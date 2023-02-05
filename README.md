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
-   api/auth/signin
-   api/auth/signup
-   api/auth/signout
-   api/auth/refresh

## Feel free to discus etc
