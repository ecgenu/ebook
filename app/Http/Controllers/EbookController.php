<?php

namespace genu\Http\Controllers;
use Illuminate\Support\Facades\DB;

class EbookController extends Controller
{
    public function lista() {
        $html ='<h1>Dados do Ebook</h1>';
        $funcionarios = DB::select('select * from funcionarios');
        foreach ($funcionarios as $f){
               $html .='Nome: ' . $f->nome.'<br>
                       email: ' . $f->email.'<br>
                       seção: ' . $f->id_secao.'<br>
                       Telefone: ' . $f->fone. '<br><br>';
        }
        return $html;
        
    }
}
