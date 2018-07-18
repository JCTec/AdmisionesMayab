<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Alumno;
use App\security;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
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

    public function alumnos(){

        $user = Auth::user();

        if ($user){

            $admin = Admin::where('idUser','=',$user->id)->first();

            if(!$admin){
                return redirect()->route('home');
            }else{

                $usuarios = User::where('active','=','1')->with('alumno')->with('transaction')->get();

                $role = new Role();

                $role->setRoles($admin);

                return view('Admin.Alumnos')->with(['usuarios' => $usuarios,'role' => $role]);
            }
        }
    }

    public function archivos(){

        $user = Auth::user();

        if ($user){

            $admin = Admin::where('idUser','=',$user->id)->first();

            if(!$admin){
                return redirect()->route('home');
            }else{

                return "Archivos";
            }
        }
    }

    private function BOOLtoString($bool){
        if($bool){
            return "True";
        }else{
            return "False";
        }
    }
}
