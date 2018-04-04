<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Dingo\Api\Facade\API;
use Tymon\JWTAuth\Facades\JWTAuth;

class FileEntryController extends Controller
{
    public function add() {

        $token = JWTAuth::parseToken()->authenticate();

        if($token){

            $file = Request::file('image');

            if($file == null){
                return API::response()->array(['status' => 'Error', 'message' => 'image is null']);
            }


            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
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

        $user = JWTAuth::parseToken()->authenticate();

        if($user){
            $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
            $file = Storage::disk('local')->get($entry->filename);

            return (new Response($file, 200))
                ->header('Content-Type', $entry->mime);
        }
    }
}
