<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exceptions\Handler;
use App\security;
use Dingo\Api\Facade\API;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AlumnoController extends Controller
{
    //Hola
    public function store(Request $request)
    {

        $user = new User();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);


        $user->saveOrFail();

        return response()->json(['status' => 'Success']);
    }

    public function getMyInfo(){
        $user = JWTAuth::parseToken()->authenticate();

        if ($user) {
            return response()->json(['User' => $user]);
        }
    }


    public function emailAB(){

        $email = reques t()->get('email');

        $User = User::where('email', $email)->first();

        if($User){
            return response()->json(['taken' => true]);
        }else{
            return response()->json(['taken' => false]);
        }
    }



}
