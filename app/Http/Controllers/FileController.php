<?php

namespace App\Http\Controllers;

use Auth;
use App\File;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class FileController extends Controller
{
    
    public function list($filetype_id){
        $filetype = ["error","Informe de Trabajo","Informe de laboratorio","Certificados Local","Certificados Activo"];
        $filename = ["error","Local","Local","Local","Activo"];
        $clients = Client::where('enabled',1)->orderBy('name')->get();
        return view('file.list',compact('clients','filetype_id','filetype','filename'));
    }

    function getdata($filetype_id){
        $files=[];
        if(Auth::user()->hasRole(1)){
            $files = File::where('filetype_id',$filetype_id)->with('client')->get();
        }else if(Auth::user()->hasRole(2)){
            $client_id = Auth::user()->clients->pluck('id')->toArray();
            $files = File::where('filetype_id',$filetype_id)->whereIn('client_id',$client_id)->with('client')->get();
        }
        return DataTables::of($files)->make(true);
    }

    function getlist(){
        $files = File::all();
        return $files;
    }

    function select($id){
        $file = File::with('file')->findOrFail($id);
        return $file;
    }

    public function store(Request $request)
    {
        $id = $request->id;
        if($id){
            //Si encuentra el ID edita
            $file = File::findOrFail($id);
            $file->fill($request->all());
            if($file->save()){
                activitypush('AGREGA', 'AGREGA CALIBRE');
                return $file;
            }
            return "Error al agregar Filee";
        }else{
            //le asigna un nombre
            $uploadedFile =  $request->file('uploadedFile');
            $filename = time().Str::random(10).'.pdf';

            //guarda en el server FTP
            $send = Storage::disk('s3')->put('biodefensa/'.$filename, fopen($uploadedFile,'r+'),'public');

            if($send){
                $file = new File;
                $file->fill($request->all());

                $file->uri = 'https://laravelbucketosvaldo.s3-sa-east-1.amazonaws.com/biodefensa/'.$filename;
                $file->name = $filename;

                if($file->save()){
                    activitypush('EDITA', 'EDITA CALIBRE');
                    return $file;
                } 
            }
            return "Error al guardar Archivo";
        }
    }

    public function delete($id)
    {
        try {
            $file = File::findOrFail($id);
            $file->delete();
            activitypush('ELIMINA', 'ELIMINA OT');
            return $file;
        } catch (\Throwable $th) {
            return "Error al eliminar File";
        }
    }

}
