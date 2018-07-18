@extends($admin ? 'layouts.app' : 'layouts.napp')

@section('content')
    <main>
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Datos Generales
                        </div>

                        <div class="card-body" style="background: .winter-neva-gradient;text-align: center">
                            <script>
                                $(document).ready(function () {
                                    @if (isset($pp))
                                        var isSetImage = true;
                                    @else
                                        var isSetImage = false;
                                    @endif

                                    if(isSetImage){
                                        $('#pp').attr('src', "{{$pp->base64}}");
                                    }

                                    var coll = document.getElementsByClassName("collapsible");
                                    var i;

                                    for (i = 0; i < coll.length; i++) {
                                        coll[i].addEventListener("click", function() {
                                            this.classList.toggle("active");
                                            var content = this.nextElementSibling;
                                            if (content.style.maxHeight){
                                                content.style.maxHeight = null;
                                            } else {
                                                content.style.maxHeight = content.scrollHeight + "px";
                                            }
                                        });
                                    }
                                });
                            </script>

                            <div class="row">
                                <div class="col-md">
                                    <img id="pp" style="border-radius: 20px" src="{{asset('img/ppPlaceHolder.png')}}" class="img-circle" width="150" height="150">
                                </div>
                            </div>

                            <div class="row" style="margin: 10px">
                                <div class="col-md">
                                    <h3>{{$user->alumno->firstName}} {{$user->alumno->secondName}}</h3>
                                </div>
                            </div>
                            <div class="row" style="margin: 10px">
                                <div class="col-md">
                                    <h4>{{$user->alumno->firstLastName}} {{$user->alumno->secondLastName}}</h4>
                                </div>
                            </div>

                            <div class="row" style="margin: 10px">
                                <div class="col-md">
                                    <h2>{{$programa}}</h2>
                                </div>
                            </div>


                            <hr>

                            <button class="collapsible">
                                Informacion Basica
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>

                                <div class="row">
                                    <div class="col-md">
                                        <label>
                                            Preparatoria:
                                        </label>

                                        @if($user->alumno->preparatoria != 159)
                                            {{$preparatoria}} (ID: {{$user->alumno->preparatoria}})
                                        @else
                                            {{$user->alumno->otraPreparatoria}}
                                        @endif
                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Fecha de Nacimiento:
                                        </label>
                                        {{$user->alumno->day}}/{{$user->alumno->month}}/{{$user->alumno->year}}
                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Sexo:
                                        </label>
                                        @if($user->alumno->sex == "m")
                                            Masculino
                                        @else
                                            Femenino
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label>
                                            Email:
                                        </label>
                                        {{$user->alumno->finalEmail}}
                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Teléfono:
                                        </label>
                                        {{$user->alumno->telefonoInt}} {{$user->alumno->telefono}}
                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Celular:
                                        </label>
                                        {{$user->alumno->celularInt}} {{$user->alumno->celular}}
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label>
                                            Dirección:
                                        </label>
                                        {{$user->alumno->direccion}}
                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Codigo Postal:
                                        </label>
                                        {{$user->alumno->postal}}
                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Ciudad:
                                        </label>
                                        {{$user->alumno->city}}
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <button class="collapsible">
                                Datos Familiares
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>

                                @foreach($familiares as $familiar)

                                    <fieldset>
                                        <legend id="legend">
                                            @if($familiar->relacion == 1)
                                                Padre
                                            @elseif($familiar->relacion == 2)
                                                Madre
                                            @else
                                                Tutor
                                            @endif
                                        </legend>

                                        <div class="row">
                                            <div class="col-md">
                                                {{$familiar->titulo}}
                                            </div>

                                            <div class="col-md">
                                                {{$familiar->firstName}} {{$familiar->secondName}}
                                            </div>

                                            <div class="col-md">
                                                {{$familiar->firstLastName}} {{$familiar->secondLastName}}
                                            </div>

                                            @if(!$familiar->isAlive)
                                                <div class="col-md">
                                                    Fallecido
                                                </div>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <label>
                                                    Teléfono:
                                                </label>
                                                {{$familiar->telefonoInt}} {{$familiar->telefono}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Celular:
                                                </label>
                                                {{$familiar->celularInt}} {{$familiar->celular}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    ¿Egresado de la Mayab?:
                                                </label>
                                                @if($familiar->isEgresado)
                                                    Si
                                                @else
                                                    No
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <label>
                                                    Email:
                                                </label>
                                                {{$familiar->email}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Dirección:
                                                </label>
                                                {{$familiar->direccion}}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <label>
                                                    Empresa:
                                                </label>
                                                {{$familiar->empresa}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Puesto:
                                                </label>
                                                {{$familiar->puesto}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Giro:
                                                </label>
                                                {{$familiar->giro}}
                                            </div>
                                        </div>
                                    </fieldset>

                                @endforeach

                                @foreach($brothers as $brother)

                                    <fieldset>
                                        <legend id="legend">
                                            Hermano
                                        </legend>

                                        <div class="row">
                                            <div class="col-md">
                                                {{$brother->nombre}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Sexo:
                                                </label>
                                                @if($brother->sex == 'f')
                                                    Femenino
                                                @else
                                                    Masculino
                                                @endif
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Edad:
                                                </label>
                                                {{$brother->edad}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Trabajo o Estudio:
                                                </label>
                                                {{$brother->trabajoEstudio}}
                                            </div>

                                        </div>

                                    </fieldset>

                                @endforeach

                            </div>

                            <hr>

                            <button class="collapsible">
                                Contacto de Emergencia
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>


                            </div>

                            <hr>

                            <button class="collapsible">
                                Idiomas
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>

                                @foreach($idiomas as $idioma)
                                    <fieldset>
                                        <legend id="legend">
                                            {{$idioma->idioma}}
                                        </legend>

                                        <div class="row">

                                            <div class="col-md">
                                                <label>
                                                    Lee:
                                                </label>
                                                {{$idioma->leer}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Traduce:
                                                </label>
                                                {{$idioma->traduce}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Habla:
                                                </label>
                                                {{$idioma->habla}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Escribe:
                                                </label>
                                                {{$idioma->escribe}}
                                            </div>

                                        </div>

                                    </fieldset>

                                @endforeach

                            </div>

                            <hr>

                            <button class="collapsible">
                                Historial Academico
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>

                                @foreach($historialAcademico as $escuela)
                                    <fieldset>
                                        <legend id="legend">
                                            @if($escuela->grado == 1)
                                                Primaria
                                            @elseif($escuela->grado == 2)
                                                Secundaria
                                            @else
                                                Preparatoria
                                            @endif
                                        </legend>

                                        <div class="row">

                                            <div class="col-md">
                                                {{$escuela->nombre}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Ciudad:
                                                </label>
                                                {{$escuela->ciudad}}
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Promedio:
                                                </label>
                                                {{$escuela->promedio}}
                                            </div>

                                        </div>

                                    </fieldset>

                                @endforeach

                            </div>

                            <hr>

                            <button class="collapsible">
                                Orientación Vocacional
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
