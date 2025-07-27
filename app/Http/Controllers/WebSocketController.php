<?php

namespace App\Http\Controllers;


use App\Events\MyEvent;
use App\Jobs\SendWelcomeEmail;

class WebSocketController extends Controller
{
    public function store()
    {
        event(new MyEvent('hello world'));
        SendWelcomeEmail::dispatch(auth()->user());
        return 'Notification sent!';
    }
}
