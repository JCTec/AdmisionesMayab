@extends('layouts.napp')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="card align-middle container" style="width: 50%;">
                <div class="card-header text-center">
                    Subir Archivos
                </div>

                <div class="card-body">

                    <div id="container">
                        <div id="left"></div>
                        <div id="middle"></div>
                        <div id="right" style="padding-left: 400px;">
                            <button id="saveASD" class="btn btn-outline-primary">Guardar</button>
                        </div>
                    </div>

                    <button id="saveB" type="submit" class="form-check " hidden="hidden"> Guardar </button>
                </div>
            </div>
        </div>
    </main>
@endsection
