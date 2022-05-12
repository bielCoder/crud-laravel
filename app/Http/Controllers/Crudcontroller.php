<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class Crudcontroller extends Controller
{
    public function index(){
        $show = Crud::all();
        return view('index',[
            'show' => $show,      
            ]);
    }

    public function store(Request $request){
            $all = new Crud;
            $all -> nome = $request -> nome;
            $all -> email = $request -> email;
            $all -> telefone = $request -> telefone;
            $all -> save();
           return redirect('/')->with('msg','Cadastrado com Sucesso!');
                
    }

    public function update($id){
        $show = Crud::all();
        $id = Crud::findorfail($id);
        return view('update',[
            'id'=>$id,
            'show'=>$show,
        ]);
    }


    public function edit(Request $request,$id){
        $data = [
        'nome' => $request -> nome,
        'email' => $request -> email,
        'telefone' => $request -> telefone,
       ];


       Crud::findorfail($id)->update($data);

       return redirect('/')->with('msg','Atualizado com Sucesso!');
        
    }

    public function delete($id){
        $delete = Crud::findorfail($id);
        
        $delete -> delete();

        return redirect('/')->with('msg','Removido com Sucesso!');
    }



}
