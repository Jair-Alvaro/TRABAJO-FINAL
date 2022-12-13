<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Intervention\Image\Facades\Image;


class RoomController extends Controller
{
    public function habitaciones(Request $request){
        $buscarpor=$request->get('buscarpor');
        $rooms = Room::all()->where('tipo_nombre','=',$buscarpor);
        //return $habitaciones;
        return view('habitacion.habitacion',compact('rooms','buscarpor'));
    }
    public function mostrarImagenHabitaciones(String $nombre){
        $file = Storage::disk('rooms')->get($nombre);
        return Image::make($file)->response();
    }
}
