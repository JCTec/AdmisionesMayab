@extends('layouts.napp')

@section('content')
    <main>
        <div class="container">
            <div class="card-header">
            </div>
            <div class="card align-middle container">
                <div class="card-header text-center">
                    Seleccionar Tutor
                </div>
                
                <script>
                    
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

                <select id="tutor">
                    <option value=1>Padre</option>
                    <option value=2>Madre</option>
                    <option value=3>Otro</option>
                </select>

                <button onclick="redirect()">Guardar</button>
            </div>
        </div>
    </main>
@endsection
