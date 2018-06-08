@extends('layouts.napp')

@section('content')
    <main>
        <div class="container">
            <div class="card-header">
            </div>
                <div class="card align-middle container">

                    <script>
                        $(document).ready(function () {

                            $('form :input').change(function() {
                                if($('#finalEmail').val() != $('#finalEmail2').val()){
                                    $('#saveASD').attr('disabled', true);
                                }else{
                                    $('#saveASD').attr('disabled', false);
                                }
                            });

                            $('#saveASD').on('click', function (e) {
                                e.preventDefault();
                                if($('#finalEmail').val() == $('#finalEmail2').val()){
                                    $('#saveB').click();
                                }
                            });
                        });
                    </script>

                    <form class="form-inline" role="form" method="POST" action="{{ route('user.saveAlumno') }}" accept-charset="UTF-8" id="login-nav">
                        @csrf

                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-6">
                                <label class="formLabel ">Primer nombre:</label>
                                <input name="firstName" id="firstName" class="form-control" placeholder="Primer Nombre" style="width: 69%" type="text" value="{{$Alumno->firstName}}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Segundo nombre:</label>
                                <input name="secondName" id="secondName" class="form-control" placeholder="Segundo Nombre" style="width: 67%" type="text" value="{{$Alumno->secondName}}">
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-6">
                                <label class="formLabel">Primer apellido:</label>
                                <input name="firstLastName" id="firstLastName" class="form-control" placeholder="Primer Apellido" style="width: 69%" type="text" value="{{$Alumno->firstLastName}}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Segundo apellido:</label>
                                <input name="secondLastName" id="secondLastName" class="form-control" placeholder="Segundo Apellido" style="width: 67%" type="text" value="{{$Alumno->secondLastName}}" >
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-6">
                                <label class="formLabel">Correo electrónico:</label>
                                <input name="finalEmail" id="finalEmail" class="form-control" style="width: 65%" placeholder="Email"  type="email" value="{{$Alumno->finalEmail}}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Confirma tu correo electrónico:</label>
                                <input class="form-control" id="finalEmail2" type="email" style="width: 49%" placeholder="Email"  value="{{$Alumno->finalEmail}}" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-12">
                                <label class="formLabel">Fecha de nacimiento:</label>
                                <input name="day" id="day" class="form-control" type="text" placeholder="dd" value="{{$Alumno->day}}" required>
                                <input name="month" id="month inlineFormInput" class="form-control" placeholder="mm" type="text" value="{{$Alumno->month}}" required>
                                <input name="year" id="year inlineFormInputGroup" class="form-control" placeholder="yyyy" type="text" value="{{$Alumno->year}}" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-12">
                                <label class="formLabel">Preparatoria:</label>

                                <select id='preparatoria' name='preparatoria' style="width: 87%" class="form-control" required>
                                    @foreach ($preparatorias as $prepa)
                                        @if($prepa["id"] == $Alumno->preparatoria)
                                            <option value='{{$prepa["id"]}}' selected="selected">{{$prepa["nombrePreparatoria"]}}</option>
                                        @else
                                            <option value='{{$prepa["id"]}}'>{{$prepa["nombrePreparatoria"]}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-12">
                                <label class="formLabel" style="padding-right: 28px">Carrera:</label>
                                <select id='carrera' name='carrera' class="form-control" style="width: 90%" required>
                                    <option>Seleccionar</option>
                                    @foreach ($programas as $programa)
                                        <option value='{{$programa["programa"]}}'>{{$programa["nombre"]}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-12">
                                <label  class="formLabel">Sexo:</label>
                                <select name="sex" id="sex" class="form-control" required>
                                    <option value="m">Masculino</option>
                                    <option value="f">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-6">
                                <label class="formLabel">Teléfono:</label>
                                <input name="telefono" id="telefono" class="form-control" placeholder="Teléfono" style="width: 79%" type="text" value="{{$Alumno->telefono}}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Celular:</label>
                                <input name="celular" id="celular" class="form-control" placeholder="Celular" style="width: 79%" type="text" value="{{$Alumno->celular}}" required>
                            </div>
                        </div>

                        <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-6">
                                <label class="formLabel">Dirección:</label>
                                <input name="direccion" id="direccion" class="form-control" placeholder="Dirección" style="width: 45%" type="text" value="{{$Alumno->direccion}}" required>
                                <input name="city" id="city" class="form-control" type="text" placeholder="Ciudad" style="width: 32%" value="{{$Alumno->city}}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Codigo Postal:</label>
                                <input name="postal" id="postal" class="form-control" placeholder="Codigo Postal" style="width: 70%" value="{{$Alumno->postal}}" required>
                            </div>
                        </div>

                        <div id="container">
                            <div id="left">

                            </div>
                            <div id="middle">

                            </div>
                            <div id="right" style="padding-left: 150px; padding-bottom: 30px; padding-top: 10px">
                                <button id="saveASD" class="btn btn-outline-primary">Guardar</button>

                            </div>
                        </div>

                        <button id="saveB" type="submit" class="form-check " hidden="hidden"> Guardar </button>
                    </form>
                </div>
        </div>
    </main>
@endsection