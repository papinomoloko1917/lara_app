<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function welcome()
    {
        Mail::to('ip_varivoda@mail.ru')
            ->send(new OrderShipped('Ivan'));

        return 'Mail sent';
    }
}
