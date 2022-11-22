<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ClientController extends Controller
{
    public function list(){
        return view('client.list');
    }

    function getdata(){
        $clients = Client::where('enabled',1)->get();
        return DataTables::of($clients)->make(true);
    }

    function getlist(){
        $clients = Client::where('enabled',1)->get();
        return $clients;
    }

    function select($id){
        $client = Client::findOrFail($id);
        return $client;
    }

    public function store(Request $request)
    {
        $id = $request->id;
        if($id){
            //Si encuentra el ID edita
            $client = Client::findOrFail($id);
            $client->fill($request->all());
            if($client->save()){
                activitypush('AGREGA', 'AGREGA CALIBRE');
                return $client;
            }
            return "Error al agregar Cliente";
        }else{
            //Si no, Crea un Item        
            $client = new Client;
            $client->fill($request->all());
            if($client->save()){
                activitypush('EDITA', 'EDITA CALIBRE');
                return $client;
            }
            return "Error al editar Cliente";
        }
    }

    public function delete($id)
    {
        try {
            $client = Client::findOrFail($id);
            $client->enabled=0;
            $client->save();
            activitypush('ELIMINA', 'ELIMINA CALIBRE');
            return $client;
        } catch (\Throwable $th) {
            return "Error al eliminar Cliente";
        }
    }
}
