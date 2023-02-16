<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('canciones/{id?}', [PaginaController::class, 'canciones']  //function ($id = null){
//     $listaCanciones = [];
    
//     $listaCanciones[] = ['nombre' =>  'Hola'    ,'artista' => 'Yo'];
//     $listaCanciones[] = ['nombre' =>  'Adios'   ,'artista' => 'Alguien'];
//     $listaCanciones[] = ['nombre' =>  'Bye'     ,'artista' => 'Perenganito'];

// if(!is_null($id)){
//     $cancion_seleccionada = $listaCanciones[$id];
// }else{
//     $cancion_seleccionada = null;
// }

//     //dd($listaCanciones);
//     $otraVariable = 'Hola';

//     return view('canciones-d13', compact('listaCanciones', 'cancion_seleccionada' ,'otraVariable'));
//     //->with(['listaCanciones' => $listaCanciones, 'otraVariable' => $otraVariable ]);
);

// Route::get('canciones/{id}', function($id) {
//     $listaCanciones = [];
    
//     $listaCanciones[] = ['nombre' =>  'Hola'     ,'artista' => 'Yo'];
//     $listaCanciones[] = ['nombre' =>  'Adios'    ,'artista' => 'Alguien'];
//     $listaCanciones[] = ['nombre' =>  'Bye'      ,'artista' => 'Perenganito'];

//     $cancion_seleccionada = $listaCanciones[$id];

//     return view('cancion-detalle', compact('cancion_seleccionada'));
// });

Route::get('contacto', [PaginaController::class, 'contacto']);
Route::post('contacto', [PaginaController::class, 'bautizo']);