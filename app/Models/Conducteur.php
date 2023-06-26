<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'email',
        'num_permis',
        'adresse',
        'location_id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
