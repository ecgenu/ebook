<?php

namespace genu\Http\Controllers;
use Illuminate\Support\Facades\DB;

class EbookController extends Controller
{
    public function lista() {
        $funcionarios = DB::select('select * from funcionarios');
        
        return view('lista')->withFuncionarios($funcionarios);
        
    }
}
