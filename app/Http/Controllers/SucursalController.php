<?php

namespace App\Http\Controllers;
use App\Models\Sucursal;
use App\Models\Empleado;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    //
    //
    public function index(Request $request)
    {
        $dato = $request->get('buscar');
        $empleado = Empleado::where('ESTADO','=',1)
        ->orderBy('NOMBRE','ASC')->get();
        if(!empty($dato))
        {
            $sucursal = Sucursal::where(function ($query) use ($dato) {
                $query->where('NOMBRE_SUCURSAL', 'like', '%' . $dato . '%')
                    ->orWhere('DIRECCION', 'like', '%' . $dato . '%');
            })
            ->where('ESTADO', '=', '1')
            ->orderBy('COD_SUCURSAL', 'desc')
            ->paginate(10);
        }
        else
        {
            $sucursal = Sucursal::where('ESTADO', '=', '1')
                ->orderBy('COD_SUCURSAL', 'desc')
                ->take(10)
                ->get();
        }
        return view('admin.sucursal.index', compact('sucursal','empleado'));
    }

  
    public function store(Request $request)
    {
        $sucursal = new Sucursal();
        $sucursal->NOMBRE_SURCUSAL = strtoupper($request->input('nombre'));
        $sucursal->DIRECCION = strtoupper( $request->input('direccion'));
        $sucursal->EMPLEADO_COD =  $request->input('cod_empleado');
        $sucursal->save();
        return redirect()->back()->with('mensaje', 'ok');
    }
    public function update(Request $request, $id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->NOMBRE_SURCUSAL = strtoupper($request->input('nombre'));
        $sucursal->DIRECCION = strtoupper( $request->input('direccion'));
        $sucursal->EMPLEADO_COD =  $request->input('cod_empleado');
        $sucursal->save();
        // $proveedor->NOMBRE = strtoupper($request->input('nombre'));
        // $proveedor->CELULAR = $request->input('celular');
        // $proveedor->CELULAR_2 = $request->input('celular_2');
        // $proveedor->DIRECCION = strtoupper( $request->input('direccion'));
        // $proveedor->CORREO =  $request->input('correo');
        // $proveedor->NIT = strtoupper( $request->input('nit'));
        // $proveedor->save();
       
        return redirect()->route('sucursales.index')->with('mensaje', 'ok');
    }

    public function destroy($id)
    {
        $sucursal = Sucursal::find($id);
        $sucursal-> estado = 0;
        $sucursal->save();
        return "ok"; 
    }
}
