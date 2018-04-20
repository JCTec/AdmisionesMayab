@extends('layouts.napp')

@section('content')
    <main>
        <div class="container">
            <div class="card-header">
            </div>
            <div class="card align-middle container">
                <div class="card-header text-center">
                    Datos del Padre
                </div>
                <form class="form" role="form" method="POST" action="{{ route('user.createFamiliar') }}" accept-charset="UTF-8" id="login-nav">
                    @csrf
                    <input type="hidden" name="relacion" value=1>

                    <div class="row">
                        <div class="col-md-6">
                            <label class="formLabel">Titulo:</label>
                            <input name="titulo" id="titulo" class="form-control" type="text" required>
                            <label class="formLabel ">Primer nombre:</label>
                            <input name="firstName" id="firstName" class="form-control" type="text" required>
                            <label class="formLabel">Primer apellido:</label>
                            <input name="firstLastName" id="firstLastName" class="form-control" type="text" required>
                            <label class="formLabel">Teléfono:</label>
                            <input name="telefono" id="telefono" class="form-control" type="text" required>
                            <label class="formLabel">Correo electrónico:</label>
                            <input name="email" id="email" class="form-control" type="email" required>
                            <label class="formLabel">¿Vive?</label>
                            <input type="radio" name="isAlive" value=1 checked> Si<br>
                            <input type="radio" name="isAlive" value=0> No<br>
                            <label class="formLabel">¿Es egresada de la Universidad Anáhuac?</label>
                            <input type="radio" name="isEgresado" value=1 checked> Si<br>
                            <input type="radio" name="isEgresado" value=0> No<br>


                        </div>
                        <div class="col-md-6">
                            <label class="formLabel">Domicilio permanente:</label>
                            <input name="direccion" id="direccion" class="form-control" type="text" required>
                            <label class="formLabel">Segundo nombre:</label>
                            <input name="secondName" id="secondName" class="form-control" type="text">
                            <label class="formLabel">Segundo apellido:</label>
                            <input name="secondLastName" id="secondLastName" class="form-control" type="text">
                            <label class="formLabel">Celular:</label>
                            <input name="celular" id="celular" class="form-control" type="text" required>
                            <label class="formLabel">Empresa:</label>
                            <input name="empresa" id="empresa" class="form-control" type="text" required>
                            <label class="formLabel">Giro:</label>
                            <input name="giro" id="giro" class="form-control" type="text" required>
                            <label class="formLabel">Puesto:</label>
                            <input name="puesto" id="puesto" class="form-control" type="text" required>
                        </div>
                    </div>
                    <button type="submit" class="form-check"> Guardar </button>
                </form>
            </div>
        </div>
    </main>
@endsection
