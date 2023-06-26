<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = ['modele', 'marque', 'categorie', 'prix', 'nbre_place', 'nbre_porte', 'energie', 'boite_vitesse', 'kilometrage', 'annee', 'supplement', 'etat', 'disponible'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function images()
    {
        return $this->hasMany(VehiculeImage::class);
    }

    public function parking() 
    {
        return $this->belongsTo(Parking::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

}
