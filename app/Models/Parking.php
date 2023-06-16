<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'capacity', 'region', 'city', 'district'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}
