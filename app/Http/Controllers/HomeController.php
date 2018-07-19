<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Role;
use App\Brother;
use App\Carrera;
use App\familiar;
use App\Fileentries;
use App\HistorialAcademico;
use App\Idioma;
use App\OrientacionVocacional;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Alumno;
use App\User;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use GuzzleHttp\Exception\ConnectException;


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
        $user = Auth::user();

        if ($user) {
            $admin = Admin::where('idUser','=',$user->id)->count();

            if($admin == 0){
                $state = $this->getState();

                return view('home')->with(['state' => $state]);
            }else{

                $admin = Admin::where('idUser','=',$user->id)->first();

                $role = new Role();

                $role->setRoles($admin);

                return view('Admin.home')->with(['role' => $role]);
            }
        }
    }

    public function cuestionario(){

        $user = Auth::user();

        if ($user) {

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            $state = $this->getState();

            try{
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

                    $cache = Storage::disk('json')->get('getProgramasActualesLC.json');

                    $cache = $json;

                    Storage::disk('json')->put('getProgramasActualesLC.json', $cache);
                }

                $response = $client->request('GET', 'Preparatoria/getPreparatorias');

                if($response->getStatusCode() == 404){
                    return abort(404);
                }

                if($response->getStatusCode() == 200) {
                    $json = (string)$response->getBody();

                    $decoded = json_decode($json, true);

                    $preparatorias = $decoded["preparatorias"];

                    $cache = Storage::disk('json')->get('getPreparatorias.json');

                    $cache = $json;

                    Storage::disk('json')->put('getPreparatorias.json', $cache);

                }else{
                    return abort(404);
                }

            }catch (ConnectException $e){
                $json = Storage::disk('json')->get('getProgramasActualesLC.json');

                $decoded = json_decode($json, true);

                $programas = $decoded["programas"];

                $json = Storage::disk('json')->get('getPreparatorias.json');

                $decoded = json_decode($json, true);

                $preparatorias = $decoded["preparatorias"];
            }


            if($alumno){
                return view('Alumno.cuestionario')->with(['programas' => $programas, 'preparatorias' => $preparatorias, 'Alumno' => $alumno, 'state' => $state]);

            }else{
                $alumno = new Alumno();
                return view('Alumno.cuestionario')->with(['programas' => $programas, 'preparatorias' => $preparatorias, 'Alumno' => $alumno, 'state' => $state]);
            }

        }

    }

    public function uploadFiles(){
        $user = Auth::user();

        if ($user) {
            $acta = Fileentries::where('idUser','=',$user->id)->where('type','=',1)->first();
            $prepa = Fileentries::where('idUser','=',$user->id)->where('type','=',2)->first();
            $image = Fileentries::where('idUser','=',$user->id)->where('type','=',3)->first();

            $state = $this->getState();

            return view('Alumno.uploadFiles')->with(['acta' => $acta, 'prepa' => $prepa, 'image' => $image, 'state' => $state]);
        }
    }

    public function orientacionVocacional(){
        $user = Auth::user();

        if ($user) {
            $padre = familiar::where('idUser','=',$user->id)->where('relacion','=',1)->first();
            $madre = familiar::where('idUser','=',$user->id)->where('relacion','=',2)->first();
            $tutor = familiar::where('idUser','=',$user->id)->where('relacion','=',3)->first();
            $state = $this->getState();

            $alumno = Alumno::where('idUser','=',$user->id)->first();

            $ov = OrientacionVocacional::where('idUser','=', $user->id)->first();


            if(!$ov){
                $ov = new OrientacionVocacional();
            }

            if(!$padre || !$madre || !$alumno){
                return redirect()->route('home');
            }else{

                if($tutor){
                    if($user->step2 == 1){
                        $brothers = Brother::where('idUser','=',$user->id)->get();
                        $historialAcademico = HistorialAcademico::where('idUser','=',$user->id)->get();

                        return view('Alumno.orientacionVocacional')->with(['padre' => $padre, 'madre' => $madre,'tutor' => $tutor,'alumno' => $alumno, 'ov' => $ov, 'brothers' => $brothers, 'HA' => $historialAcademico,'state' => $state]);
                    }elseif ($user->step2 == 2){
                        return view('Alumno.orientacionVocacional2')->with(['padre' => $padre, 'madre' => $madre,'tutor' => $tutor,'alumno' => $alumno, 'ov' => $ov,'state' => $state]);
                    }elseif ($user->step2 == 3){
                        $string = file_get_contents(storage_path("json/languages.json"));
                        $languages = json_decode($string, true);

                        $idiomas = Idioma::where('idUser','=',$user->id)->get();

                        return view('Alumno.orientacionVocacional3')->with(['padre' => $padre, 'madre' => $madre,'tutor' => $tutor,'alumno' => $alumno, 'ov' => $ov, 'languages' => $languages, 'idiomas' => $idiomas,'state' => $state]);
                    }elseif ($user->step2 == 4){
                        return view('Alumno.orientacionVocacional4')->with(['padre' => $padre, 'madre' => $madre,'tutor' => $tutor,'alumno' => $alumno, 'ov' => $ov,'state' => $state]);
                    }
                }else {
                    if($user->step2 == 1){
                        $brothers = Brother::where('idUser','=',$user->id)->get();
                        $historialAcademico = HistorialAcademico::where('idUser','=',$user->id)->get();

                        return view('Alumno.orientacionVocacional')->with(['padre' => $padre, 'madre' => $madre,'tutor' => null,'alumno' => $alumno, 'ov' => $ov, 'brothers' => $brothers, 'HA' => $historialAcademico,'state' => $state]);
                    }elseif ($user->step2 == 2){
                        return view('Alumno.orientacionVocacional2')->with(['padre' => $padre, 'madre' => $madre,'tutor' => null,'alumno' => $alumno, 'ov' => $ov,'state' => $state]);
                    }elseif ($user->step2 == 3){
                        $string = file_get_contents(storage_path("json/languages.json"));
                        $languages = json_decode($string, true);

                        $idiomas = Idioma::where('idUser','=',$user->id)->get();

                        return view('Alumno.orientacionVocacional3')->with(['padre' => $padre, 'madre' => $madre,'tutor' => null,'alumno' => $alumno, 'ov' => $ov, 'languages' => $languages, 'idiomas' => $idiomas,'state' => $state]);
                    }elseif ($user->step2 == 4){
                        return view('Alumno.orientacionVocacional4')->with(['padre' => $padre, 'madre' => $madre,'tutor' => null,'alumno' => $alumno, 'ov' => $ov,'state' => $state]);
                    }
                }

            }

        }
    }

    public function familiarTutorInfo(){
        $user = Auth::user();

        if ($user) {

            $state = $this->getState();

            $user->step = 4;

            $user->saveOrFail();

            $familiar = familiar::where('idUser','=',$user->id)->where('relacion','=',3)->first();

            if(!$familiar){
                $familiar = new familiar();
            }

            return view('Alumno.tutor')->with(['familiar' => $familiar,'state' => $state]);
        }
    }

    public function familiar(){
        $user = Auth::user();

        $step = $user->step;

        $state = $this->getState();

        if($step == 1){
            $familiar = familiar::where('idUser','=',$user->id)->where('relacion','=',1)->first();

            if(!$familiar){
                $familiar = new familiar();
            }

            return view('Alumno.familiar1')->with(['familiar' => $familiar,'state' => $state]);
        }elseif ($step == 2){
            $familiar = familiar::where('idUser','=',$user->id)->where('relacion','=',2)->first();

            if(!$familiar){
                $familiar = new familiar();
            }

            return view('Alumno.familiar2')->with(['familiar' => $familiar,'state' => $state]);

        }elseif ($step == 3){

            return view('Alumno.selectTutor')->with(['state' => $state]);
        }else{
            return redirect()->route('familiarTutorInfo');
        }

    }

    public function postHelper(Request $request){
        return $request;
    }

    public function perfil(Request $request){
        $user = Auth::user();

        $id = $request->userID;

        return $this->miPerfil($user, $id);
    }

    public function perfilGet(){
        $user = Auth::user();

        $id = $user->id;

        return $this->miPerfil($user, $id);
    }

    private function miPerfil($user, $id){
        if ($user) {

            $admin = Admin::where('idUser','=',$user->id)->first();

            if($user->id == $id || $admin){

                $userToSend = User::where('id', '=', $id)
                    ->with('alumno')
                    ->with('transaction')
                    ->with('ov')
                    ->first();

                $familiares = familiar::where('idUser','=',$userToSend->id)->get();

                $brothers = Brother::where('idUser','=',$userToSend->id)->get();

                $idiomas = Idioma::where('idUser','=',$userToSend->id)->get();

                $historialAcademico = HistorialAcademico::where('idUser','=', $user->id)->get();

                $pp = Fileentries::where('idUser','=',$userToSend->id)->where('type', '=' ,'3')->first();

                $role = new Role();

                $json = Storage::disk('json')->get('getProgramasActualesLC.json');

                $decoded = json_decode($json, true);

                $programas = $decoded["programas"];

                $json = Storage::disk('json')->get('getPreparatorias.json');

                $decoded = json_decode($json, true);

                $preparatorias = $decoded["preparatorias"];

                foreach ($programas as $programa){
                    if($programa['programa'] == $userToSend->alumno->carrera){
                        $programaS = $programa['nombre'];
                    }
                }

                foreach ($preparatorias as $preparatoria){
                    if($preparatoria['id'] == $userToSend->alumno->preparatoria){
                        $preparatoriaS = $preparatoria['nombrePreparatoria'];
                    }
                }


                if($admin){
                    $role->setRoles($admin);

                    return view('Alumno.perfil')->with(['user' => $userToSend, 'state' => $this->getStateADMIN($userToSend->id), 'pp' => $pp, 'role' => $role, 'admin' => true, 'programa' => $programaS, 'preparatoria' => $preparatoriaS, 'familiares' => $familiares,'brothers' => $brothers, 'idiomas' => $idiomas, 'historialAcademico' => $historialAcademico]);
                }else{
                    return view('Alumno.perfil')->with(['user' => $userToSend, 'state' => $this->getState(), 'pp' => $pp, 'role' => $role, 'admin' => false, 'programa' => $programaS, 'preparatoria' => $preparatoriaS, 'familiares' => $familiares,'brothers' => $brothers, 'idiomas' => $idiomas, 'historialAcademico' => $historialAcademico]);
                }


            }else{
                return redirect()->route('home');
            }

        }
    }

    protected function getStateADMIN($id){
        $user = User::where('id', '=', $id)->first();

        if ($user){
            return $this->getStateInternal($user);
        }
    }

    protected function getState(){
        $user = Auth::user();

        if ($user){
            return $this->getStateInternal($user);
        }
    }

    private function getStateInternal($user){

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

            if($alumno->preparatoria == 159){
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

            $payment = Transaction::where('idUser','=',$user->id)->first();

            if(!$payment){
                return 2;
            }

            $files =  Fileentries::where('idUser','=',$alumno->idUser)->count();

            if($files != 3){
                return 3;
            }


            $familiar = familiar::where('idUser','=',$user->id)->where('relacion','=',1)->first();

            $familiar2 = familiar::where('idUser','=',$user->id)->where('relacion','=',2)->first();

            if($familiar && $familiar2){
                if(!$familiar->titulo){
                    return 4;
                }

                if(!$familiar->firstName){
                    return 4;
                }


                if(!$familiar->telefono){
                    return 4;
                }

                if(!$familiar->celular){
                    return 4;
                }

                if(!$familiar->email){
                    return 4;
                }

                if(!$familiar->giro){
                    return 4;
                }

                if(!$familiar->puesto){
                    return 4;
                }

                if($familiar->empresa == null){
                    return 4;
                }

                if(!$familiar2->titulo){
                    return 4;
                }

                if(!$familiar2->firstName){
                    return 4;
                }


                if(!$familiar2->telefono){
                    return 4;
                }

                if(!$familiar2->celular){
                    return 4;
                }

                if(!$familiar2->email){
                    return 4;
                }


                if(!$familiar2->giro){
                    return 4;
                }

                if(!$familiar2->puesto){
                    return 4;
                }

                if($familiar2->empresa == null){
                    return 4;
                }
            }else{
                return 4;
            }


            if(!$alumno->tutor){
                $familiar3 = familiar::where('idUser','=',$user->id)->where('relacion','=',3)->first();

                if($familiar3){
                    if(!$familiar3->titulo){
                        return 4;
                    }

                    if(!$familiar3->firstName){
                        return 4;
                    }

                    if(!$familiar3->telefono){
                        return 4;
                    }

                    if(!$familiar3->celular){
                        return 4;
                    }

                    if(!$familiar3->email){
                        return 4;
                    }

                    if(!$familiar3->giro){
                        return 4;
                    }

                    if(!$familiar3->puesto){
                        return 4;
                    }

                    if($familiar3->empresa == null){
                        return 4;
                    }
                }else{
                    return 4;
                }

            }

            $ov = OrientacionVocacional::where('idUser','=',$alumno->idUser)->first();

            if(!$ov){
                return 5;
            }else{
                if(!$ov->finished){
                    return 5;
                }
            }

            return 6;
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
