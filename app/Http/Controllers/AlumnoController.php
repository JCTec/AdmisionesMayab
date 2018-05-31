<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\familiar;
use Illuminate\Http\Request;
use App\User;
use App\security;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            if(!$alumno){
                $alumno = new Alumno();

                $alumno->idUser = $user->id;
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

            if($request->has('preparatoria')){
                $alumno->preparatoria = $request->preparatoria;
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

            return redirect()->route('home');
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

    public function setTutor($id){
        $user = Auth::user();

        if ($user) {

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            if($alumno != null){
                $alumno->tutor = $id;

                $alumno->saveOrFail();
            }

            return redirect()->route('home');
        }
    }


    public function isFinnished(){
        $user = Auth::user();

        if ($user) {

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            if(!$alumno){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->firstName){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->secondName){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->firstLastName){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->secondLastName){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->finalEmail){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->year){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->month){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->day){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->sex){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->preparatoria){
                if(!$alumno->otraPreparatoria){
                    return response()->json(['message' => 'Not Finnished']);
                }
            }


            if(!$alumno->carrera){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->telefono){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->celular){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->postal){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->direccion){
                return response()->json(['message' => 'Not Finnished']);
            }

            if(!$alumno->city){
                return response()->json(['message' => 'Not Finnished']);
            }

            return redirect()->route('home');
        }
    }

    public function getFiles(){
        $user = Auth::user();

        if ($user) {
            return response()->json(['Files' => $user->files]);
        }
    }

    public function createFamiliar(Request $request){
        $user = Auth::user();

        //Type 1 for dad, 2 for mom and 3 for tutor

        if ($user) {

            familiar::create(array_merge($request->all(), ['idUser' => $user->id]));

            if($request->relacion == 1){
                return redirect()->route('familiar');
            }elseif ($request->relacion == 2){
                return redirect()->route('familiar');
            }elseif ($request->relacion == 3){
                return redirect()->route('home');
            }else{
                return response()->json(['message' => 'Error desconocido']);
            }
        }
    }


}
