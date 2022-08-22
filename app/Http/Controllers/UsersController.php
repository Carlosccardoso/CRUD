<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response($users, 200);
    }
    public function create(Request $req){

        $users = User::create([
            "nome"=> $req->nome,
            "email"=> $req->email
        ]);
        return response($users,200);
    }
    public function update(Request $req){
        
        $user = User::find($req->id);
       
        if(!$user){
            return response("Usuario não encontrado",404);
        }
       
        $user->nome=$req->nome;
        $user->email=$req->email;
        $user->save();


        return response($user,200);

    }
    /// Request = Pegar informação do front 
    ///-> flecha simples = acessa um item em especifico de uma variavel
    /// => flecha dupla =
    
    public function delete(Request $req){
        $user = User::find($req->id);
        
        if(!$user){
            return response("Usuario não encontrado",404);
        }
        
        $user->delete();
        
        return response("Deletado");
    }

      
        
        



}

