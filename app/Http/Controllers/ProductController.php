<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = ['produto 1', 'produto 2', 'produto 3'];

        return $products;
    }

    public function show($id){
        return "Exibindo produto de id: {$id}";
    }

    public function create(){
        return "Formulario de cadastro";
    }

    public function edit($id){
        return "Formulário para editar o produto de id: {$id}";
    }

    public function store(){
        return "Cadastrando novo produto";
    }

    public function update($id){
        return "Editando o produto de id: {$id}";
    }

    public function destroy($id){
        return "Deletando o produto de id: {$id}";
    }
}
