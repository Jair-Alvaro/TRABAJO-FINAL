<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function crearReserva($id){   
       $estado = 'A';

       $habi = Room::where('_id','=',$id)->where('estado','=',$estado)->first();
       if( !$habi){
        return redirect('habitacion');
       }
       else{
        return view('reserva.reserva')->with('habi',$habi);
       }
    }
    public function registrarReserva(Request $formulario){
        $reserva = new Booking;
        $reserva->dni=$formulario->dni;
        $dni = Customer::all()->where('dni', '=',$reserva->dni=$formulario->dni);
        if($dni !='[]' ){
            $reserva->cantidad=$formulario->cantidad;
            $reserva->monto=$formulario->monto;
            $reserva->fecha_inicio=$formulario->inicio;
            $reserva->fecha_fin=$formulario->final;
            $reserva->n_dias=$formulario->dias;
            $reserva->precio_tot=$formulario->total;
            $reserva->user_id= Auth::user()->id;
            $reserva->room_id= $formulario->id_habi;
            $reserva->save();

            $habi = Room::where('_id',$formulario->id_habi)->first();
            $habi->estado = 'O';
            $habi->save();
            return redirect("crudReserva");
        }
        else{
            return redirect('huesped');
        }
   }
    public function crudReserva(){
        $crudReserva = Booking::with('User')
        ->with('Room')
        ->get();
        //dd($crudReserva);
        //return $crudReserva;  
        return view('crudReserva.crudReserva')->with('bookings',$crudReserva); 
    }

    public function eliminarReserva($id){

        $reserva = Booking::where('_id',$id)
        ->with('Room')
        ->first();
//dd($reserva[0]->Room);
        $habi = Room::where('_id',$reserva->Room->_id)->first();
        $habi->estado = 'A';
        $habi->save();

        $reserva->delete();

        
        return redirect("crudReserva");
    }
    public function editarReserva($id){
      $reserva = Booking::findOrFail($id);
      return view("editarReserva.editarReserva",compact('reserva'));
    }

    public function guardarEditarReserva(Request $request, $id){
        $huesped = Booking::findOrFail($id);
        $huesped->dni=$request->dni;
        $huesped->cantidad=$request->cantidad;
        $huesped->monto=$request->monto;
        $huesped->fecha_inicio=$request->inicio;
        $huesped->fecha_fin=$request->final;
        $huesped->n_dias=$request->dias;
        $huesped->precio_tot=$request->total;
        $huesped->save();
        return redirect("crudReserva");
          }
    public function snosotros(){
        return view('nosotros.nosotros'); 
    }
    

    // public function buscarReservaTipo(Request $request){ //tipo 
    //     $habitaciones = Room::where('estado','A')->andWhere('tipo',$request->tipo)->count(); //0->activo
    //     if($habitaciones == 0){
    //         $mensaje = 'No hay habitaciones disponibles';
    //         return view('inicio')->with('mensaje',$mensaje);
    //     }
    //     else {
    //         $habitaciones = Room::where('estado','A')->andWhere('tipo',$request->tipo)->get();
    //         return view('inicio','habitaciones'=> $habitaciones)->with('mensaje',$mensaje);
    //     }
    // }

    // public function nuevaReserva(Request $request){ //$request -> id_habitación - fecha     
    //         //mostrar la vista reserva actual, vista en la cual se solicita la cantida precio y dni de cliente

    // }

    // public function crearReserva(Request $request){ //$request -> id_habitación - precio - cantidad y todos los datos solicitados en el formulario anterior 
    //     $reserva = new Booking;
    //     $reserva->cantidad = $request->cantidad;
    //     $reserva->monto =  $request->precio;
    //     $reserva->room_id =  $request->room_id;
    //     $reserva->user_id =  $request->user_id;
    //     $reserva->customer_id =  $request->customer_id;
    //     $reserva->save();
    //     $mensaje = 'Su reserva ha sido exitosa';

    //     $habitacion = Room::where('id',"$request->room_id")->first();
    //     $habitacion->estado = 'O';
    //     $habitacion->save();
    //     return view('inicio')->with('mensaje',$mensaje);
    // }

    // public function nuevaReserva(Request $request){ //fecha -- tipo 
    //     $habitaciones = Room::where('estado',0)->count(); //0->activo
    //     if($habitaciones == 0){
    //         $mensaje = 'No hay habitaciones disponibles';
    //         return view('inicio')->with('mensaje',$mensaje);
    //     }
    //     else {
    //         $mensaje = 'Su reserva ha sido exitosa';
    //         $habitaciones = Room::where('estado',0);
    //         return view('inicio')->with('mensaje',$mensaje);

            
    //         $reserva = new Booking;
    //         $reserva->cantidad = '5';
    //         $reserva->monto = '200';
    //         $reserva->save();

    //         $habitacion = Room::where('id',"$request->id")->first();
    //         $habitacion->estado = 1;
    //         $habitacion->save();
    //     }
    // }
    
}
