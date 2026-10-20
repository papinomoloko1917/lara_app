<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function form(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'title' => 'required',
                'email' => 'email',
            ]);

            dump('Данные прошли проверку');

        }

        return view('post.form');
    }
}
