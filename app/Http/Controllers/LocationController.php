<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Vehicule;
use App\Models\VehiculeImage;
use App\Models\User;
use App\Models\Conducteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($vehicule_id)
    {
        $vehicule = Vehicule::findOrFail($vehicule_id);
        $images = VehiculeImage::where('vehicule_id', $vehicule_id)->get();
        $location = new Location;
        $location->vehicule_id = $vehicule_id;
        $location->prix_total = $vehicule->prix;
        $location->user_id = Auth::id();
        $location->statut = 'en_attente';
        return view('locations.add-location', compact('location', 'vehicule','images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'contact' => 'required',
            'email' => 'required|email',
            'num_permis' => 'required',
            'adresse' => 'required',
        ]);

       // dd($request);


        $vehicule = Vehicule::findOrFail($request->vehicule_id);
        dd($vehicule);

        $prix_total = $vehicule->prix;
        
        $location = new Location;
        $location->user_id = Auth::id();
        $location->vehicule_id = $request->input('vehicule_id');
        $location->date_debut = $request->input('date_debut');
        $location->date_fin = $request->input('date_fin');
        $location->prix_total = $prix_total;
        $location->statut = 'en_attente';
        $location->save();


        $conducteur = new Conducteur;
        $conducteur->nom = $request->input('nom');
        $conducteur->prenom = $request->input('prenom');
        $conducteur->email = $request->input('email');
        $conducteur->contact = $request->input('contact');
        $conducteur->adresse = $request->input('adresse');
        $conducteur->num_permis = $request->input('num_permis');
        $conducteur->location_id = $location->id;
        $conducteur->save();

        return redirect()->back()->with('success', 'La location a été créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
