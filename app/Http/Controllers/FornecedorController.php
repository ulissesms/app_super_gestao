<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedor = ['fornecedor 1','fornecedor 2','fornecedor 3'];
        return view('app.fornecedor.index',compact('fornecedor'));
    }
}
