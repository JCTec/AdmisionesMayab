@extends('layouts.napp')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">

        <div id="home">
            <script>
                $(document).ready(function () {
                    var state = parseInt("{{$state}}");

                    if(state == 1){

                        $('#familia').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#ov').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#pago').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#subirArchivos').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#familia').css('background-color','#806255');

                        $('#ov').css('background-color','#806255');

                        $('#pago').css('background-color','#806255');

                        $('#subirArchivos').css('background-color','#806255');

                        $('#familia').css('color','#d7d7d6');

                        $('#ov').css('color','#d7d7d6');

                        $('#pago').css('color','#d7d7d6');

                        $('#subirArchivos').css('color','#d7d7d6');

                        $('#familia').css('cursor','default');

                        $('#ov').css('cursor','default');

                        $('#pago').css('cursor','default');

                        $('#subirArchivos').css('cursor','default');


                    }else if (state == 2){

                        $('#ov').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#pago').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#subirArchivos').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#ov').css('background-color','#806255');

                        $('#pago').css('background-color','#806255');

                        $('#subirArchivos').css('background-color','#806255');

                        $('#ov').css('color','#d7d7d6');

                        $('#pago').css('color','#d7d7d6');

                        $('#subirArchivos').css('color','#d7d7d6');

                        $('#ov').css('cursor','default');

                        $('#pago').css('cursor','default');

                        $('#subirArchivos').css('cursor','default');

                    }else if(state == 3){

                        $('#pago').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#subirArchivos').on('click', function (e) {
                            e.preventDefault();
                        });

                        $('#pago').css('background-color','#806255');

                        $('#subirArchivos').css('background-color','#806255');

                        $('#pago').css('color','#d7d7d6');

                        $('#subirArchivos').css('color','#d7d7d6');

                        $('#pago').css('cursor','default');

                        $('#subirArchivos').css('cursor','default');

                    }else {

                    }
                });

            </script>

            <div class="box">
                Bienvenido al sistema de Admisiones de la Universidad Anáhuac Mayab, a partir de este momento empiezas tu camino
                como aspirante a estudiar en esta prestigiosa institución. <br> <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut augue nunc. Mauris porttitor diam leo. In ut
                sapien dignissim, lobortis massa non, aliquam risus. Donec dictum, risus sit amet facilisis sodales, purus erat
                pharetra lectus, vitae ullamcorper nisl dui ac urna. In eu dolor cursus, feugiat quam in, maximus nisi. Nam
                porttitor elit mi, sodales maximus ex pharetra id. In risus justo, porta eu ipsum sed, sodales rhoncus turpis.
                Sed id neque vitae augue venenatis vestibulum. Quisque quis varius erat. Fusce mattis maximus orci at dapibus.
                Cras efficitur enim vel scelerisque bibendum. Vestibulum dui ex, congue nec urna sed, ullamcorper commodo tortor.
                Vivamus ultricies et purus in pretium. In ut molestie dolor. Curabitur sit amet interdum justo, eget condimentum ex.
            </div>

            <div id="menuJC">
                <ul>
                    <li><a id="basico" href="{{ route('cuestionario') }}">Basico</a>
                    </li>
                    <li><a id="familia" href="{{ route('familiar') }}">Familia</a>
                    </li>
                    <li><a id="ov" href="{{ route('orientacionVocacional') }}">OV</a>
                    </li>
                    <li><a id="pago" href="{{ route('payment') }}">Pago</a>
                    </li>
                    <li><a id="subirArchivos" href="{{ route('uploadFiles') }}">Archivos</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
