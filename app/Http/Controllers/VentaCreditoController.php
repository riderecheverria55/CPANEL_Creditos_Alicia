<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Item;
use Carbon\Carbon;
use App\Models\VentaCredito;
use App\Models\DetalleVentaCredito;
use Illuminate\Support\Facades\DB;

class VentaCreditoController extends Controller
{
    //
    public function index(Request $request)
    {
        $sql = "SELECT vc.COD_CREDITO,vc.ESTADO,
                CASE 
                    WHEN vc.TIPO_CICLO = 'SEM' THEN 'MENSUAL'
                    WHEN vc.TIPO_CICLO = 'QUI' THEN 'QUINCENAL'
                    WHEN vc.TIPO_CICLO = 'MEN' THEN 'SEMANAL'
                    ELSE vc.TIPO_CICLO
                END AS TIPO_CICLO,
                tc.NOMBRE,
                tc.APELLIDO,
                vc.N_CUOTAS,
                vc.PRECIO_CREDITO
                FROM tbl_venta_credito vc INNER JOIN tbl_cliente tc ON tc.COD_CLIENTE = vc.COD_CLIENTE";
        $resultados = DB::select(DB::raw($sql));
        return view('admin.ventaCredito.indexP',compact('resultados'));
    }

    public function create()
    {
        $clientes = Cliente::where('ESTADO', '=', '1')
        ->orderBy('COD_CLIENTE', 'desc')
        ->get();

        $productos = Item::where('ESTADO', '=', '1')
        ->orderBy('COD_ITEM', 'desc')
        ->get();

        return view('admin.ventaCredito.crearP',compact('clientes','productos'));
    }
    
    public function store(Request $request)
    {
        $ultimoRegistro = VentaCredito::orderBy('COD_CREDITO', 'desc')->first();   
        $ultimoId = $ultimoRegistro ? $ultimoRegistro->COD_CREDITO : 0;
        $nuevoId = $ultimoId + 1;
        $codigoFormateado = str_pad($nuevoId, 3, '0', STR_PAD_LEFT);
        $name = null;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $filename = $request->file->getClientOriginalName();
            $file->move(public_path().'/imagenes/credito/', $filename);
            $name = $filename;
        }
        $ventaCredito = new VentaCredito();
        $ventaCredito->COD_CLIENTE = $request->input('cliente_id');
        $ventaCredito->TIPO_CICLO = $request->input('tipo_ciclo');
        $ventaCredito->COD_CONYUGE = $request->input('conyugue_id');
        $ventaCredito->COD_GAR_PERSONAL = $request->input('garante_id');
        $ventaCredito->FECHA = $request->input('fecha');
        $ventaCredito->COD_PRODUCTO = $request->input('producto_id');
        $ventaCredito->PRECIO_CREDITO = $request->input('precio_credito');
        $ventaCredito->CUOTA_INICIAL = $request->input('cuota_inicial');
        $ventaCredito->SALDO_PAGAR = $request->input('saldo_pagar');
        $ventaCredito->M_PLAZO = $request->input('meses_id');
        $ventaCredito->N_CUOTAS = $request->input('nro_cuotas');
        $ventaCredito->MTO_CUOTA = $request->input('cuotas_pagar');
        $ventaCredito->OBSERVACIONES = $request->input('observaciones');
        $ventaCredito->DIR_URL_FOTO = $name;
        $ventaCredito->COD_REGISTRA = '3';
        $ventaCredito->COD_SUCURSAL = '3';
        $ventaCredito->CODIGO_CREDITO = $codigoFormateado;
        $ventaCredito->save();

        $montoCuota = $request->input('cuota_inicial');
        if($montoCuota > 0)
        {
            $fechaActual = Carbon::now()->toDateString();
            $codUltimo = VentaCredito::orderBy('COD_CREDITO', 'desc')->first();  
            $detalle = new DetalleVentaCredito();
            $detalle->COD_CREDITO = $codUltimo->COD_CREDITO;
            $detalle->FECHA_VENCIMIENTO = $fechaActual;
            $detalle->NRO_CUOTA = 1;
            $detalle->MONTO_PAGADO = $request->input('cuota_inicial');
            $detalle->FECHA_PAGO = $fechaActual;
            $detalle->save();
        }

        return redirect()->route('credito.index')
        ->with('success', '¡La orden de compra se ha guardado exitosamente!');
    }

    public function pagar($id)
    {
        $sql = "SELECT * FROM `tbl_venta_credito` WHERE COD_CREDITO = :id ORDER BY `N_CUOTAS` ASC";
        $results = DB::select($sql, ['id' => $id]);
        $creditoPadre = $results ? $results[0] : null;

        $ultimoRegistro = DB::table('tbl_detalle_venta_credito')
                        ->where('COD_CREDITO', $id)
                        ->orderBy('COD_DETALLE_CREDITO', 'desc')
                        ->first();

        $totalMontoPagado = DB::table('tbl_detalle_venta_credito')
                            ->where('COD_CREDITO', $id)
                            ->sum('MONTO_PAGADO');
        $fechaVencimiento = Carbon::parse($ultimoRegistro->FECHA_VENCIMIENTO);
    
                            switch ($creditoPadre->TIPO_CICLO) {
                                case 'SEM':
                                    $fechaVencimiento->addWeek();
                                    break;
                                case 'QUI':
                                    $fechaVencimiento->addDays(15);
                                    break;
                                case 'MEN':
                                    $fechaVencimiento->addMonth();
                                    break;
                            }
                            $fecha = $fechaVencimiento->format('Y-m-d');
        //dd($creditoPadre);
        return view('admin.ventaCredito.pagarP',compact('creditoPadre','ultimoRegistro','totalMontoPagado','fecha'));
        //dd($creditoPadre);
    }

    public function storePagar(Request $request)
    {
        $fecha = $request->input('FECHA_VENCIMIENTO');
        $id = $request->input('COD_CREDITO');
        $precioCredito = DB::table('tbl_venta_credito')
                        ->where('COD_CREDITO', $id)
                        ->value('PRECIO_CREDITO');
       
        
        $detalle = new DetalleVentaCredito();
        $detalle->COD_CREDITO = $request->input('COD_CREDITO');
        $detalle->TIPO_CUOTA = $request->input('TIPO_CUOTA');
        $detalle->FECHA_VENCIMIENTO = $fecha;
        $detalle->NRO_CUOTA = $request->input('NRO_CUOTA');
        $detalle->TIPO_PAGO = $request->input('TIPO_PAGO');
        $detalle->MONTO_PAGADO = $request->input('TOTAL_PAGAR');
        $detalle->FECHA_PAGO = $request->input('FECHA_PAGO');
        $detalle->OBSERVACION = $request->input('OBSERVACION');
        $detalle->save();
        $totalMontoPagado = DB::table('tbl_detalle_venta_credito')
        ->where('COD_CREDITO', $id)
        ->sum('MONTO_PAGADO');
        if($totalMontoPagado >= $precioCredito )
        {
            $ventaCredito = VentaCredito::find($id);
            if ($ventaCredito) {
                $ventaCredito->ESTADO = 2;
                $ventaCredito->save();
            }
        }
        return redirect()->route('credito.index')
        ->with('success', '¡El pago se ha guardado exitosamente!');

    }

}
