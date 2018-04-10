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

            $file = Request::file('image');

            if($file == null){
                return API::response()->array(['status' => 'Error', 'message' => 'image is null']);
            }


            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put('/public/'. $token->id .'/'. $file->getFilename().'.'.$extension,  File::get($file));
            $entry = new Fileentry();
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $entry->filename = $file->getFilename().'.'.$extension;

            $entry->save();

            $fileName = $file->getFilename().'.'.$extension;

            return API::response()->array(['FileName' => $fileName]);
        }

    }

    public function get($filename){

        $user = Auth::user();

        if($user){
            $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
            $file = Storage::disk('local')->get('/public/'. $user->id .'/'.$entry->filename);

            return (new Response($file, 200))
                ->header('Content-Type', $entry->mime);
        }
    }
}
