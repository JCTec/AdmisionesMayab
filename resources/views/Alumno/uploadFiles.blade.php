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
                            <form class="form" role="form" method="POST" action="{{ route('postHelper') }}" accept-charset="UTF-8" enctype="multipart/form-data" id="login-nav">
                                <div class="row">
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="actaDeNacimiento" src="{{ URL::asset("img/documento.jpg") }}" width="250px" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">

                                            <input class="archiveLabel" id="actaDeNacimientoInputText" placeholder="Choose File" disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span style="">Acta de Nacimiento</span>
                                                <input id="actaDeNacimientoInput" name="actaDeNacimiento" type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="certificadoDePrepa" src="{{ URL::asset("img/documento.jpg") }}" width="250px" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">

                                            <input class="archiveLabel" id="certificadoDePrepaInputText" placeholder="Choose File" disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span>Certificado de Prepa</span>
                                                <input id="certificadoDePrepaInput" name="certificadoDePrepa" type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="imagenDePerfil" src="{{ URL::asset("img/imagen.jpg") }}" width="350px" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">

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
