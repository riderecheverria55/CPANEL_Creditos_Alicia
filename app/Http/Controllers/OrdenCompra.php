<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Sucursal;
use App\Models\OrdenCompraM;
use App\Models\DetalleOrdenCompra;
use App\Models\Item;

class OrdenCompra extends Controller
{
    //
    public function index(Request $request)
    {
        $ordenesCompra = OrdenCompraM::select('tbl_orden_compra.COD_COMPRA', 'tbl_proveedor.NOMBRE as NOMBRE_PROVEEDOR', 
                        'tbl_orden_compra.DESCRIPCION', 'tbl_sucursal.NOMBRE_SURCUSAL', 'tbl_orden_compra.FECHA', 
                        'tbl_orden_compra.NRO_FACTURA')
                        ->join('tbl_sucursal', 'tbl_orden_compra.COD_SUCURSAL', '=', 'tbl_sucursal.COD_SUCURSAL')
                        ->join('tbl_proveedor', 'tbl_orden_compra.COD_PROVEEDOR', '=', 'tbl_proveedor.COD_PROVEEDOR')
                        ->orderBy('tbl_orden_compra.COD_COMPRA', 'desc')
                        ->get();
        return view('admin.ordenCompra.index',compact('ordenesCompra'));
    }

    public function create()
    {
        $proveedores = Proveedor::where('ESTADO', '=', '1')
                        ->orderBy('COD_PROVEEDOR', 'desc')
                        ->get();

        $productos = Item::where('ESTADO', '=', '1')
                    ->orderBy('COD_ITEM', 'desc')
                    ->get();

        $sucursales = Sucursal::where('ESTADO', '=', '1')
                    ->orderBy('COD_SUCURSAL', 'desc')
                    ->get();

        return view('admin.ordenCompra.create', compact('proveedores','sucursales','productos'));
    }
    public function store(Request $request)
    {
       
        $ultimoRegistro = OrdenCompraM::orderBy('COD_COMPRA', 'desc')->first();   
        $ultimoId = $ultimoRegistro ? $ultimoRegistro->CODIGO_COMPRA : 0;
        $nuevoId = $ultimoId + 1;
        $codigoFormateado = str_pad($nuevoId, 3, '0', STR_PAD_LEFT);


        $compra = new OrdenCompraM();
        $compra->COD_PROVEEDOR = $request->input('proveedor_id');
        $compra->COD_SUCURSAL = $request->input('sucursal_id');
        $compra->NRO_FACTURA = $request->input('factura');
        $compra->DESCRIPCION = strtoupper($request->input('descripcion'));
        $compra->FECHA = $request->input('fecha');
        $compra->CODIGO_COMPRA = $codigoFormateado;
        $compra->save();
    
        $id_producto = $request->input('idproducto');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');
        $subtotal = $request->input('subtotal');
    
        $contador = 0;
    
        while($contador < count($id_producto)){
          $detalle = new DetalleOrdenCompra();
          $detalle->COD_ORDEN_COMPRA = $compra->COD_COMPRA;
          $detalle->COD_ITEM = $id_producto[$contador];
          $detalle->CANTIDAD_COMPRA = $cantidad[$contador];
          $detalle->PRECIO_COMPRA = $precio[$contador];
          $detalle->SUB_TOTA_COMPRA =   $subtotal[$contador];
          $detalle->save();   
          $contador = $contador+1;
        }
        return redirect()->route('ordeDeCompra.index')
        ->with('success', '¡La orden de compra se ha guardado exitosamente!');
       
    }

    public function show($id)
    {
        $pedidos = OrdenCompraM::select('tbl_orden_compra.COD_COMPRA', 'tbl_proveedor.NOMBRE as NOMBRE_PROVEEDOR', 
                        'tbl_orden_compra.DESCRIPCION', 'tbl_sucursal.NOMBRE_SURCUSAL', 'tbl_orden_compra.FECHA', 
                        'tbl_orden_compra.NRO_FACTURA')
                        ->join('tbl_sucursal', 'tbl_orden_compra.COD_SUCURSAL', '=', 'tbl_sucursal.COD_SUCURSAL')
                        ->join('tbl_proveedor', 'tbl_orden_compra.COD_PROVEEDOR', '=', 'tbl_proveedor.COD_PROVEEDOR')
                        ->where("tbl_orden_compra.COD_COMPRA","=", $id)
                        ->get();
        //$pedidos = OrdenCompraM::where("COD_COMPRA","=", $id)->get();
        $detalle_pedido = DetalleOrdenCompra::select('tbl_detalle_orden_compra.PRECIO_COMPRA', 
                            'tbl_detalle_orden_compra.CANTIDAD_COMPRA', 'tbl_item.NOMBRE', 'tbl_item.CODIGO_ITEM')
                            ->join('tbl_item', 'tbl_detalle_orden_compra.COD_ITEM', '=', 'tbl_item.COD_ITEM')
                            ->where('tbl_detalle_orden_compra.COD_ORDEN_COMPRA', $id)
                            ->get();
        return view('admin.ordenCompra.show', compact('pedidos','detalle_pedido'));
    }
}
