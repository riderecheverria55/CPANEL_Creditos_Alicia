<?php


namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\Caja;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CajaControlador extends Controller
{
    //
    public function index()
    {
        $empleado = Empleado::where('ESTADO','=',1)
        ->orderBy('NOMBRE','ASC')->get();
        $cajas = DB::table('tbl_caja as TC')
        ->join('tbl_empleado as EM', 'TC.COD_EMPLEADO', '=', 'EM.COD_EMPLEADO')
        ->select(
            'TC.COD_CAJA',
            'EM.NOMBRE',
            'EM.APELLIDO',
            'TC.CODIGO',
            'TC.MONTO_INICIAL',
            'TC.ESTADO',
            DB::raw('DATE(TC.CREATED_AT) AS FECHA')
        )
        ->get();
        return view('admin.caja.indexP',compact('cajas','empleado'));
    }

    public function store(Request $request)
    {
        $ultimoRegistro = Caja::latest('COD_CAJA')->first();
        if(!$ultimoRegistro)
        {
            $nuevoCodigo = 'CA-001';
        }
        else
        {
            
            $ultimoCodigo = $ultimoRegistro->CODIGO;
            $numero = intval(substr($ultimoCodigo, 3));
            $nuevoNumero = $numero + 1;
            $nuevoCodigo = 'CA-' . str_pad($nuevoNumero, 3, '0', STR_PAD_LEFT); 
        }

        $cajaNew = new Caja();
        $cajaNew->COD_EMPLEADO = strtoupper($request->input('cod_empleado'));
        $cajaNew->CODIGO = $nuevoCodigo;
        $cajaNew->MONTO_INICIAL = $request->input('cantidad_inicial');
      
        $cajaNew->save();
        return redirect()->back()->with('mensaje', 'ok');
    }
    public function cierreCaja(Request $request)
    {
        
        $caja = Caja::find($request->input('id_caja'));
        $caja->ESTADO = 0; 
        $caja->MONTO_FINAL = $request->input('monto_cierre'); 
        $caja->save(); 
        return redirect()->back()->with('mensaje', 'ok');
    }

    public function pdfVer($id)
    {
       
        $pdf = PDF::loadView('admin.caja.pdfP');
        return $pdf->stream('Caja');
    }
}
