<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    protected $fillable = ['name', 'price', 'active'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}