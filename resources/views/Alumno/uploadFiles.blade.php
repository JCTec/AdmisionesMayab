@extends('layouts.napp')

@section('content')
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Subir Archivos
                        </div>

                        <script>
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#actaDeNacimiento').attr('src', e.target.result);
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#actaDeNacimiento').show(150);
                                }
                            }

                            function readURL2(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#certificadoDePrepa').attr('src', e.target.result);
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#certificadoDePrepa').show(150);
                                }
                            }

                            function readURL3(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#imagenDePerfil').attr('src', e.target.result);
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#imagenDePerfil').show(150);
                                }
                            }

                            $(document).ready(function () {

                                @if (isset($acta))
                                    var isSetActa = true;
                                @else
                                    var isSetActa = false;
                                @endif

                                @if (isset($prepa))
                                    var isSetPrepa = true;
                                @else
                                    var isSetPrepa = false;
                                @endif

                                @if (isset($image))
                                    var isSetImage = true;
                                @else
                                    var isSetImage = false;
                                @endif


                                if(isSetActa){
                                    @if(isset($acta->base64))
                                        $('#actaDeNacimiento').attr('src', "{{$acta->base64}}");
                                    @endif

                                    @if(isset($acta->aprobado))
                                        @if($acta->aprobado)
                                            $('#stateActa').attr('src', "{{URL::asset("img/tickW.png")}}");
                                        @else
                                            $('#stateActa').attr('src', "{{URL::asset("img/crossW.png")}}");
                                        @endif
                                    @else
                                        $('#stateActa').attr('src', "{{URL::asset("img/reloj.png")}}");
                                    @endif
                                }else{
                                    $('#stateActa').hide();
                                }

                                if(isSetPrepa){
                                    @if(isset($prepa->base64))
                                        $('#certificadoDePrepa').attr('src', "{{$prepa->base64}}");
                                    @endif

                                    @if(isset($prepa->aprobado))
                                        @if($prepa->aprobado)
                                            $('#statePrepa').attr('src', "{{URL::asset("img/tickW.png")}}");
                                        @else
                                            $('#statePrepa').attr('src', "{{URL::asset("img/crossW.png")}}");
                                        @endif
                                    @else
                                        $('#statePrepa').attr('src', "{{URL::asset("img/reloj.png")}}");
                                    @endif
                                }else{
                                    $('#statePrepa').hide();
                                }

                                if(isSetImage){
                                    @if(isset($image->base64))
                                        $('#imagenDePerfil').attr('src', "{{$image->base64}}");
                                    @endif

                                    @if(isset($image->aprobado))
                                        @if($image->aprobado)
                                            $('#stateImage').attr('src', "{{URL::asset("img/tickW.png")}}");
                                        @else
                                            $('#stateImage').attr('src', "{{URL::asset("img/crossW.png")}}");
                                        @endif
                                    @else
                                        $('#stateImage').attr('src', "{{URL::asset("img/reloj.png")}}");
                                    @endif
                                }else{
                                    $('#stateImage').hide();
                                }

                                document.getElementById("actaDeNacimientoInput").onchange = function () {
                                    document.getElementById("actaDeNacimientoInputText").value = this.value;
                                    readURL(this);
                                };

                                document.getElementById("certificadoDePrepaInput").onchange = function () {
                                    document.getElementById("certificadoDePrepaInputText").value = this.value;
                                    readURL2(this);
                                };

                                document.getElementById("imagenDePerfilInput").onchange = function () {
                                    document.getElementById("imagenDePerfilInputText").value = this.value;
                                    readURL3(this);
                                };
                            });
                        </script>

                        <div class="card-body">
                            <form class="form" role="form" method="POST" action="{{ route('addFiles') }}" accept-charset="UTF-8" enctype="multipart/form-data" id="login-nav">
                                @csrf
                                <div class="row" style="padding-bottom: 20px">
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="actaDeNacimiento" src="{{ URL::asset("img/documento.jpg") }}" width="80%" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">
                                            <img id="stateActa" src="{{URL::asset("img/loading.gif")}}" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="actaDeNacimientoInputText" placeholder="Choose File" disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span style="">Acta de Nacimiento</span>
                                                <input id="actaDeNacimientoInput" name="actaDeNacimiento" type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="certificadoDePrepa" src="{{ URL::asset("img/documento.jpg") }}" width="80%" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">
                                            <img id="statePrepa" src="{{URL::asset("img/loading.gif")}}" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="certificadoDePrepaInputText" placeholder="Choose File" disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span>Certificado de Prepa</span>
                                                <input id="certificadoDePrepaInput" name="certificadoDePrepa" type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="imagenDePerfil" src="{{ URL::asset("img/imagen.jpg") }}" width="100%" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">
                                            <img id="stateImage" src="{{URL::asset("img/loading.gif")}}" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="imagenDePerfilInputText" placeholder="Choose File" disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span style="">Foto de Perfil</span>
                                                <input id="imagenDePerfilInput" type="file" name="imagenDePerfil" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6" style="text-align: right">
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
