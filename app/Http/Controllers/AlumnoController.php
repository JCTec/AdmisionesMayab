<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;
use App\User;
use App\Exceptions\Handler;
use App\security;
use Illuminate\Support\Facades\Auth;
use Dingo\Api\Facade\API;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use function MongoDB\BSON\toJSON;
use Tymon\JWTAuth\Facades\JWTAuth;

class AlumnoController extends Controller
{

    public function store(Request $request)
    {

        $user = new User();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);


        $user->saveOrFail();

        return response()->json(['status' => 'Success']);
    }

    public function saveAlumno(Request $request){

        $user = Auth::user();

        if ($user) {

            $alumno = Alumno::where('id_user','=',$user->id)->first();

            if(!$alumno){
                $alumno = new Alumno();

                $alumno->id_user = $user->id;
            }

            if($request->has('firstName')){
                $alumno->firstName = $request->firstName;
            }

            if($request->has('secondName')){
                $alumno->secondName = $request->secondName;
            }

            if($request->has('firstLastName')){
                $alumno->firstLastName = $request->firstLastName;
            }

            if($request->has('secondLastName')){
                $alumno->secondLastName = $request->secondLastName;
            }

            if($request->has('finalEmail')){
                $alumno->finalEmail = $request->finalEmail;
            }

            if($request->has('year')){
                $alumno->year = $request->year;
            }

            if($request->has('month')){
                $alumno->month = $request->month;
            }

            if($request->has('day')){
                $alumno->day = $request->day;
            }

            if($request->has('sex')){
                $alumno->sex = $request->sex;
            }

            if($request->has('preparatorias')){
                $alumno->preparatorias = $request->preparatorias;
            }

            if($request->has('otraPreparatoria')){
                $alumno->otraPreparatoria = $request->otraPreparatoria;
            }

            if($request->has('carrera')){
                $alumno->carrera = $request->carrera;
            }

            if($request->has('telefono')){
                $alumno->telefono = $request->telefono;
            }

            if($request->has('celular')){
                $alumno->celular = $request->celular;
            }

            if($request->has('postal')){
                $alumno->postal = $request->postal;
            }

            if($request->has('direccion')){
                $alumno->direccion = $request->direccion;
            }

            if($request->has('city')){
                $alumno->city = $request->city;
            }

            $alumno->saveOrFail();

            return response()->json(['status' => 'Success']);
        }

    }

    public function getMyInfo(){
        $user = Auth::user();

        if ($user) {
            return response()->json(['User' => $user]);
        }
    }


    public function emailAB(){

        $email = request()->get('email');

        $User = User::where('email', $email)->first();

        if($User){
            return response()->json(['taken' => true]);
        }else{
            return response()->json(['taken' => false]);
        }
    }



}
