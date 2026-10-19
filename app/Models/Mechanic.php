<?php

namespace App\Models;

use Database\Factories\MechanicFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    /** @use HasFactory<MechanicFactory> */
    use HasFactory;

    public function carOwner()
    {
        return $this->hasOneThrough(
            Owner::class,
            Car::class,
        );
    }
}
