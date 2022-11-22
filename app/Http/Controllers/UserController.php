<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Session;

use App\User;
use App\Role;
use App\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{

    public function list(){
        return view('user.list');
    }

    function getdata(){
        $users = User::all();
        return DataTables::of($users)->make(true);
    }

    public function add(){
        $user = new User;
        $roles = Role::all();
        $clients = client::where("enabled",1)->get();
        return view('user.form',compact('user','roles','clients'));
    }

    public function edit($user_id){
        $user = User::findOrFail($user_id);
        $roles = Role::all();
        $clients = client::where("enabled",1)->get();
        return view('user.form',compact('user','roles','clients'));
    }

    public function store(Request $request){
        $id = $request->id;
        $input = $request->all();
        if($id){
            //Si encuentra el ID edita
            $user = User::findOrFail($id);
            $user->name =  $request->name;
            $user->email =  $request->email;
            if($request->newpassword){
                $user->password = bcrypt($request->password);
            }

            if(isset($input['roles'])){
                $user->roles()->sync($input['roles']);
            }
            if(isset($input['clients'])){
                $user->clients()->sync($input['clients']);
            }
            
            $user->save();

            activitypush('AGREGA', 'PERSONA AGREGA USUARIO');
            return redirect()->route('users.list')->with('success', 'Usuario editado correctamente');
        }else{
            //Si no, Crea un Item
            $user = new User;
            $user->fill($request->all());
            $user->password = bcrypt($request->password);
            
            $user->save();

            if(isset($input['roles'])){
                $user->roles()->sync($input['roles']);
            }
            if(isset($input['clients'])){
                $user->clients()->sync($input['clients']);
            }

            activitypush('EDITA', 'PERSONA EDITA USUARIO');
            return redirect()->route('users.list')->with('success', 'Usuario creado correctamente');
        }
    }

    public function delete($user_id)
    {
        try {
            $user = User::findOrFail($user_id);
            $user->email=null;
            $user->enabled=0;
            $user->save();
            return redirect()->route('users.list')->with('success', 'Usuario eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect()->route('users.list')->with('error', 'Problema al eliminar usuario');
        }
    }

}
