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
                            var ValidImageTypes = ["image/gif", "image/jpeg", "image/png"];

                            $('#navbarDropdown').on('click', function (event) {
                                event.preventDefault();
                                event.stopPropagation();

                                if($(this).attr('aria-expanded') == "true"){
                                    $('#nav').find('li').removeClass('show');
                                    $(this).attr('aria-expanded', false);
                                    $(this).next().removeClass('show');
                                }else{
                                    $('#nav').find('li').addClass('show');
                                    $(this).attr('aria-expanded', true);
                                    $(this).next().addClass('show');
                                }
                            });

                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        var fileType = input.files[0]["type"];
                                        if ($.inArray(fileType, ValidImageTypes) < 0) {
                                            $('#actaDeNacimiento').attr('src', '{{asset('img/documento.jpg')}}');
                                        }else{
                                            $('#actaDeNacimiento').attr('src', e.target.result);
                                        }
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#certificadoDePrepa').show(150);
                                    $('#actaDeNacimiento').show(150);
                                    $('#imagenDePerfil').show(150);
                                }
                            }

                            function readURL2(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        var fileType = input.files[0]["type"];
                                        if ($.inArray(fileType, ValidImageTypes) < 0) {
                                            $('#certificadoDePrepa').attr('src', '{{asset('img/documento.jpg')}}');
                                        }else{
                                            $('#certificadoDePrepa').attr('src', e.target.result);
                                        }
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#certificadoDePrepa').show(150);
                                    $('#actaDeNacimiento').show(150);
                                    $('#imagenDePerfil').show(150);
                                }
                            }

                            function readURL3(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        var fileType = input.files[0]["type"];
                                        if ($.inArray(fileType, ValidImageTypes) < 0) {
                                            $('#imagenDePerfil').attr('src', '{{asset('img/documento.jpg')}}');
                                        }else{
                                            $('#imagenDePerfil').attr('src', e.target.result);
                                        }
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#certificadoDePrepa').show(150);
                                    $('#actaDeNacimiento').show(150);
                                    $('#imagenDePerfil').show(150);
                                }
                            }

                            $(document).ready(function () {
                                $('#actaDeNacimiento').hide();
                                $('#certificadoDePrepa').hide();
                                $('#imagenDePerfil').hide();

                                $('#uploadForm').submit(function( event ) {
                                    event.preventDefault();
                                    $('#loading').attr('src', '{{URL::asset("img/loading.gif")}}');
                                    this.submit();
                                });


                                @if (isset($acta))
                                    var isSetActa = true;

                                    $('#certificadoDePrepa').show();
                                    $('#actaDeNacimiento').show();
                                    $('#imagenDePerfil').show();
                                @else
                                    var isSetActa = false;
                                @endif

                                @if (isset($prepa))
                                    var isSetPrepa = true;

                                    $('#certificadoDePrepa').show();
                                    $('#actaDeNacimiento').show();
                                    $('#imagenDePerfil').show();
                                @else
                                    var isSetPrepa = false;
                                @endif

                                @if (isset($image))
                                    var isSetImage = true;

                                    $('#certificadoDePrepa').show();
                                    $('#actaDeNacimiento').show();
                                    $('#imagenDePerfil').show();
                                @else
                                    var isSetImage = false;
                                @endif


                                if(isSetActa){
                                    @if(isset($acta->base64))
                                        $('#actaDeNacimiento').attr('src', "{{$acta->base64}}");
                                    @else
                                        $('#actaDeNacimiento').attr('src', "{{asset('img/documento.jpg')}}");
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
                                    @else
                                        $('#certificadoDePrepa').attr('src', "{{asset('img/documento.jpg')}}");
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
                                    @else
                                        $('#imagenDePerfil').attr('src', "{{asset('img/documento.jpg')}}");
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

                                    var startIndex = (this.value.indexOf('\\') >= 0 ? this.value.lastIndexOf('\\') : this.value.lastIndexOf('/'));
                                    var filename = this.value.substring(startIndex);
                                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                                        filename = filename.substring(1);

                                        $('#nameActa').text(filename);
                                    }

                                    readURL(this);
                                };

                                document.getElementById("certificadoDePrepaInput").onchange = function () {
                                    document.getElementById("certificadoDePrepaInputText").value = this.value;

                                    var startIndex = (this.value.indexOf('\\') >= 0 ? this.value.lastIndexOf('\\') : this.value.lastIndexOf('/'));
                                    var filename = this.value.substring(startIndex);
                                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                                        filename = filename.substring(1);

                                        $('#namePrepa').text(filename);
                                    }

                                    readURL2(this);
                                };

                                document.getElementById("imagenDePerfilInput").onchange = function () {
                                    document.getElementById("imagenDePerfilInputText").value = this.value;

                                    var startIndex = (this.value.indexOf('\\') >= 0 ? this.value.lastIndexOf('\\') : this.value.lastIndexOf('/'));
                                    var filename = this.value.substring(startIndex);
                                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                                        filename = filename.substring(1);

                                        $('#nameImage').text(filename);
                                    }

                                    readURL3(this);
                                };
                            });
                        </script>

                        <div class="card-body">
                            <form class="form" role="form" method="POST" action="{{ route('addFiles') }}" accept-charset="UTF-8" enctype="multipart/form-data" id="uploadForm">
                                @csrf
                                <div class="row" style="padding-bottom: 20px">
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <div class="crop">
                                            <img class="archive" id="actaDeNacimiento" src="">
                                        </div>
                                        <label id="nameActa" style="max-width: 50%; padding-top: 10px"></label>
                                        <div style="vertical-align: bottom; padding-top: 10px;">
                                            <img id="stateActa" src="{{URL::asset("img/loading.gif")}}" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="actaDeNacimientoInputText" placeholder="Choose File" hidden disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span style="">Acta de Nacimiento</span>
                                                <input id="actaDeNacimientoInput" name="actaDeNacimiento" type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <div class="crop">
                                            <img class="archive" id="certificadoDePrepa" src="">
                                        </div>
                                        <label id="namePrepa" style="max-width: 50%; padding-top: 10px"></label>
                                        <div style="vertical-align: bottom; padding-top: 10px;">
                                            <img id="statePrepa" src="{{URL::asset("img/loading.gif")}}" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="certificadoDePrepaInputText" placeholder="Choose File" hidden disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span>Certificado de Prepa</span>
                                                <input id="certificadoDePrepaInput" name="certificadoDePrepa" type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <div class="crop" style="width: 100%">
                                            <img class="archive" id="imagenDePerfil" src="">
                                        </div>
                                        <label id="nameImage" style="max-width: 50%; padding-top: 10px"></label>
                                        <div style="vertical-align: bottom; padding-top: 10px;">
                                            <img id="stateImage" src="{{URL::asset("img/loading.gif")}}" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="imagenDePerfilInputText" placeholder="Choose File" hidden disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span style="">Foto de Perfil</span>
                                                <input id="imagenDePerfilInput" type="file" accept="image/*" name="imagenDePerfil" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm form-group" style="text-align: center;">

                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">

                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6" style="text-align: right">
                                        <img id="loading" src="" width="40px" height="40px">
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
