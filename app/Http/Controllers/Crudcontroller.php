<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class Crudcontroller extends Controller
{
    // Pagina Principal

    public function index(){
        $show = Crud::all();
        return view('index',[
            'show' => $show,      
            ]);
    }

    // Guarda todos os dados no banco

    public function store(Request $request){
            $all = new Crud;
            $all -> nome = $request -> nome;
            $all -> email = $request -> email;
            $all -> telefone = $request -> telefone;
            $all -> save();
           return redirect('/')->with('add','Cadastrado com Sucesso!');
                
    }

    // Pagina de Atualização de cadastro 
    public function update($id){
        $show = Crud::all();
        $id = Crud::findorfail($id);
        return view('update',[
            'id'=>$id,
            'show'=>$show,
        ]);
    }

    //Atualiza todos os dados 

    public function edit(Request $request,$id){
        $data = [
        'nome' => $request -> nome,
        'email' => $request -> email,
        'telefone' => $request -> telefone,
       ];


       Crud::findorfail($id)->update($data);

       return redirect('/')->with('update','Atualizado com Sucesso!');
        
    }

        // deleta todos os dados

    public function delete($id){
        $delete = Crud::findorfail($id);
        
        $delete -> delete();

        return redirect('/')->with('remove','Removido com Sucesso!');
    }



}
