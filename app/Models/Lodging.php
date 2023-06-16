<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lodging extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'city', 'district', 'size', 'standing', 'nbr_bathroom', 'nbr_bedroom', 'nbr_livingroom', 'nbr_kitchen', 'type', 'furnished', 'equipment', 'price_day', 'price_month'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
