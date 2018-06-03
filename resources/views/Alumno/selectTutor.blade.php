@extends('layouts.napp')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="card align-middle container" style="width: 50%;">
                <div class="card-header text-center">
                    Seleccionar Tutor
                </div>

                <script>

                    $(document).ready(function () {

                        $('#saveASD').on('click', function (e) {
                            e.preventDefault();

                            redirect();
                        });
                    });

                    function redirect() {
                        var selectElem = document.getElementById('tutor')

                        var id = selectElem.options[selectElem.selectedIndex].value;

                        if(id == 3){
                            window.location = "familiar/tutor/info"
                        }else{
                            window.location = ("familiar/setTutor/" + id)
                        }
                    }

                </script>

                <div class="card-body">
                    <div style="padding-bottom: 20px; width: auto">
                        <select id="tutor" class="form-control">
                            <option value=1>Padre</option>
                            <option value=2>Madre</option>
                            <option value=3>Otro</option>
                        </select>
                    </div>

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
