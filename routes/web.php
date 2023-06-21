<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\LodgingController;
use App\Http\Controllers\ParkingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('profiluser');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
  




/*Route::get('/', function () {
    return view('welcome');
});*/

/**
 * Page d'accueil
*/

Route::get('/', [VehiculeController::class, 'home']);


/**
 * Barre de navigation
*/

Route::get('/home', [VehiculeController::class, 'home']);


Route::get('/user', function () {
    return view('profiluser');
});

/*Route::get('/login', function () {
    return view('connexion');
});**/

/*Route::get('/register', function () {
    return view('inscription');
});*/

Route::get('/contact', function () {
    return view('contact');
});



/**
 * Route pour les véhicules
*/

Route::get('/createVehicule', [VehiculeController::class, 'create']);

//Route::resource('vehicules', 'App\Http\Controllers\VehiculeController');

Route::post('/addVehicule', [VehiculeController::class, 'store']);
Route::get('/vehicules',  [VehiculeController::class, 'index']);

Route::get('/idvehicules', function() {
    return view ('id');
});

Route::get('/vehicules/edit/{id}',  [VehiculeController::class, 'edit']);
Route::get('/vehicules/show/{id}',  [VehiculeController::class, 'show']);
// Route::get('/showvehicules',  [VehiculeController::class, 'edit']);
Route::post('/vehicules/update/{id}',  [VehiculeController::class, 'update']);
Route::get('/vehicules/delete/{id}',  [VehiculeController::class, 'destroy']);



/**
 * Route pour les logements
*/

Route::get('/createLodging', [LodgingController::class, 'create']);

//Route::resource('Lodgings', 'App\Http\Controllers\LodgingController');

Route::post('/addLodging', [LodgingController::class, 'store']);
Route::get('/Lodgings',  [LodgingController::class, 'index']);

Route::get('/idLodgings', function() {
    return view ('id');
});

Route::get('/Lodgings/edit/{id}',  [LodgingController::class, 'edit']);
Route::get('/Lodgings/show/{id}',  [LodgingController::class, 'show']);
// Route::get('/showLodgings',  [LodgingController::class, 'edit']);
Route::post('/Lodgings/update/{id}',  [LodgingController::class, 'update']);
Route::get('/Lodgings/delete/{id}',  [LodgingController::class, 'destroy']);



/**
 * Route pour les parkings
*/

Route::get('/createParking', [ParkingController::class, 'create']);

/*Route::resource('Parkings', 'App\Http\Controllers\ParkingController');*/

Route::post('/addParking', [ParkingController::class, 'store']);
Route::get('/Parkings',  [ParkingController::class, 'index']);

Route::get('/idParkings', function() {
    return view ('id');
});

Route::get('/Parkings/edit/{id}',  [ParkingController::class, 'edit']);
Route::get('/Parkings/show/{id}',  [ParkingController::class, 'show']);
// Route::get('/showParkings',  [ParkingController::class, 'edit']);
Route::post('/Parkings/update/{id}',  [ParkingController::class, 'update']);
Route::get('/Parkings/delete/{id}',  [ParkingController::class, 'destroy']);