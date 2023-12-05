<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CineStarController extends Controller{

    public function Index(){
        return view('Index');
    }

    public function cines(){
        $cines=DB::select('call sp_getCines()');
        return view('cines',['cines' => $cines]);
    }

    public function cine($id){
        $cine=DB::select('call sp_getCine('.$id.')');
        $Tarifas=DB::select('call sp_getCineTarifas('.$id.')');
        $Cinepelicula=DB::select('call sp_getCinePeliculas('.$id.')');
        return view('cine', ['cine' =>$cine, 'Tarifas' =>$Tarifas, 'Cinepeli' =>$Cinepelicula]);
    }

    public function peliculas($id){
        $peliculas=DB::select('call sp_getPeliculas(?)', [$id== 'cartelera' ? 1 : 2]);
        return view('peliculas', ['peliculas' =>$peliculas]);
    }

    public function pelicula($id){
        $pelicula=DB::select('call sp_getPelicula('.$id.')');
        return view('pelicula', ['pelicula'=>$pelicula]);
    }
}

?>
