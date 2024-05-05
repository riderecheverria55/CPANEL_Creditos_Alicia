<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //
    public function index(Request $request)
    {
        $dato = $request->get('buscar');
        
        if (!empty($dato)) {
            $proveedores = Proveedor::where(function ($query) use ($dato) {
                $query->where('NOMBRE', 'like', '%' . $dato . '%')
                    ->orWhere('CORREO', 'like', '%' . $dato . '%');
            })
            ->where('ESTADO', '=', '1')
            ->orderBy('COD_PROVEEDOR', 'desc')
            ->paginate(10);
        } else {
            $proveedores = Proveedor::where('ESTADO', '=', '1')
                ->orderBy('COD_PROVEEDOR', 'desc')
                ->take(10)
                ->get();
        }
        return view('admin.proveedores.index', compact('proveedores'));
    }

  
    public function store(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->NOMBRE = strtoupper($request->input('nombre'));
        $proveedor->CELULAR = $request->input('celular');
        $proveedor->CELULAR_2 = $request->input('celular_2');
        $proveedor->DIRECCION = strtoupper( $request->input('direccion'));
        $proveedor->CORREO =  $request->input('correo');
        $proveedor->NIT = strtoupper( $request->input('nit'));
        $proveedor->save();
        return redirect()->back()->with('mensaje', 'ok');
    }
    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        
        $proveedor->NOMBRE = strtoupper($request->input('nombre'));
        $proveedor->CELULAR = $request->input('celular');
        $proveedor->CELULAR_2 = $request->input('celular_2');
        $proveedor->DIRECCION = strtoupper( $request->input('direccion'));
        $proveedor->CORREO =  $request->input('correo');
        $proveedor->NIT = strtoupper( $request->input('nit'));
        $proveedor->save();
       
        return redirect()->route('proveedores.index')->with('mensaje', 'ok');
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor-> estado = 0;
        $proveedor->save();
        return "ok"; 
    }
}
