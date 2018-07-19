<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Brother;
use App\familiar;
use App\HistorialAcademico;
use App\Idioma;
use App\OrientacionVocacional;
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

    public function back(){
        $user = Auth::user();

        if ($user && $user->step != 1) {

            $step = $user->step;

            $user->step = ($step - 1);

            $user->saveOrFail();

            return redirect()->route('familiar');
        }else{
            if($user->step == 1){
                return redirect()->route('familiar');
            }
        }
    }

    public function backOV(){
        $user = Auth::user();

        if ($user && $user->step2 != 1) {

            $step = $user->step2;

            $user->step2 = ($step - 1);

            $user->saveOrFail();

            return redirect()->route('orientacionVocacional');
        }else{
            if($user->step2 == 1){
                return redirect()->route('orientacionVocacional');
            }
        }
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

            if($request->has('celularInt')){
                $alumno->celularInt = $request->celularInt;
            }

            if($request->has('telefonoInt')){
                $alumno->telefonoInt = $request->telefonoInt;
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

            if(!$user->active){
                $user->active = true;

                $user->saveOrFail();
            }

            return redirect()->route('payment');
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

            $user->step = 1;

            $user->saveOrFail();

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            if($alumno != null){
                $alumno->tutor = $id;

                $alumno->saveOrFail();
            }

            return redirect()->route('orientacionVocacional');
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

            $step = $user->step;

            $id = (int) $request->id;

            $info = array_merge($request->except('_token', 'id'), ['idUser' => $user->id]);

            $fam = familiar::where('id', '=', $id)->first();

            if($fam){
                $fam->update($info);
            }else{
                familiar::create($info);
            }

            if($step == 4){
                $user->step = 1;

                $user->saveOrFail();

                return redirect()->route('orientacionVocacional');
            }else{
                $rStep = ($step + 1);

                $user->step = $rStep;

                $user->saveOrFail();

                return redirect()->route('familiar');

            }
        }
    }

    public function createIdiomas(Request $request){
        $user = Auth::user();

        if ($user) {

            $step = $user->step2;

            if($request["idiomaChange"] == "1"){

                $info = $request->except('_token');

                $idiomas = array();

                foreach ($info as $key => $value){

                    $keyF = explode("-", $key);

                    if ($keyF[0] == "Idioma"){
                        array_push($idiomas, $value);
                    }
                }

                $myIdiomas = Idioma::where('idUser','=', $user->id)->get();

                foreach ($myIdiomas as $idioma){
                    $idioma->forceDelete();
                }

                foreach ($idiomas as $idioma){
                    Idioma::create(array_merge($idioma, ['idUser' => $user->id]));
                }
            }

            $rStep = ($step + 1);

            $user->step2 = $rStep;

            $user->saveOrFail();

            return redirect()->route('orientacionVocacional');
        }
    }

    public function createOV(Request $request){
        $user = Auth::user();

        if ($user) {

            $step = $user->step2;

            $info = array_merge($request->except('_token', 'id', 'academicoChange'), ['idUser' => $user->id]);

            $brothers = array();
            $priamrias = array();
            $secundarias = array();
            $preparatorias = array();


            foreach ($info as $key => $value){

                $keyF = explode("-", $key);

                if ($keyF[0] == "Brother"){
                    array_push($brothers, $value);
                }elseif ($keyF[0] == "Primaria"){
                    array_push($priamrias, $value);
                }elseif ($keyF[0] == "Secundaria"){
                    array_push($secundarias, $value);
                }elseif ($keyF[0] == "Preparatoria"){
                    array_push($preparatorias, $value);
                }
            }

            if($request['brotherChange'] == 1) {
                $myBrothers = Brother::where('idUser','=', $user->id)->get();

                foreach ($myBrothers as $bro){
                    $bro->forceDelete();
                }

                foreach ($brothers as $bro){
                    Brother::create(array_merge($bro, ['idUser' => $user->id]));
                }
            }

            if($request['academicoChange'] == 1){

                $mySchools = HistorialAcademico::where('idUser','=', $user->id)->get();

                foreach ($mySchools as $school){
                    $school->forceDelete();
                }

                foreach ($priamrias as $primaria){
                    HistorialAcademico::create(array_merge($primaria, ['idUser' => $user->id, 'grado' => 1]));
                }

                foreach ($secundarias as $secundaria){
                    HistorialAcademico::create(array_merge($secundaria, ['idUser' => $user->id, 'grado' => 2]));
                }

                foreach ($preparatorias as $preparatoria){
                    HistorialAcademico::create(array_merge($preparatoria, ['idUser' => $user->id, 'grado' => 3]));
                }
            }

            $ov = OrientacionVocacional::where('idUser','=', $user->id)->first();

            if($ov){
                $ov->update($info);
            }else{
                OrientacionVocacional::create($info);
            }

            $rStep = ($step + 1);

            if($rStep == 5){
                $rStep = 1;
                $ov = OrientacionVocacional::where('idUser','=', $user->id)->first();

                if($ov){
                    $ov->finished = true;
                    $ov->saveOrFail();
                }
            }

            $user->step2 = $rStep;

            $user->saveOrFail();

            return redirect()->route('orientacionVocacional');
        }
    }


}
