<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller
{

    public function lista()
    {
        $produtos = DB::select('select * from tb_product');
    
        return view('listagemProdutos')->with('produtos', $produtos);
    }

    public function detalhe()
    {
        $id = Request::route('id');

        $produto = DB::select('select * from tb_product where id = ?', [$id]);
        return view('detalhes')->with('p', $produto[0]);
    }
}
