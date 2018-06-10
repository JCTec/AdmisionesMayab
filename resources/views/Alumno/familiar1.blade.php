@extends('layouts.napp')

@section('content')
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Datos del Padre
                        </div>
                            <script>
                                $(document).ready(function () {

                                    $('#saveASD').on('click', function (e) {
                                        e.preventDefault();
                                        if($('#finalEmail').val() == $('#finalEmail2').val()){
                                            $('#saveB').click();
                                        }
                                    });
                                });
                            </script>

                            <div class="card-body">
                                <form class="form" role="form" method="POST" action="{{ route('user.createFamiliar') }}" accept-charset="UTF-8" id="login-nav">
                                    @csrf
                                    <input type="hidden" name="relacion" value=1>

                                    @if ($familiar->id)
                                        <input type="hidden" name="id" value="{{$familiar->id}}">
                                    @endif

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Titulo:</label>
                                            <input name="titulo" id="titulo" class="form-control" placeholder="Ejemplo: Sr. Sra." type="text" value="{{$familiar->titulo}}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel ">Primer nombre:</label>
                                            <input name="firstName" id="firstName" class="form-control" placeholder="Primer Nombre" type="text" value="{{$familiar->firstName}}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Segundo nombre:</label>
                                            <input name="secondName" id="secondName" class="form-control" placeholder="Segundo Nombre" value="{{$familiar->secondName}}" type="text" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Primer apellido:</label>
                                            <input name="firstLastName" id="firstLastName" class="form-control" placeholder="Primer Apellido" value="{{$familiar->firstLastName}}" type="text" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Segundo apellido:</label>
                                            <input name="secondLastName" id="secondLastName" class="form-control" placeholder="Segundo Apellido" value="{{$familiar->secondLastName}}" type="text">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Teléfono:</label>
                                            <input name="telefono" id="telefono" class="form-control" placeholder="Teléfono" type="text" value="{{$familiar->telefono}}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Celular:</label>
                                            <input name="celular" id="celular" class="form-control" placeholder="Celular" type="text" value="{{$familiar->celular}}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">¿Vive?</label>
                                            @if(!isset($familiar->isAlive) || $familiar->isAlive == true)
                                                <input type="radio" name="isAlive" value=1 checked> Si<br>
                                                <input type="radio" name="isAlive" value=0> No<br>
                                            @else
                                                <input type="radio" name="isAlive" value=1> Si<br>
                                                <input type="radio" name="isAlive" value=0 checked> No<br>
                                            @endif
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">¿Es egresada de la Universidad Anáhuac?</label>
                                            @if(!isset($familiar->isEgresado) || $familiar->isEgresado == true)
                                                <input type="radio" name="isEgresado" value=1 checked> Si<br>
                                                <input type="radio" name="isEgresado" value=0> No<br>
                                            @else
                                                <input type="radio" name="isEgresado" value=1> Si<br>
                                                <input type="radio" name="isEgresado" value=0 checked> No<br>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="formLabel">Domicilio permanente:</label>
                                            <input name="direccion" id="direccion" class="form-control" placeholder="Dirección" value="{{$familiar->direccion}}" type="text" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Correo electrónico:</label>
                                            <input name="email" id="email" class="form-control" placeholder="Email"  type="email" value="{{$familiar->email}}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Empresa:</label>
                                            <input name="empresa" id="empresa" class="form-control" placeholder="Empresa" type="text" value="{{$familiar->empresa}}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Giro:</label>
                                            <input name="giro" id="giro" class="form-control" placeholder="Giro" type="text" value="{{$familiar->giro}}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="formLabel">Puesto:</label>
                                            <input name="puesto" id="puesto" class="form-control" placeholder="Puesto" type="text" value="{{$familiar->puesto}}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12" style="text-align: right">
                                            <button id="saveASD" class="btn btn-outline-primary">Guardar</button>
                                        </div>
                                    </div>

                                    <button id="saveB" type="submit" class="form-check " hidden="hidden"> Guardar </button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
