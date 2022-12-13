<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerController extends Controller
{
    //
    public function huespedes()
    {
        $huesped = Customer::All();
        /*return $huesped;*/
        return view('huesped.huesped')->with("huesped",$huesped);
    }

    public function registrarHuesped(Request $formulario)
    { 
        $huesped = new Customer;
        $huesped->nombres=$formulario->firstName;
        $huesped->apellidos=$formulario->lastName;
        $huesped->dni=$formulario->dni;
        $huesped->telefono=$formulario->celular;
        $huesped->direccion=$formulario->address;
        $huesped->save();
        return redirect("crudHuesped");
    }
    public function crudHuesped(){
        $crudHuesped = Customer::paginate(4);
        //return $crudHuesped;
        return view('crudHuesped.crudHuesped')->with('customers',$crudHuesped);
    }
    public function eliminarHuesped($id){
        $huesped = Customer::find($id);
        $huesped->delete();
        return redirect("crudHuesped");
    }
    public function editarHuesped($id){
      $huesped = Customer::findOrFail($id);
      return view("editarHuesped.editarHuesped",compact('huesped'));
    }
    public function guardarEditarHuesped(Request $request, $id){
        $huesped = Customer::findOrFail($id);
        $huesped->nombres=$request->firstName;
        $huesped->apellidos=$request->lastName;
        $huesped->dni=$request->dni;
        $huesped->telefono=$request->celular;
        $huesped->direccion=$request->address;
        $huesped->save();
        return redirect("crudHuesped");
          }
    }

