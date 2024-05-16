<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Categoria;
use App\Models\SubCategoria;
use App\Models\Medida;


class ItemController extends Controller
{
    public function index(Request $request)
    {

        $dato = $request->get('buscar');
        $categorias = Categoria::all();
        $subcategorias = SubCategoria::all();
        $medidas = Medida::all();
        $productos = Item::select('tbl_item.COD_ITEM','tbl_item.NOMBRE', 'tbl_item.CODIGO_ITEM', 'tbl_item.NUMERO_SERIE', 
            'tbl_item.COD_CATEGORIA', 'tbl_item.COD_SUB_CAT', 'tbl_item.COD_MEDIDA', 'tbl_item.ESTADO',
            'tbl_medida.NOMBRE_MEDIDA', 'tbl_sub_categoria.NOMBRE_SUB', 'tbl_categoria.NOMBRE_CATEGORIA')
        ->join('tbl_categoria', 'tbl_item.COD_CATEGORIA', '=', 'tbl_categoria.COD_CATEGORIA')
        ->join('tbl_medida', 'tbl_item.COD_MEDIDA', '=', 'tbl_medida.COD_MEDIDA')
        ->leftJoin('tbl_sub_categoria', 'tbl_item.COD_SUB_CAT', '=', 'tbl_sub_categoria.COD_SUB_CATEGORIA')
        ->where('tbl_item.ESTADO', '=', '1');

        if (!empty($dato)) {
        $productos = $productos->where(function ($query) use ($dato) {
            $query->where('tbl_item.NOMBRE', 'like', '%' . $dato . '%')
                ->orWhere('tbl_item.CODIGO_ITEM', 'like', '%' . $dato . '%')
                ->orWhere('tbl_categoria.NOMBRE_CATEGORIA', 'like', '%' . $dato . '%');
        });
        }
        $productos = $productos->orderBy('tbl_item.NOMBRE', 'desc')->get();
        //dd($categorias);
        
        return view('admin.items.index', compact('productos','medidas','categorias','subcategorias'));
    }

    public function store(Request $request)
    {
        $codCategoria = $request->input('cod_categoria');
        $sucursal = Categoria::find($codCategoria);
        $nombre_categoria = $sucursal->NOMBRE_CATEGORIA;
        // Obtener las dos primeras letras de la categoría y convertirlas a mayúsculas
        $firstTwoChars = substr($nombre_categoria, 0, 2);
        $firstTwoCharsUpper = strtoupper($firstTwoChars);
        $latestItem = Item::latest()->first();
        if ($latestItem) 
        {
            // Si hay un último código de ítem, obtener su número y aumentarlo en uno
            $latestItemIdNumber = (int) substr($latestItem->COD_ITEM, -4);
            $newItemIdNumber = $latestItemIdNumber + 1;
        }else 
        {
            $newItemIdNumber = 1;
        }
        $newItemId = $firstTwoCharsUpper . '-' . str_pad($newItemIdNumber, 4, '0', STR_PAD_LEFT);
        $item = new Item();
        $item->NOMBRE = strtoupper($request->input('nombre'));
        $item->CODIGO_ITEM = $newItemId;
        $item->NUMERO_SERIE =  $request->input('numero_serie');
        $item->COD_CATEGORIA =  $request->input('cod_categoria');
        $item->COD_SUB_CAT =  $request->input('cod_subcategoria');
        $item->COD_MEDIDA =  $request->input('cod_medida');
        $item->save();
        return redirect()->back()->with('mensaje', 'ok');
    }

    public function update(Request $request, $id)
    {
         $item = Item::findOrFail($id);
        //dd($item);
        $item->NOMBRE = strtoupper($request->input('nombre'));
        $item->NUMERO_SERIE =  $request->input('numero_serie');
        $item->COD_CATEGORIA =  $request->input('cod_categoria');
        $item->COD_SUB_CAT =  $request->input('cod_subcategoria');
        $item->COD_MEDIDA =  $request->input('cod_medida');
        $item->save();
        return redirect()->route('items.index')->with('mensaje', 'ok');
    }

    public function destroy($id)
    {
        $sucursal = Item::find($id);
        $sucursal->ESTADO = 0;
        $sucursal->save();
        return "ok"; 
    }

}
