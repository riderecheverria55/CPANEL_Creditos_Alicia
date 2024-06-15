<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Sucursal;
use App\Models\IngresoItem;
use App\Models\DetalleIngresoItem;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class IngresoInicialController extends Controller
{
    //
    public function index(Request $request)
    {
        $dato = $request->get('buscar');
        if(!empty($dato))
        {
            $detalle = DB::table('tbl_detalle_ingreso as DI')
                    ->join('tbl_ingreso_items as IT', 'DI.COD_INGRESO_DET', '=', 'IT.COD_INGRESO')
                    ->join('tbl_sucursal as SU', 'IT.COD_SUCURSAL_ING', '=', 'SU.COD_SUCURSAL')
                    ->select(
                        DB::raw('DISTINCT IT.NRO_INGRESO'),
                        'IT.COD_SUCURSAL_ING',
                        'IT.FECHA',
                        'IT.NRO_FACTURA',
                        'IT.COD_INGRESO',
                        'IT.OBSERVACIONES',
                        'SU.NOMBRE_SURCUSAL'
                    )
                    ->where('IT.TIPO_INGRESO', 1)->where('IT.NRO_INGRESO', 'like', '%' . $dato . '%')
                    ->orWhere('SU.NOMBRE_SURCUSAL', 'like', '%' . $dato . '%')
                    ->get();
        }
        else
        {
            $detalle = DB::table('tbl_detalle_ingreso as DI')
            ->join('tbl_ingreso_items as IT', 'DI.COD_INGRESO_DET', '=', 'IT.COD_INGRESO')
            ->join('tbl_sucursal as SU', 'IT.COD_SUCURSAL_ING', '=', 'SU.COD_SUCURSAL')
            ->select(
                DB::raw('DISTINCT IT.NRO_INGRESO'),
                'IT.COD_SUCURSAL_ING',
                'IT.FECHA',
                'IT.NRO_FACTURA',
                'IT.COD_INGRESO',
                'IT.OBSERVACIONES',
                'SU.NOMBRE_SURCUSAL'
            )
            ->where('IT.TIPO_INGRESO', 1)
            ->get(); 
        }
        
        return view('admin.ingresoInicial.index',compact('detalle'));
    }

    public function create()
    {
       
        // $proveedores = Proveedor::where('ESTADO', '=', '1')
        //                 ->orderBy('COD_PROVEEDOR', 'desc')
        //                 ->get();

        $productos = Item::where('ESTADO', '=', '1')
                    ->orderBy('COD_ITEM', 'desc')
                    ->get();

        $sucursales = Sucursal::where('ESTADO', '=', '1')
                    ->orderBy('COD_SUCURSAL', 'desc')
                    ->get();
        return view('admin.ingresoInicial.create', compact('sucursales','productos'));
        //return view('admin.ordenCompra.create', compact('proveedores','sucursales','productos'));
    }
    
    public function store(Request $request)
    {
        $ultimoRegistro = IngresoItem::orderBy('COD_INGRESO', 'desc')->first();   
        $ultimoId = $ultimoRegistro ? $ultimoRegistro->NRO_INGRESO : 0;
        $nuevoId = $ultimoId + 1;
        $codigoFormateado = str_pad($nuevoId, 3, '0', STR_PAD_LEFT);

        $ingreso = new IngresoItem();
        $ingreso->COD_SUCURSAL_ING = $request->input('sucursal_id');
        $ingreso->NRO_FACTURA = $request->input('factura');
        $ingreso->OBSERVACIONES = $request->input('observeciones');
        $ingreso->FECHA = $request->input('fecha');
        $ingreso->NRO_INGRESO = $codigoFormateado;
        $ingreso->save();
       //Ingresamos los productos
        $id_producto = $request->input('idproducto');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');
        $subtotal = $request->input('subtotal');
        $contador = 0;
    
        while($contador < count($id_producto))
        {
            $detalle = new DetalleIngresoItem();
            $detalle->COD_INGRESO_DET = $ingreso->COD_INGRESO;
            $detalle->COD_ITEM = $id_producto[$contador];
            $detalle->CANTIDAD = $cantidad[$contador];
            $detalle->PRECIO_COMPRA = $precio[$contador];
            $detalle->SUB_TOTA_COMPRA =   $subtotal[$contador];
            $detalle->save();   
            $contador = $contador+1;
        }
        return redirect()->route('ingresoInicial.index')
        ->with('success', '¡La orden de compra se ha guardado exitosamente!');
       
    }

    public function destroy($id)
    {
        $ingreso = IngresoItem::find($id);
        DB::table('tbl_detalle_ingreso')->where('COD_INGRESO_DET', $id)->delete();
        DB::table('tbl_ingreso_items')->where('COD_INGRESO', $id)->delete();
        return "ok"; 
    }

    public function pdfVer($id)
    {
        $datos = DB::table('tbl_ingreso_items as TI')
                    ->join('tbl_sucursal as TS', 'TS.COD_SUCURSAL', '=', 'TI.COD_SUCURSAL_ING')
                    ->select(
                        'TI.COD_INGRESO',
                        'TI.FECHA',
                        'TS.NOMBRE_SURCUSAL',
                        'TI.OBSERVACIONES',
                        'TI.NRO_INGRESO',
                        DB::raw("CASE 
                                    WHEN TI.TIPO_INGRESO = '1' THEN 'INVENTARIO INICIAL'
                                    WHEN TI.TIPO_INGRESO = '2' THEN 'ORDEN DE COMPRA'
                                    ELSE TI.TIPO_INGRESO 
                                END AS TIPO_INGRESO")
                    )
                    ->where('TI.COD_INGRESO', $id)
                    ->get();
        $productos = DB::table('tbl_ingreso_items as TI')
                        ->join('tbl_detalle_ingreso as TS', 'TS.COD_INGRESO_DET', '=', 'TI.COD_INGRESO')
                        ->join('tbl_item as I', 'I.COD_ITEM', '=', 'TS.COD_ITEM')
                        ->select('TI.COD_INGRESO', 'TS.COD_ITEM', 'I.NOMBRE', 'TS.CANTIDAD',
                         'TS.PRECIO_COMPRA', 'TS.SUB_TOTA_COMPRA')
                        ->where('TI.COD_INGRESO', '=', $id)
                        ->get();
        //return view('admin.compra.pdfP');
        $pdf = PDF::loadView('admin.ingresoInicial.verPdf',compact('datos','productos'));
        return $pdf->stream('Comprobante_de_ingreso');
    }
}
