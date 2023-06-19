<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\VehiculeImage;
use App\Models\Parking;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::all();
        foreach ($vehicules as $vehicule) {
            $vehicule->images = VehiculeImage::where('vehicule_id', $vehicule->id)->get();
        }


        // dd($vehicule);
        return view('vehicules.all-vehicles', compact('vehicules'));
    }

    //Affichage des véhicules dans la page d'acceuil

    public function home()
    {
        $vehicules = Vehicule::all();
        foreach ($vehicules as $vehicule) {
            $vehicule->images = VehiculeImage::where('vehicule_id', $vehicule->id)->get();
        }


        // dd($vehicule);
        return view('index', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parkings = Parking::all();
        //dd($parkings);
        return view('vehicules.add-vehicles', compact('parkings'));
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
            'modele' => 'required',
            'marque' => 'required|max:255',
            'categorie' => 'required|max:255',
            'prix' => 'required',
            'nbre_place' => 'required',
            'nbre_porte' => 'required',
            'energie' => 'required|max:255',
            'boite_vitesse' => 'required|max:255',
            'kilometrage' => 'required',
            'annee' => 'required',
            'supplement' => 'required',
            'etat' => 'required',
            'disponible' => 'required|boolean',
        ]);
        $filename = "";

        //dd($request->hasFile('image'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            foreach ($image as $images) {
                $filename = $images->getClientOriginalName();
                $path = $images->storeAs('public/images/',$filename);
            }
            
        }

        $parking = Parking::find($request->parking_id);
        if($parking) {
            $parkingId = $parking->id;
        }

        /*$marque = $request->input('marque');
        echo $marque;
        exit();*/

        $arrayTostring = implode(',', $request->input('supplement'));
        /*echo $arrayTostring;
        exit();*/

        //dd($request);

        $vehicule = new Vehicule;
        $vehicule->modele = $request->modele;
        $vehicule->marque = $request->marque;
        $vehicule->categorie = $request->categorie;
        $vehicule->prix = $request->prix;
        $vehicule->nbre_place = $request->nbre_place;
        $vehicule->nbre_porte = $request->nbre_porte;
        $vehicule->energie = $request->energie;
        $vehicule->boite_vitesse = $request->boite_vitesse;
        $vehicule->kilometrage = $request->kilometrage;
        $vehicule->annee = $request->annee;
        $vehicule->supplement = $arrayTostring;
        $vehicule->etat = $request->etat;
        $vehicule->disponible = $request->disponible;
        $vehicule->parking_id = $parkingId;
        $vehicule->save();


        $vehiculeImage = new VehiculeImage();
        $vehiculeImage->vehicule_id = $vehicule->id;
        $vehiculeImage->filename = $filename;
        $vehiculeImage->path = $path;
        $vehiculeImage->save();

        
       // $parking->vehicules()->save($vehicule);
        
    
        // $vehicule = vehicule::create($validatedData);
        return redirect('/vehicules')->with('success', 'vehicule ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        $images = VehiculeImage::where('vehicule_id', $id)->get();
        return view('vehicules.show', compact('vehicule', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        // dd($vehicule);
        
        return view('vehicules.edit-vehicles', compact('vehicule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicule = Vehicule::findOrFail($id);

        $request->validate([
            'modele' => 'required',
            'marque' => 'required|max:255',
            'categorie' => 'required|max:255',
            'prix' => 'required',
            'nbre_place' => 'required',
            'nbre_porte' => 'required',
            'energie' => 'required|max:255',
            'boite_vitesse' => 'required|max:255',
            'kilometrage' => 'required',
            'annee' => 'required',
            'supplement' => 'required',
            'etat' => 'required',
            'disponible' => 'required|boolean',
        ]);

        
        
        $vehicule->modele = $request->modele;
        $vehicule->marque = $request->marque;
        $vehicule->categorie = $request->categorie;
        $vehicule->prix = $request->prix;
        $vehicule->nbre_place = $request->nbre_place;
        $vehicule->nbre_porte = $request->nbre_porte;
        $vehicule->energie = $request->energie;
        $vehicule->boite_vitesse = $request->boite_vitesse;
        $vehicule->kilometrage = $request->kilometrage;
        $vehicule->annee = $request->annee;
        $vehicule->supplement = $request->supplement;
        $vehicule->etat = $request->etat;
        $vehicule->disponible = $request->disponible;
        $vehicule->save();
    
        // $vehicule = vehicule::create($validatedData);
        return redirect('/vehicules')->with('success', 'vehicule modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        // dd($vehicule);
 
         $vehicule->delete();
 
 
 
     return redirect('/vehicules')->with('success', 'vehicule supprimé avec succès');
    }
}
