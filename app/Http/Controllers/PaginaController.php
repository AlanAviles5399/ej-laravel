<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function canciones($id = null){
        $listaCanciones = [];
        
        $listaCanciones[] = ['nombre' =>  'Hola'    ,'artista' => 'Yo'];
        $listaCanciones[] = ['nombre' =>  'Adios'   ,'artista' => 'Alguien'];
        $listaCanciones[] = ['nombre' =>  'Bye'     ,'artista' => 'Perenganito'];

        if(!is_null($id)){
            $cancion_seleccionada = $listaCanciones[$id];
        }else{
            $cancion_seleccionada = null;
        }

        //dd($listaCanciones);
        $otraVariable = 'Hola';

        return view('canciones-d13', compact('listaCanciones', 'cancion_seleccionada' ,'otraVariable'));
    }
    //
    public function contacto(){
        return view('contacto');
    }

public function bautizo(Request $request){
    

    $request->validate([
        'nombre' => 'required|min:3|max:255',
        'codigo' => ['required', 'integer', 'max:9'],
    ]);
    //dd($request->all(), $request->input('nombre') ,$request->input('codigo'));
    //dd('Si se ejecuta');
    //recibe y valida
    //gurada
    //redirecciona    
    //return view('bautizo');
    }
}

