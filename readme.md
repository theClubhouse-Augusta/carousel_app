# Carousel App

This is an app that is running at [theClubhouse](http://theClubhou.se) in Augusta Georgia. It runs a carousel of images uploaded to the local file system.

## To start Laravel server
- `php artisan serve`
- In prod 
    - `touch .env`
    - `php artisan key:generate`
    - don't forget `php artisan storage:link`
