<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

    class ProdutoController extends Controller {

        public function lista(){
                $html = '<h1>Listagem de produtos</h1>';
            $produtos =  DB::select('select * from tb_product');
        foreach($produtos as $p){
        $html.= "<br/> Nome: " . $p->nome;
        }
           return $html;
        }
}