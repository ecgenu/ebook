<?php

namespace genu\Http\Controllers;
use Illuminate\Support\Facades\DB;
use genu\Funcionario;

class EbookController extends Controller
{
    public function lista() {
        $funcionarios = DB::select('select * from funcionarios');
        
        return view('lista')->withFuncionarios($funcionarios);
        
    }
    
    public function mostra($id){
        $funcionario = Funcionario::find($id);
        if(empty($funcionario)){
            return 'Funcionário não existe';
        }
        return view('mostra')->with('f', $funcionario);
    }
}
