<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Fileentries as Fileentry;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Dingo\Api\Facade\API;
use Tymon\JWTAuth\Facades\JWTAuth;

class FileEntryController extends Controller
{
    public function add() {

        $token = Auth::user();

        if($token){

            $types = array('Acta de Nacimiento','Certificado de Preparatoria','Foto');

            $acta = Request::file('actaDeNacimiento');
            $prepa = Request::file('certificadoDePrepa');
            $image = Request::file('imagenDePerfil');

            if(!$acta && !$prepa && !$image){
                return redirect()->route('home');
            }

            if($acta){

                $fileEntry = Fileentry::where('idUser','=',$token->id)->where('type','=',1)->first();

                if($fileEntry){

                    Storage::disk('local')->delete($token->id .'/'.$fileEntry->filename);

                    $entry = $fileEntry;
                }else{
                    $entry = new Fileentry();
                }

                $type = 0;

                $fileName = $acta->getFilename();

                $extension = $acta->getClientOriginalExtension();
                Storage::disk('local')->put('/'.$token->id .'/'. $fileName .'.'.$extension,  File::get($acta));
                $entry->type = $type+1;
                $entry->idUser = $token->id;
                $entry->mime = $acta->getClientMimeType();
                $entry->original_filename = $acta->getClientOriginalName();
                $name = $types[$type].', '.$token->name;
                $entry->descripcion = $name;
                $entry->filename = $fileName.'.'.$extension;
                $entry->aprobado = null;

                $entry->base64 = "data:image/". $extension . ";base64," . base64_encode(file_get_contents($acta));

                $entry->saveOrFail();
            }

            if($prepa){
                $type = 1;

                $fileEntry = Fileentry::where('idUser','=',$token->id)->where('type','=',2)->first();

                if($fileEntry){

                    Storage::disk('local')->delete($token->id .'/'.$fileEntry->filename);

                    $entry = $fileEntry;
                }else{
                    $entry = new Fileentry();
                }

                $fileName = $prepa->getFilename();

                $extension = $prepa->getClientOriginalExtension();
                Storage::disk('local')->put('/'.$token->id .'/'. $fileName .'.'.$extension,  File::get($prepa));
                $entry->type = $type+1;
                $entry->idUser = $token->id;
                $entry->mime = $prepa->getClientMimeType();
                $entry->original_filename = $prepa->getClientOriginalName();
                $name = $types[$type].', '.$token->name;
                $entry->descripcion = $name;
                $entry->filename = $fileName.'.'.$extension;
                $entry->aprobado = null;

                $entry->base64 = "data:image/". $extension . ";base64," . base64_encode(file_get_contents($prepa));

                $entry->saveOrFail();
            }

            if($image){
                $type = 2;

                $fileEntry = Fileentry::where('idUser','=',$token->id)->where('type','=',3)->first();

                if($fileEntry){

                    Storage::disk('local')->delete($token->id .'/'.$fileEntry->filename);

                    $entry = $fileEntry;
                }else{
                    $entry = new Fileentry();
                }

                $fileName = $image->getFilename();

                $extension = $image->getClientOriginalExtension();
                Storage::disk('local')->put('/'.$token->id .'/'. $fileName .'.'.$extension,  File::get($image));
                $entry->type = $type+1;
                $entry->idUser = $token->id;
                $entry->mime = $image->getClientMimeType();
                $entry->original_filename = $image->getClientOriginalName();
                $name = $types[$type].', '.$token->name;
                $entry->descripcion = $name;
                $entry->filename = $fileName.'.'.$extension;
                $entry->aprobado = null;

                $entry->base64 = "data:image/". $extension . ";base64," . base64_encode(file_get_contents($image));

                $entry->saveOrFail();
            }

            return redirect()->route('home');

        }

    }

    public function get($filename){

        $user = Auth::user();

        if($user){
            $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
            $file = Storage::disk('local')->get('/'. $user->id .'/'.$entry->filename);

            return (new Response($file, 200))
                ->header('Content-Type', $entry->mime);
        }
    }

    public function fileuploads(){
        return view('Test.fileupload');
    }
}
