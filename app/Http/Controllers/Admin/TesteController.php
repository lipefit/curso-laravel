<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function dashboard(){
        return "Dashboard";        
    }

    public function clientes(){
        return "Clientes";        
    }

    public function produtos(){
        return "Produtos";
    }
}
