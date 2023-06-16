<?php

namespace App\Http\Controllers;

use App\Models\Lodging;
use Illuminate\Http\Request;

class LodgingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lodgings = lodging::all();
        /*foreach ($lodgings as $lodging) {
            $lodging->images = lodgingImage::where('lodging_id', $lodging->id)->get();
        }*/
        //dd($lodgings);
        return view('lodgings.all-lodging', compact('lodgings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lodgings.add-lodging');
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
            'title' => 'required',
            'city' => 'required|max:255',
            'district' => 'required|max:255',
            'size' => 'required',
            'standing' => 'required',
            'nbr_bathroom' => 'required',
            'nbr_bedroom' => 'required',
            'nbr_livingroom' => 'required',
            'nbr_kitchen' => 'required',
            'type' => 'required',
            'furnished' => 'required|boolean',
            'equipment' => 'required',
            'price_day' => 'required',
            'price_month' => 'required',
        ]);

        //dd($request);
        
        //$filename = "";

        //dd($request->hasFile('image'));

        /*if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $path = $image->storeAs('public/images', $filename);
        }*/

        /*$city = $request->input('city');
        echo $city;
        exit();*/

        $arrayTostring = implode(',', $request->input('equipment'));
        /*echo $arrayTostring;
        exit();*/

        //dd($request);

        $lodging = new lodging;
        $lodging->title = $request->title;
        $lodging->city = $request->city;
        $lodging->district = $request->district;
        $lodging->size = $request->size;
        $lodging->standing = $request->standing;
        $lodging->nbr_bathroom = $request->nbr_bathroom;
        $lodging->nbr_bedroom = $request->nbr_bedroom;
        $lodging->nbr_livingroom = $request->nbr_livingroom;
        $lodging->nbr_kitchen = $request->nbr_kitchen;
        $lodging->type = $request->type;
        $lodging->furnished = $request->furnished;
        $lodging->equipment = $arrayTostring;
        $lodging->price_day = $request->price_day;
        $lodging->price_month = $request->price_month;
        $lodging->save();


        /*$lodgingImage = new lodgingImage();
        $lodgingImage->lodging_id = $lodging->id;
        $lodgingImage->filename = $filename;
        $lodgingImage->path = $path;
        $lodgingImage->save();*/
        
    
        // $lodging = lodging::create($validatedData);
        return redirect('/lodgings')->with('success', 'lodging ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lodging  $lodging
     * @return \Illuminate\Http\Response
     */
    public function show(Lodging $lodging)
    {
        $lodging = lodging::findOrFail($id);
        $images = lodgingImage::where('lodging_id', $id)->get();
        return view('lodgings.show', compact('lodging', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lodging  $lodging
     * @return \Illuminate\Http\Response
     */
    public function edit(Lodging $lodging)
    {
        $lodging = lodging::findOrFail($id);
        // dd($lodging);
        
        return view('lodgings.edit', compact('lodging'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lodging  $lodging
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lodging $lodging)
    {
        $lodging = lodging::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'city' => 'required|max:255',
            'district' => 'required|max:255',
            'size' => 'required',
            'standing' => 'required',
            'nbr_bathroom' => 'required',
            'nbr_bedroom' => 'required',
            'nbr_livingroom' => 'required',
            'nbr_kitchen' => 'required',
            'type' => 'required',
            'furnished' => 'required|boolean',
            'equipment' => 'required',
            'price_day' => 'required',
            'price_month' => 'required',
        ]);

        
        
        $lodging->title = $request->title;
        $lodging->city = $request->city;
        $lodging->district = $request->district;
        $lodging->size = $request->size;
        $lodging->standing = $request->standing;
        $lodging->nbr_bathroom = $request->nbr_bathroom;
        $lodging->nbr_bedroom = $request->nbr_bedroom;
        $lodging->nbr_livingroom = $request->nbr_livingroom;
        $lodging->nbr_kitchen = $request->nbr_kitchen;
        $lodging->type = $request->type;
        $lodging->furnished = $request->furnished;
        $lodging->equipment = $request->equipment;
        $lodging->price_day = $request->price_day;
        $lodging->save();
    
        // $lodging = lodging::create($validatedData);
        return redirect('/lodgings')->with('success', 'lodging modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lodging  $lodging
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lodging $lodging)
    {
        $lodging = lodging::findOrFail($id);
        // dd($lodging);
 
         $lodging->delete();
 
 
 
     return redirect('/lodgings')->with('success', 'lodging supprimé avec succès');
    }
}
