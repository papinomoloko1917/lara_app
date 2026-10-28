<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function ship()
    {
        $userName = 'Max';

        Mail::to('maxchifan@yandex.ru')->send(new OrderShipped($userName));

        return 'Письмо отправлено';
    }
}
