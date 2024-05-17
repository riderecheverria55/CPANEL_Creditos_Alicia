<?php

namespace App\Http\Controllers;
//use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    $url = $request->input('url');
    $ciCliente = $request->input('ci');
    $qrCode = QrCode::format('png')->size(300)->generate($url);
    $nombreArchivo = 'qr'. $ciCliente . '.png';
    $path = public_path('imagenes/qr/' . $nombreArchivo);
    file_put_contents($path, $qrCode);
    $cliente = new Cliente();
    $cliente->NOMBRE = strtoupper($request->input('nombre'));
    $cliente->APELLIDO = strtoupper($request->input('apellido'));
    $cliente->CELULAR = $request->input('celular');
    $cliente->CELULAR_2 = $request->input('celular_2');
    $cliente->DIRECCION = strtoupper( $request->input('direccion'));
    $cliente->URL_DIRECCION = strtoupper( $request->input('url'));
    $cliente->CORREO =  $request->input('correo');
    $cliente->CI =  $request->input('ci');
    $cliente->IMAGEN_QR = $nombreArchivo;
    $cliente->NIT = strtoupper( $request->input('nit'));
    $cliente->save();
    return redirect()->route('clientes.index')->with('mensaje', 'ok');
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
    
    $cliente = Cliente::findOrFail($id);
    $direccionUrl = strtoupper( $request->input('url'));
    if ($direccionUrl !== $cliente->URL_DIRECCION)
    {
      //se Genera un nuevo qr
      $nombreArchivo = $cliente->IMAGEN_QR;
      $rutaArchivo = public_path('imagenes/qr/' . $nombreArchivo);
      if (file_exists($rutaArchivo)) {
        unlink($rutaArchivo);
       
      }
      $url = $request->input('url');
      $ciCliente = $request->input('ci');
      $qrCode = QrCode::format('png')->size(300)->generate($url);
      $nombreArchivo = 'qr'. $ciCliente . '.png';
      $path = public_path('imagenes/qr/' . $nombreArchivo);
      file_put_contents($path, $qrCode);
      $cliente->NOMBRE = strtoupper($request->input('nombre'));
      $cliente->APELLIDO = strtoupper($request->input('apellido'));
      $cliente->CELULAR = $request->input('celular');
      $cliente->CELULAR_2 = $request->input('celular_2');
      $cliente->DIRECCION = strtoupper( $request->input('direccion'));
      $cliente->URL_DIRECCION = strtoupper( $request->input('url'));
      $cliente->NIT = strtoupper( $request->input('nit'));
      $cliente->IMAGEN_QR = $nombreArchivo;
      $cliente->CORREO =  $request->input('correo');
      $cliente->CI =  $request->input('ci');
      $cliente->save();
      
    }
    else{
      $cliente->NOMBRE = strtoupper($request->input('nombre'));
      $cliente->APELLIDO = strtoupper($request->input('apellido'));
      $cliente->CELULAR = $request->input('celular');
      $cliente->CELULAR_2 = $request->input('celular_2');
      $cliente->DIRECCION = strtoupper( $request->input('direccion'));
      $cliente->URL_DIRECCION = strtoupper( $request->input('url'));
      $cliente->NIT = strtoupper( $request->input('nit'));
      
      $cliente->CORREO =  $request->input('correo');
      $cliente->CI =  $request->input('ci');
      $cliente->save();
    }
    
    
    
    // $cliente->save();

    return redirect()->route('clientes.index')->with('mensaje', 'ok');
  }
}
