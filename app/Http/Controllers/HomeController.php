<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\familiar;
use App\Fileentries;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Alumno;
use App\User;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = $this->getState();

        $pictureState = $this->getPicState();

        if($state == 1){
            $pictureState = False;
        }

        return view('home')->with(['state' => $state, 'pictureState' => $pictureState]);
    }

    public function cuestionario(){

        $user = Auth::user();

        if ($user) {

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            $client = new Client([
                'base_uri' => 'https://miplana.mx/u/',
                'timeout'  => 2.0,
            ]);

            $response = $client->request('GET', 'Programa/getProgramasActualesLC');

            if($response->getStatusCode() == 404){
                return abort(404);
            }

            if($response->getStatusCode() == 200){
                $json = (string) $response->getBody();

                $decoded = json_decode($json, true);

                $programas = $decoded["programas"];

                $response = $client->request('GET', 'Preparatoria/getPreparatorias');

                if($response->getStatusCode() == 404){
                    return abort(404);
                }

                if($response->getStatusCode() == 200) {
                    $json = (string)$response->getBody();

                    $decoded = json_decode($json, true);

                    $preparatorias = $decoded["preparatorias"];

                    if($alumno){
                        return view('Alumno.cuestionario')->with(['programas' => $programas, 'preparatorias' => $preparatorias, 'Alumno' => $alumno]);

                    }else{
                        $alumno = new Alumno();
                        return view('Alumno.cuestionario')->with(['programas' => $programas, 'preparatorias' => $preparatorias, 'Alumno' => $alumno]);
                    }

                }else{
                    return abort(404);
                }

            }

        }

    }

    private function getPicState(){
        $user = Auth::user();

        if ($user) {
            $files =  Fileentries::where('idUser','=',$user->id)->where('aprobado','=',True)->count();

            if($files == 3){
                return True;
            }else{
                return False;
            }
        }


    }

    public function completed(){
        if($this->isFinnishedBool()){
            return view('Alumno.completed');
        }else{
            return view('home');
        }
    }

    public function orientacionVocacional(){
        $user = Auth::user();

        if ($user) {
            return view('Alumno.orientacionVocacional');
        }
    }

    public function familiarTutorInfo(){
        $user = Auth::user();

        if ($user) {
            return view('Alumno.tutor');
        }
    }

    public function familiar(){
        $user = Auth::user();

        if ($user) {
            $padre = familiar::where('idUser','=', $user->id)->where('relacion','=',1)->first();


            if($padre){
                $madre = familiar::where('idUser','=', $user->id)->where('relacion','=',2)->first();

                if($madre){
                    $tutor = familiar::where('idUser','=', $user->id)->where('relacion','=',3)->first();

                    if($tutor){
                        $state = $this->getState();
                        return view('home')->with(['state' => $state]);
                    }else{
                        $alumno = Alumno::where('idUser','=',$user->id)->first();

                        if ($alumno->tutor){
                            $state = $this->getState();
                            return view('home')->with(['state' => $state]);
                        }else{
                            return view('Alumno.selectTutor');
                        }
                    }
                }else{
                    return view('Alumno.familiar2');
                }
            }else{
                return view('Alumno.familiar1');
            }
        }
    }



    private function isFinnishedBool(){
        $user = Auth::user();

        if ($user) {

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            if(!$alumno){
                return false;
            }

            if(!$alumno->firstName){
                return false;
            }

            if(!$alumno->firstLastName){
                return false;
            }

            if(!$alumno->secondLastName){
                return false;
            }

            if(!$alumno->finalEmail){
                return false;
            }

            if(!$alumno->year){
                return false;
            }

            if(!$alumno->month){
                return false;
            }

            if(!$alumno->day){
                return false;
            }

            if(!$alumno->sex){
                return false;
            }

            if(!$alumno->preparatoria){
                if(!$alumno->otraPreparatoria){
                    return false;
                }
            }

            if(!$alumno->carrera){
                return false;
            }

            if(!$alumno->telefono){
                return false;
            }

            if(!$alumno->celular){
                return false;
            }

            if(!$alumno->postal){
                return false;
            }

            if(!$alumno->direccion){
                return false;
            }

            if(!$alumno->city){
                return false;
            }

            $files =  Fileentries::where('idUser','=',$alumno->idUser)->where('aprobado','=',True)->count();

            if($files != 3){
                return false;
            }

            //Agregar OrientacionVocacional

            return true;
        }
    }

    private function getState(){
        $user = Auth::user();

        if ($user) {

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            if(!$alumno){
                return 1;
            }

            if(!$alumno->firstName){
                return 1;
            }

            if(!$alumno->firstLastName){
                return 1;
            }

            if(!$alumno->secondLastName){
                return 1;
            }

            if(!$alumno->finalEmail){
                return 1;
            }


            if(!$alumno->year){
                return 1;
            }

            if(!$alumno->month){
                return 1;
            }

            if(!$alumno->day){
                return 1;
            }

            if(!$alumno->sex){
                return 1;
            }

            if(!$alumno->preparatoria){
                if(!$alumno->otraPreparatoria){
                    return 1;
                }
            }

            if(!$alumno->carrera){
                return 1;
            }

            if(!$alumno->telefono){
                return 1;
            }

            if(!$alumno->celular){
                return 1;
            }

            if(!$alumno->postal){
                return 1;
            }

            if(!$alumno->direccion){
                return 1;
            }

            if(!$alumno->city){
                return 1;
            }


            $familiar = familiar::where('idUser','=',$user->id)->where('relacion','=',1)->first();

            $familiar2 = familiar::where('idUser','=',$user->id)->where('relacion','=',2)->first();

            if($familiar && $familiar2){
                if(!$familiar->titulo){
                    return 2;
                }

                if(!$familiar->firstName){
                    return 2;
                }


                if(!$familiar->telefono){
                    return 2;
                }

                if(!$familiar->celular){
                    return 2;
                }

                if(!$familiar->email){
                    return 2;
                }


                if(!$familiar->giro){
                    return 2;
                }

                if(!$familiar->puesto){
                    return 2;
                }

                if($familiar->empresa == null){
                    return 2;
                }

                if(!$familiar2->titulo){
                    return 2;
                }

                if(!$familiar2->firstName){
                    return 2;
                }


                if(!$familiar2->telefono){
                    return 2;
                }

                if(!$familiar2->celular){
                    return 2;
                }

                if(!$familiar2->email){
                    return 2;
                }


                if(!$familiar2->giro){
                    return 2;
                }

                if(!$familiar2->puesto){
                    return 2;
                }

                if($familiar2->empresa == null){
                    return 2;
                }
            }else{
                return 2;
            }


            if(!$alumno->tutor){
                $familiar3 = familiar::where('idUser','=',$user->id)->where('relacion','=',3)->first();

                if($familiar3){
                    if(!$familiar3->titulo){
                        return 2;
                    }

                    if(!$familiar3->firstName){
                        return 2;
                    }

                    if(!$familiar3->telefono){
                        return 2;
                    }

                    if(!$familiar3->celular){
                        return 2;
                    }

                    if(!$familiar3->email){
                        return 2;
                    }

                    if(!$familiar3->giro){
                        return 2;
                    }

                    if(!$familiar3->puesto){
                        return 2;
                    }

                    if($familiar3->empresa == null){
                        return 2;
                    }
                }else{
                    return 2;
                }

            }

            $files =  Fileentries::where('idUser','=',$alumno->idUser)->count();

            if($files != 3){
                return 3;
            }

            //Agregar OrientacionVocacional -> 3

            return 4;
        }
    }
}
