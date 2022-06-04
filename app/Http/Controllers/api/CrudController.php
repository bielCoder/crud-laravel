<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(Crud $listAll)
    {
        $this -> listAll = $listAll;   
    }

    public function index()
    {
        $this -> listAll = Crud::all();
        try {
          return response()->json(['People' => $this -> listAll],200);
    }
        catch (Exception $e) {
            return response()->json(['Status' => 501,'Message'=>'Ops ocorreu um erro no sistema, tente novamente.']);
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $all = $request -> all();
      $this -> listAll -> create($all);
      try {
       return response()->json(['People'=>['Message'=>'Usuário criado com Sucesso!']],201);   
      }catch (Exception $e) {
            return response()->json(['Status' => 501,'Message'=>'Ops ocorreu um erro no sistema, tente novamente.']);
        }
      }
       
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $this -> listAll = Crud::findorfail($id);
        try {
            return response()->json(['People' => $this -> listAll],200);
        } 
        
        catch (Exception $e) {
            return response()->json(['Status' => 501,'Message'=>'Error System'],501);
        }
    }

  
    public function update(Request $request, $id)
    {
      

           $all = $request->all();
         $atualized = $this -> listAll -> findorfail($id);
         $atualized->update($all);


      try {
       return response()->json(['People'=>['Message'=>'Usuário atualizado com Sucesso!']],201);   
      }  catch (Exception $e) {
            return response()->json(['Status' => 501,'Message'=>'Error System'],501);
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this -> listAll = Crud::findorfail($id);
        $this -> listAll -> delete();
        try {
            return response()->json(['People'=>['Message'=>'Usuário removido com Sucesso!']],201);
        } catch (Exception $e) {
            return response()->json(['Status' => 501,'Message'=>'Error System'],501);
        }
        
    }
}
