<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $dato = $request->get('buscar');
        
        if (!empty($dato)) {
            $clientes = Cliente::where(function ($query) use ($dato) {
                $query->where('NOMBRE', 'like', '%' . $dato . '%')
                    ->orWhere('APELLIDO', 'like', '%' . $dato . '%');
            })
            ->where('ESTADO', '=', '1')
            ->orderBy('COD_CLIENTE', 'desc')
            ->paginate(10);
        } else {
            $clientes = Cliente::where('ESTADO', '=', '1')
                ->orderBy('COD_CLIENTE', 'desc')
                ->take(10)
                ->get();
        }
        //dd($clientes);
        return view('admin.cliente.indexCliente', compact('clientes'));
    }
    public function show($id)
  {
   
   
    $clientes = Cliente::where("COD_CLIENTE","=", $id)->first();
    
    return view('admin.cliente.show', compact('clientes'));
  }
  public function create()
  {
    
    return view('admin.cliente.create');
  }

  public function store(Request $request)
  {
      
      $persona = new Cliente();
      $persona->NOMBRE = strtoupper($request->input('nombre'));
      $persona->APELLIDO = strtoupper($request->input('apellido'));
      $persona->CELULAR = $request->input('celular');
      $persona->CELULAR_2 = $request->input('celular_2');
      $persona->DIRECCION = strtoupper( $request->input('direccion'));
      $persona->URL_DIRECCION = strtoupper( $request->input('url'));
      $persona->NIT = strtoupper( $request->input('nit'));
      $persona->save();
      return redirect()->route('clientes.index')->with('mensaje', 'ok');
      //return redirect()->route('admin.cliente.indexCliente')->with('mensaje', 'ok');
  }
  public function destroy($id)
  {
    $cliente = Cliente::find($id);
    $cliente-> estado = 0;
    $cliente->save();
    return "ok"; 
  }

  public function edit($id)
  {
   
    $clientes = Cliente::find($id);
    return view('admin.cliente.edit', compact('clientes'));
  }
  public function update(Request $request, $id)
  {
    
    $registro = Cliente::findOrFail($id);
    $registro->NOMBRE = strtoupper($request->input('nombre'));
      $registro->APELLIDO = strtoupper($request->input('apellido'));
      $registro->CELULAR = $request->input('celular');
      $registro->CELULAR_2 = $request->input('celular_2');
      $registro->DIRECCION = strtoupper( $request->input('direccion'));
      $registro->URL_DIRECCION = strtoupper( $request->input('url'));
      $registro->NIT = strtoupper( $request->input('nit'));
    
    $registro->save();

    return redirect()->route('clientes.index')->with('mensaje', 'ok');
  }
}
