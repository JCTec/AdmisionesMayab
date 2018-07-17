<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
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

                $alumnos = Alumno::all();

                $c = false;

                $cS = 'C';

                if(strpos($admin->role, $cS) == true){
                    $c = true;
                }

                $r = false;

                $rS = 'R';

                if(strpos($admin->role, $rS) == true){
                    $r = true;
                }


                $u = false;

                $uS = 'U';

                if(strpos($admin->role, $uS) == true){
                    $u = true;
                }

                $d = false;

                $dS = 'D';

                if(strpos($admin->role, $dS) == true){
                    $d = true;
                }

                return view('Admin.Alumnos')->with(['alumnos' => $alumnos,'c' => $c,'r' => $r ,'u' => $u, 'd' => $d]);
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
