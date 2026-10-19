<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;

class CarController extends Controller
{
    public function show()
    {
        dump(Mechanic::find(1)->carOwner()->get());
    }
}
