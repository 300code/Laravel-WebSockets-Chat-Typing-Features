## Laravel WebSockets Chat and Typing Notify Sockets Application Example

Realtime chat application built with Laravel WebSockets. 

## Usage

1. Clone this repository git clone [git@github.com:300code/Laravel-WebSockets-Chat-Typing-Features.git](https://github.com/300code/Laravel-WebSockets-Chat-Typing-Features.git)
2. composer install
3. php artisan key:generate
4. cp .env.example .env and configure your database in .env file.
5. Run migration to create tables in database. php artisan migrate
6. Final step run websockets server. php artisan websockets:serve,



## Command Line Options
  you can add this channel on route for sending packet to socket as typing user ....
  
```php
Broadcast::channel('events.{userId}', function ($user, $userId) {
    return (int) $user->id === (int) $userId;
});
```

# Links
- [Video Tutorial](https://github.com/300code).
- [Laravel Native Post](https://laravel.com/docs/11.x/broadcasting)

