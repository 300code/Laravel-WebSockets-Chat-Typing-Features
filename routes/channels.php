<?php

use Illuminate\Support\Facades\Broadcast;




Broadcast::channel("SendMessageEvent", function () {
    return [
        "name" => $this->name,
        "message" => $this->message,
        "time" => $this->time
    ];
});

Broadcast::channel('events.{userId}', function ($user, $userId) {
    return (int) $user->id === (int) $userId;
});
