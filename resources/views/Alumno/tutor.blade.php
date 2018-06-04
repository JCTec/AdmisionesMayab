@extends('layouts.napp')

@section('content')
    <main>
        <div class="container">
            <div class="card-header">
            </div>
            <div class="card align-middle container">
                <div class="card-header text-center">
                    Datos de la Tutor
                </div>
                <script>
                    $(document).ready(function () {

                        $('#back').on('click', function () {
                            window.location = "{{route('back')}}";
                        });

                        $('#back').mouseenter(function () {
                            $(this).css('color', '#ffffff');
                        }).mouseleave(function () {
                            $(this).css('color', '#007bff');

                        });

                        $('#saveASD').on('click', function (e) {
                            e.preventDefault();
                            if($('#finalEmail').val() == $('#finalEmail2').val()){
                                $("form").submit();
                            }
                        });
                    });
                </script>

                <form class="form-inline" role="form" method="POST" action="{{ route('user.createFamiliar') }}" accept-charset="UTF-8" id="login-nav">
                    @csrf
                    <input type="hidden" name="relacion" value=3>

                    <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px;">
                        <div class="col-md-12">
                            <label class="formLabel">Titulo:</label>
                            <input name="titulo" id="titulo" class="form-control" placeholder="Ejemplo: Sr. Sra." type="text" value="{{$familiar->titulo}}" required>
                        </div>
                    </div>

                    <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                        <div class="col-md-6">
                            <label class="formLabel ">Primer nombre:</label>
                            <input name="firstName" id="firstName" class="form-control" placeholder="Primer Nombre" style="width: 69%" type="text" value="{{$familiar->firstName}}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="formLabel">Segundo nombre:</label>
                            <input name="secondName" id="secondName" class="form-control" placeholder="Segundo Nombre" style="width: 67%" value="{{$familiar->secondName}}" type="text" >
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                        <div class="col-md-6">
                            <label class="formLabel">Primer apellido:</label>
                            <input name="firstLastName" id="firstLastName" class="form-control" placeholder="Primer Apellido" style="width: 69%" value="{{$familiar->firstLastName}}" type="text" required>
                        </div>
                        <div class="col-md-6">
                            <label class="formLabel">Segundo apellido:</label>
                            <input name="secondLastName" id="secondLastName" class="form-control" placeholder="Segundo Apellido" style="width: 67%" value="{{$familiar->secondLastName}}" type="text">
                        </div>
                    </div>

                    <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                        <div class="col-md-6">
                            <label class="formLabel">Teléfono:</label>
                            <input name="telefono" id="telefono" class="form-control" placeholder="Teléfono" style="width: 78%;" type="text" value="{{$familiar->telefono}}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="formLabel">Celular:</label>
                            <input name="celular" id="celular" class="form-control" style="width: 81%;" placeholder="Celular" type="text" value="{{$familiar->celular}}" required>
                        </div>
                    </div>

                    <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                        <div class="col-md-6">
                            <label class="formLabel">¿Vive?</label>
                            @if($familiar->isAlive)
                                <input type="radio" name="isAlive" value=1 checked> Si<br>
                                <input type="radio" name="isAlive" value=0> No<br>
                            @else
                                <input type="radio" name="isAlive" value=1> Si<br>
                                <input type="radio" name="isAlive" value=0 checked> No<br>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="formLabel">¿Es egresada de la Universidad Anáhuac?</label>
                            @if($familiar->isEgresado)
                                <input type="radio" name="isEgresado" value=1 checked> Si<br>
                                <input type="radio" name="isEgresado" value=0> No<br>
                            @else
                                <input type="radio" name="isEgresado" value=1> Si<br>
                                <input type="radio" name="isEgresado" value=0 checked> No<br>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                        <div class="col-md-12">
                            <label class="formLabel" style="padding-right: 30px">Domicilio permanente:</label>
                            <input name="direccion" id="direccion" class="form-control" placeholder="Dirección" style="width: 80%;" value="{{$familiar->direccion}}" type="text" required>
                        </div>
                    </div>

                    <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                        <div class="col-md-6">
                            <label class="formLabel">Correo electrónico:</label>
                            <input name="email" id="email" class="form-control" placeholder="Email" style="width: 65%;" type="email" value="{{$familiar->email}}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="formLabel">Empresa:</label>
                            <input name="empresa" id="empresa" class="form-control" placeholder="Empresa" style="width: 78%;" type="text" value="{{$familiar->empresa}}" required>
                        </div>
                    </div>

                    <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                        <div class="col-md-6">
                            <label class="formLabel">Giro:</label>
                            <input name="giro" id="giro" class="form-control" placeholder="Giro" style="width: 85%;" type="text" value="{{$familiar->giro}}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="formLabel">Puesto:</label>
                            <input name="puesto" id="puesto" class="form-control" placeholder="Puesto" style="width: 81%;" type="text" value="{{$familiar->puesto}}" required>
                        </div>
                    </div>

                    <button id="saveB" type="submit" class="form-check " hidden="hidden"> Guardar </button>
                </form>

                <div id="container">
                    <div id="left" style="padding-left: 25px;padding-bottom: 30px; padding-top: 10px">
                        <a id="back" style="color: #007bff;" class="btn btn-outline-primary">Atras</a>
                    </div>
                    <div id="middle"></div>
                    <div id="right" style="text-align: right; padding-right: 35px; padding-bottom: 30px; padding-top: 10px">
                        <button id="saveASD" class="btn btn-outline-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
