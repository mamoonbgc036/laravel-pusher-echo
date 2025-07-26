<?php

namespace App\Http\Controllers;


use App\Events\MyEvent;
use Illuminate\Http\Request;
use App\Events\NewNotification;

class WebSocketController extends Controller
{
    public function store()
    {
        event(new MyEvent('hello world'));
        return 'Notification sent!';
    }
}
