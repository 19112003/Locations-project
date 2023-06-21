<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parkings = Parking::all();
        //dd($parkings);
        return view('parkings.gestion-parking', ['parkings' => $parkings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parkings.gestion-parking');
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
            'name' => 'required|max:255',
            'capacity' => 'required',
            'region' => 'required|max:255',
            'city' => 'required|max:255',
            'district' => 'required|max:255',
        ]);

        //dd($request);
    

        $parking = new Parking;
        $parking->name = $request->name;
        $parking->capacity = $request->capacity;
        $parking->region = $request->region;
        $parking->city = $request->city;
        $parking->district = $request->district;
        $parking->save();

        
        return redirect('/Parkings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function show(Parking $parking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking $parking)
    {
        $parking = Parking::findOrFail($id);
        // dd($parking);
        
        return view('parkings.gestion-parking', compact('parking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $parking = Parking::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'capacity' => 'required',
            'region' => 'required|max:255',
            'city' => 'required|max:255',
            'district' => 'required|max:255',
            
        ]);

        
        
        $parking->name = $request->name;
        $parking->capacity = $request->capacity;
        $parking->region = $request->region;
        $parking->city = $request->city;
        $parking->district = $request->district;
        $parking->save();
    
        // $parking = parking::create($validatedData);
        return redirect('/Parkings')->with('success', 'parking modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parking = Parking::findOrFail($id);
       // dd($patient);
        $parking->delete();

        return redirect('/Parkings')->with('success', 'Parking supprimé avec succès');
    }
}
