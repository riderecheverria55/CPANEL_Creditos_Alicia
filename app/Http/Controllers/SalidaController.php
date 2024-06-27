<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Sucursal;
use App\Models\Salida;
use App\Models\DetalleSalida;
use App\Models\Empleado;


class SalidaController extends Controller
{
    //
    public function index(Request $request)
    {
        $dato = $request->get('buscar');
        if (!empty($dato))
        {
            $resultado = DB::table('tbl_salida as s')
                        ->select(
                            's.COD_SALIDA',
                            's.NUMERO_SALIDA',
                            DB::raw("
                                CASE 
                                    WHEN s.TIPO_SALIDA = 1 THEN 'traspaso'
                                    WHEN s.TIPO_SALIDA = 2 THEN 'baja'
                                    ELSE 'otro'
                                END AS TIPO_SALIDA
                            "),
                            's.FECHA',
                            's.OBSERVACION',
                            'es.NOMBRE_SURCUSAL as ENTRADA_SUCURSAL_NOMBRE',
                            'ss.NOMBRE_SURCUSAL as SALIDA_SUCURSAL_NOMBRE'
                        )
                        ->join('tbl_sucursal as es', 's.SALIDA_SUCURSAL', '=', 'es.COD_SUCURSAL')
                        ->join('tbl_sucursal as ss', 's.INGRESO_SUCURSAL', '=', 'ss.COD_SUCURSAL')
                        ->where('s.NUMERO_SALIDA', 'like', '%' . $dato . '%')
                        ->orWhere('es.NOMBRE_SURCUSAL', 'like', '%' . $dato . '%')
                        ->orWhere('ss.NOMBRE_SURCUSAL', 'like', '%' . $dato . '%')
                        ->get();
        }
        else
        {
            $resultado = DB::table('tbl_salida as s')
                        ->select(
                            's.COD_SALIDA',
                            's.NUMERO_SALIDA',
                            DB::raw("
                                CASE 
                                    WHEN s.TIPO_SALIDA = 1 THEN 'traspaso'
                                    WHEN s.TIPO_SALIDA = 2 THEN 'baja'
                                    ELSE 'otro'
                                END AS TIPO_SALIDA
                            "),
                            's.FECHA',
                            's.OBSERVACION',
                            'es.NOMBRE_SURCUSAL as ENTRADA_SUCURSAL_NOMBRE',
                            'ss.NOMBRE_SURCUSAL as SALIDA_SUCURSAL_NOMBRE'
                        )
                        ->join('tbl_sucursal as es', 's.SALIDA_SUCURSAL', '=', 'es.COD_SUCURSAL')
                        ->join('tbl_sucursal as ss', 's.INGRESO_SUCURSAL', '=', 'ss.COD_SUCURSAL')
                        ->get();
        }
        
        return view('admin.salida.indexP',compact('resultado'));
    }

    public function create()
    {
       
        $empleados = Empleado::where('ESTADO', '=', '1')
                        ->orderBy('COD_EMPLEADO', 'desc')
                        ->get();

        $productos = Item::where('ESTADO', '=', '1')
                    ->orderBy('COD_ITEM', 'desc')
                    ->get();

        $sucursales = Sucursal::where('ESTADO', '=', '1')
                    ->orderBy('COD_SUCURSAL', 'desc')
                    ->get();
        return view('admin.salida.crearP', compact('sucursales','productos','empleados'));
        //return view('admin.ordenCompra.create', compact('proveedores','sucursales','productos'));
    }

    public function store(Request $request)
    {
        $ultimoRegistro = Salida::orderBy('COD_SALIDA', 'desc')->first();   
        $ultimoId = $ultimoRegistro ? $ultimoRegistro->NRO_INGRESO : 0;
        $nuevoId = $ultimoId + 1;
        $codigoFormateado = str_pad($nuevoId, 3, '0', STR_PAD_LEFT);
        
        $salida = new Salida();
        $salida->SALIDA_SUCURSAL = $request->input('sucursal_id');
        $salida->INGRESO_SUCURSAL = $request->input('sucursal_id_ingreso');
        $salida->TIPO_SALIDA = $request->input('tipo_salida');
        $salida->NUMERO_SALIDA = $codigoFormateado;
        $salida->OBSERVACION = $request->input('observeciones');
        $salida->FECHA = $request->input('fecha');
        $salida->ENCARGADO = $request->input('encargado_id');
        $salida->CHOFER = $request->input('chofer_id');
        $salida->save();
       
        $id_producto = $request->input('idproducto');
        $cantidad = $request->input('cantidad');
        $contador = 0;
    
        while($contador < count($id_producto))
        {
            $detalle = new DetalleSalida();
            $detalle->COD_SALIDA_DETA = $salida->COD_SALIDA;
            $detalle->COD_ITEM = $id_producto[$contador];
            $detalle->CANTIDAD = $cantidad[$contador];
          
            $detalle->save();   
            $contador = $contador+1;
        }
        return redirect()->route('salida.index')
        ->with('success', '¡La orden de compra se ha guardado exitosamente!');
       
    }

    public function destroy($id)
    {
        $ingreso = Salida::find($id);
        DB::table('tbl_detalle_salida')->where('COD_SALIDA_DETA', $id)->delete();
        DB::table('tbl_salida')->where('COD_SALIDA', $id)->delete();
        return "ok"; 
    }

    public function pdfVer($id)
    {
        $datos = DB::table('tbl_salida as s')
                        ->select(
                            's.COD_SALIDA',
                            's.NUMERO_SALIDA',
                            DB::raw("
                                CASE 
                                    WHEN s.TIPO_SALIDA = 1 THEN 'traspaso'
                                    WHEN s.TIPO_SALIDA = 2 THEN 'baja'
                                    ELSE 'otro'
                                END AS TIPO_SALIDA
                            "),
                            's.FECHA',
                            's.OBSERVACION',
                            'es.NOMBRE_SURCUSAL as ENTRADA_SUCURSAL_NOMBRE',
                            'ss.NOMBRE_SURCUSAL as SALIDA_SUCURSAL_NOMBRE',
                            'ea.NOMBRE as NOMBRE_ENCARGADO',
                            'ea.APELLIDO as APELLIDO_ENCARGADO',
                            'ee.NOMBRE as NOMBRE_CHOFER',
                            'ee.APELLIDO as APELLIDO_CHOFER',


                        )
                        ->join('tbl_empleado  as ea', 's.ENCARGADO', '=', 'ea.COD_EMPLEADO')
                        ->join('tbl_empleado  as ee', 's.CHOFER', '=', 'ee.COD_EMPLEADO')
                        ->join('tbl_sucursal as es', 's.SALIDA_SUCURSAL', '=', 'es.COD_SUCURSAL')
                        ->join('tbl_sucursal as ss', 's.INGRESO_SUCURSAL', '=', 'ss.COD_SUCURSAL')
                        ->where('s.COD_SALIDA', $id)
                        ->get();
        $productos =  DB::table('tbl_detalle_salida as ds')
        ->join('tbl_salida as ts', 'ds.COD_SALIDA_DETA', '=', 'ts.COD_SALIDA')
        ->join('tbl_item as ti', 'ds.COD_ITEM', '=', 'ti.COD_ITEM')
        ->select('ds.CANTIDAD', 'ti.NOMBRE', 'ts.NUMERO_SALIDA')
        ->where('ds.COD_SALIDA_DETA', '=', $id)
        ->get();
        $pdf = PDF::loadView('admin.salida.pdfP',compact('datos','productos'));
        return $pdf->stream('salida');
    }
}
