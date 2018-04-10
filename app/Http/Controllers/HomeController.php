<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\User;
use Illuminate\Support\Facades\Auth;


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
        return view('home');
    }

    public function cuestionario(){

        return view('Alumno.cuestionario');
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

            return true;
        }
    }
}
