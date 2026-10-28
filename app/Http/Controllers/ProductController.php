<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function index()
    {
        dump(Hash::make('secret'));
    }
}
