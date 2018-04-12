@extends('layouts.napp')

@section('content')
    <main>
        <div class="card align-middle container">
            <form method="POST" action="{{ route('user.saveAlumno') }}" >
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <label id="firstName" class="formLabel ">Primer nombre:</label>
                        <input id="secondName" class="form-control" type="text" required>
                        <label class="formLabel">Primer apellido:</label>
                        <input class="form-control" type="text" required>
                        <label class="formLabel">Correo electrónico:</label>
                        <input class="form-control" type="email" required>
                        <label class="formLabel">Fecha de nacimiento:</label>
                        <form class="form-inline">
                            <label class="sr-only" for="inlineFormInput">Dia</label>
                            <input id="inlineFormInput" class="form-control" type="text" required>
                            <label class="sr-only" for="inlineFormInput">Mes</label>
                            <input  class="form-control" type="text" required>
                            <label class="sr-only" for="inlineFormInput">Año</label>
                            <input class="form-control" type="text" required>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <label class="formLabel">Segundo nombre:</label>
                        <input class="form-control" type="text">
                        <label class="formLabel">Segundo apellido:</label>
                        <input class="form-control" type="text">
                        <label class="formLabel">Confirma tu correo electrónico:</label>
                        <input class="form-control" type="email" required>
                        <label class="formLabel">Sexo:</label>
                        <select class="form-control" required>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>HELICOPTERO DE COMBATE TIPO APACHE</option>
                        </select>
                        <label class="formLabel">Segundo apellido:</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-md-6">
                        <label class="formLabel">Segundo nombre:</label>
                        <input class="form-control" type="text">
                        <label class="formLabel">Segundo apellido:</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <input type="submit" class="form-check">
            </form>
        </div>
    </main>
@endsection