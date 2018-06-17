@extends('layouts.napp')

@section('content')
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Datos Generales
                        </div>

                        <div style="padding-left: 10px; padding-right: 10px;">
                            <script>
                                $(document).ready(function () {

                                    @if(!isset($Alumno->preparatoria) || $Alumno->preparatoria == 159)
                                        $('#otraPrepa').show();
                                        $('#otraPrepa').attr('required', true)
                                    @else
                                        $('#otraPrepa').hide();
                                        $('#otraPrepa').attr('required', false)
                                    @endif

                                    $('#preparatoria').change(function(){
                                        var option = $(this).children(":selected").text();

                                        if($.trim(option).toLowerCase() == "otro"){
                                            $('#otraPrepa').show(500);
                                            $('#otraPrepa').attr('required', true);
                                        }else{
                                            $('#otraPrepa').hide(500);
                                            $('#otraPrepa').attr('required', false);
                                        }

                                    });

                                    $('.required').prop('required', function(){
                                        return  $(this).is(':visible');
                                    });

                                    $('form :input').change(function() {
                                        if($('#finalEmail').val() == $('#finalEmail2').val()){

                                            var day = parseInt($('#day').val(), 10);

                                            if(day > 0 && day <= 31){

                                                var month = parseInt($('#month').val(), 10);

                                                if(month > 0 && month <= 12){
                                                    var year = parseInt($('#year').val(), 10);

                                                    if(year > (parseInt("{{date("Y")}}")-100) && year < parseInt("{{date("Y")}}")){
                                                        $('#saveASD').attr('disabled', false);
                                                    }else{
                                                        $('#saveASD').attr('disabled', true);
                                                    }

                                                }else{
                                                    $('#saveASD').attr('disabled', true);
                                                }
                                            }else{
                                                $('#saveASD').attr('disabled', true);
                                            }
                                        }else{
                                            $('#saveASD').attr('disabled', true);
                                        }
                                    });

                                    $('#saveASD').on('click', function (e) {
                                        $('#basicData').submit();
                                    });
                                });
                            </script>

                            <form role="form" method="POST" action="{{ route('user.saveAlumno') }}" accept-charset="UTF-8" id="basicData">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel ">Primer nombre:</label>
                                        <input name="firstName" id="firstName" class="form-control" placeholder="Primer Nombre" type="text" value="{{$Alumno->firstName}}" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Segundo nombre:</label>
                                        <input name="secondName" id="secondName" class="form-control" placeholder="Segundo Nombre" type="text" value="{{$Alumno->secondName}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Primer apellido:</label>
                                        <input name="firstLastName" id="firstLastName" class="form-control" placeholder="Primer Apellido" type="text" value="{{$Alumno->firstLastName}}" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Segundo apellido:</label>
                                        <input name="secondLastName" id="secondLastName" class="form-control" placeholder="Segundo Apellido" type="text" value="{{$Alumno->secondLastName}}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Correo electrónico:</label>
                                        <input name="finalEmail" id="finalEmail" class="form-control" placeholder="Email"  type="email" value="{{$Alumno->finalEmail}}" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Confirma tu correo electrónico:</label>
                                        <input class="form-control" id="finalEmail2" type="email" placeholder="Email"  value="{{$Alumno->finalEmail}}" required>
                                    </div>
                                </div>

                                <label style="font-family: 'Roboto Slab';">Fecha de nacimiento:</label>
                                <div class="row">
                                    <div class="col-md-12 form-inline form-group">
                                        <label class="formLabel" style="padding-left: 10px">Día:</label>
                                        <input name="day" id="day" class="form-control" type="text" placeholder="dd" value="{{$Alumno->day}}" required>
                                        <label class="formLabel" style="padding-left: 10px">Mes:</label>
                                        <input name="month" id="month" class="form-control" placeholder="mm" type="text" value="{{$Alumno->month}}" required>
                                        <label class="formLabel" style="padding-left: 10px">Año:</label>
                                        <input name="year" id="year" class="form-control" placeholder="yyyy" type="text" value="{{$Alumno->year}}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Preparatoria:</label>
                                        <select id='preparatoria' name='preparatoria' class="form-control" required>
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
                                <div id="otraPrepa" class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Otra Preparatoria:</label>
                                        <input name="otraPreparatoria" id="otraPreparatoria" class="form-control" type="text" placeholder="Nombre de la preparatoria" value="{{$Alumno->otraPreparatoria}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Carrera:</label>
                                        <select id='carrera' name='carrera' class="form-control" required>
                                            <option>Seleccionar</option>
                                            @foreach ($programas as $programa)
                                                @if($programa["programa"] == $Alumno->carrera)
                                                    <option value='{{$programa["programa"]}}' selected>{{$programa["nombre"]}}</option>
                                                @else
                                                    <option value='{{$programa["programa"]}}'>{{$programa["nombre"]}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label  class="formLabel">Sexo:</label>
                                        <select name="sex" id="sex" class="form-control" required>
                                            <option value="m">Masculino</option>
                                            <option value="f">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Teléfono:</label>
                                        <input name="telefono" id="telefono" class="form-control" placeholder="Teléfono" type="text" value="{{$Alumno->telefono}}" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Celular:</label>
                                        <input name="celular" id="celular" class="form-control" placeholder="Celular" type="text" value="{{$Alumno->celular}}" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Dirección:</label>
                                        <input name="direccion" id="direccion" class="form-control" placeholder="Dirección" type="text" value="{{$Alumno->direccion}}" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Codigo Postal:</label>
                                        <input name="postal" id="postal" class="form-control" placeholder="Codigo Postal" value="{{$Alumno->postal}}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Ciudad:</label>
                                        <input name="city" id="city" class="form-control" type="text" placeholder="Ciudad" value="{{$Alumno->city}}" required>
                                    </div>
                                </div>

                                <div id="container">
                                    <div id="left"></div>
                                    <div id="middle"></div>
                                    <div id="right" style="padding-left: 150px; padding-bottom: 30px; padding-top: 10px">
                                        <button id="saveASD" class="btn btn-outline-primary">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
