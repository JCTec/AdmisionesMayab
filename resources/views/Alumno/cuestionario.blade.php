@extends('layouts.napp')

@section('content')
    <main>
        <div class="container">
            <div class="card-header">
            </div>
                <div class="card align-middle container">
                    <form class="form" role="form" method="POST" action="{{ route('user.saveAlumno') }}" accept-charset="UTF-8" id="login-nav">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="formLabel ">Primer nombre:</label>
                                <input name="firstName" id="firstName" class="form-control" type="text" required>
                                <label class="formLabel">Primer apellido:</label>
                                <input name="firstLastName" id="firstLastName" class="form-control" type="text" required>
                                <label class="formLabel">Correo electrónico:</label>
                                <input name="finalEmail" id="finalEmail" class="form-control" type="email" required>
                                <label class="formLabel">Fecha de nacimiento:</label>
                                <input name="day" id="day" class="form-control" type="text" required>
                                <label class="sr-only" for="inlineFormInput">Month</label>
                                <input name="month" id="month inlineFormInput" class="form-control" type="text" required>
                                <label class="sr-only" for="inlineFormInputGroup">Year</label>
                                <input name="year" id="year inlineFormInputGroup" class="form-control" type="text" required>
                                <label class="formLabel">Preparatoria:</label>
                                <select id='preparatoria' name='preparatoria' class="form-control" required>
                                    <option value=''></option>
                                    @foreach ($preparatorias as $key => $value)
                                        <option value='{{$key}}'>{{$value["nombrePreparatoria"]}}</option>
                                    @endforeach
                                </select>
                                <label class="formLabel">Carrera:</label>
                                <select id='carrera' name='carrera' class="form-control" required>
                                    <option value=''></option>
                                    @foreach ($programas as $key => $value)
                                        <option value='{{$key}}'>{{$value["nombre"]}}</option>
                                    @endforeach
                                </select>
                                <label class="formLabel">Postal:</label>
                                <input name="postal" id="postal" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Segundo nombre:</label>
                                <input name="secondName" id="secondName" class="form-control" type="text">
                                <label class="formLabel">Segundo apellido:</label>
                                <input name="secondLastName" id="secondLastName" class="form-control" type="text">
                                <label class="formLabel">Confirma tu correo electrónico:</label>
                                <input class="form-control" type="email" required>
                                <label  class="formLabel">Sexo:</label>
                                <select name="sex" id="sex" class="form-control" required>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                                <label class="formLabel">Celular:</label>
                                <input name="celular" id="celular" class="form-control" type="text" required>
                                <label class="formLabel">Dirección:</label>
                                <input name="direccion" id="direccion" class="form-control" type="text" required>
                                <label class="formLabel">Ciudad:</label>
                                <input name="city" id="city" class="form-control" type="text" required>
                            </div>
                        </div>
                        <button type="submit" class="form-check"> Guardar </button>
                    </form>
                </div>
        </div>
    </main>
@endsection