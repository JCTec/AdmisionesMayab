<?php

namespace App\Http\Controllers;

use App\Carrera;
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

        $client = new Client([
            'base_uri' => 'https://miplana.mx/u/',
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', 'Programa/getProgramasActualesLC');

        if($response->getStatusCode() == 200){
            $json = (string) $response->getBody();

            $decoded = json_decode($json, true);

            $programas = $decoded["programas"];

            $response = $client->request('GET', 'Preparatoria/getPreparatorias');

            if($response->getStatusCode() == 200) {
                $json = (string)$response->getBody();

                $decoded = json_decode($json, true);

                $preparatorias = $decoded["preparatorias"];

                return view('Alumno.cuestionario')->with(['programas' => $programas, 'preparatorias' => $preparatorias]);
            }

        }

    }

    private function getPicState(){
        $files =  Fileentries::where('id_user','=',$alumno->id_user)->where('aprobado','=',True)->count();

        if($files == 3){
            return True;
        }else{
            return False;
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
        return view('Alumno.orientacionVocacional');
    }


    private function isFinnishedBool(){
        $user = Auth::user();

        if ($user) {

            $alumno = Alumno::where('id_user','=',$user->id)->first();

            if(!$alumno){
                return false;
            }

            if(!$alumno->firstName){
                return false;
            }

            if(!$alumno->secondName){
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

            if(!$alumno->preparatorias){
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

            $files =  Fileentries::where('id_user','=',$alumno->id_user)->where('aprobado','=',True)->count();

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

            $alumno = Alumno::where('id_user','=',$user->id)->first();

            if(!$alumno){
                return 1;
            }

            if(!$alumno->firstName){
                return 1;
            }

            if(!$alumno->secondName){
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

            if(!$alumno->preparatorias){
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

            $files =  Fileentries::where('id_user','=',$alumno->id_user)->count();

            if($files != 3){
                return 2;
            }

            //Agregar OrientacionVocacional -> 3

            return 4;
        }
    }
}
