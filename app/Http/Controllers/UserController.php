<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
 
    public function users()
    {
        return view('users/users');
    }

    public function getUsers()
    {
        $header = $this->getHeader();
        $body = $this->getData();

        return response()->json([
            "header" => $header,
            "data"=> $body
        ]);
    }

    private function getData(){
        $data = [];
        $users = User::all();
        foreach ($users as $user){
            array_push($data, [
                $user->name, $user->email, $user->id, 
                $user->password, $user->phone,
                '<a href="'.url('/users').'">Modificar</a>',
                '<a href="'.url('/users').'">Eliminar</a>'
            ]);
        }
        return $data;
    }

    private function getHeader(){
        return[
            ["name"=>"name", "title"=>"Nombre Usuario", "size"=>200, "sortable"=>true],
            ["name"=>"email", "title"=>"Correo", "size"=>150, "sortable"=>true],
            ["name"=>"id", "title"=>"IDUsuario", "size"=>40, "sortable"=>true, "show"=>true],
            ["name"=>"password", "title"=>"Contraseña", "size"=>100, "sortable"=>true],
            ["name"=>"phone", "title"=>"Teléfono", "size"=>150, "sortable"=>true],
            ["name"=>"edit","title"=>"Modificar","size"=>50],
            ["name"=>"delete","title"=>"Eliminar","size"=>50]
        ];
    }
    
}
