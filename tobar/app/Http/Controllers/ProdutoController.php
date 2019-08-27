<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

    class ProdutoController extends Controller {

        public function lista(){
            $produtos =  DB::select('select * from tb_product');
           dd($produtos);
           return '<h1>Listagem de produtos<h1>';
        }
}