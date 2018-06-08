@extends('layouts.napp')

@section('content')
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Datos de la Madre
                        </div>
                        <script>
                            $(document).ready(function () {

                                var sectionsCount = 1;
                                var primariaCount = 1;
                                var secundariaCount = 1;
                                var prepaCount = 1;

                                var template = $('#brotherTemplate').clone();
                                var primaria = $('#primariaTemplate').clone();
                                var secundaria = $('#secundariaTemplate').clone();
                                var prepa = $('#prepaTemplate').clone();

                                $('#back').on('click', function (e) {
                                    e.preventDefault();
                                    window.location = "{{route('back')}}";
                                });

                                $('#saveASD').on('click', function (e) {
                                    e.preventDefault();
                                    if($('#finalEmail').val() == $('#finalEmail2').val()){
                                        $('#saveB').click();
                                    }
                                });

                                $('#duplicateB').on('click', function (e) {
                                    e.preventDefault();

                                    sectionsCount += 1;

                                    var section = template.clone();

                                    section.find('#Brother-nombre').attr('id', 'Brother-nombre-' + sectionsCount).attr('name', 'Brother-nombre-' + sectionsCount);
                                    section.find('#Brother-sex').attr('id', 'Brother-sex-' + sectionsCount).attr('name', 'Brother-sex-' + sectionsCount);
                                    section.find('#Brother-edad').attr('id', 'Brother-edad-' + sectionsCount).attr('name', 'Brother-edad-' + sectionsCount);
                                    section.find('#Brother-trabajoEstudio').attr('id', 'Brother-trabajoEstudio-' + sectionsCount).attr('name', 'Brother-trabajoEstudio-' + sectionsCount);


                                    section.appendTo('#brotherSecction');

                                });

                                $('#duplicateP').on('click', function (e) {
                                    e.preventDefault();

                                    primariaCount += 1;

                                    var section = primaria.clone();

                                    section.find('#primaria-nombre').attr('id', 'primaria-nombre-' + primariaCount).attr('name', 'primaria-nombre-' + primariaCount);
                                    section.find('#primaria-ciudad').attr('id', 'primaria-ciudad-' + primariaCount).attr('name', 'primaria-ciudad-' + primariaCount);
                                    section.find('#primaria-promedioGeneral').attr('id', 'primaria-promedioGeneral-' + primariaCount).attr('name', 'primaria-promedioGeneral-' + primariaCount);

                                    section.appendTo('#primariaSecction');

                                });

                                $('#duplicateS').on('click', function (e) {
                                    e.preventDefault();

                                    sectionsCount += 1;

                                    var section = secundaria.clone();

                                    section.find('#secundaria-nombre').attr('id', 'secundaria-nombre-' + secundariaCount).attr('name', 'secundaria-nombre-' + secundariaCount);
                                    section.find('#secundaria-ciudad').attr('id', 'secundaria-ciudad-' + secundariaCount).attr('name', 'secundaria-ciudad-' + secundariaCount);
                                    section.find('#secundaria-promedioGeneral').attr('id', 'secundaria-promedioGeneral-' + secundariaCount).attr('name', 'secundaria-promedioGeneral-' + secundariaCount);

                                    section.appendTo('#secundariaSecction');

                                });

                                $('#duplicatePrepa').on('click', function (e) {
                                    e.preventDefault();

                                    sectionsCount += 1;

                                    var section = prepa.clone();

                                    section.find('#prepa-nombre').attr('id', 'prepa-nombre-' + primariaCount).attr('name', 'prepa-nombre-' + primariaCount);
                                    section.find('#prepa-ciudad').attr('id', 'prepa-ciudad-' + prepaCount).attr('name', 'prepa-ciudad-' + prepaCount);
                                    section.find('#prepa-promedioGeneral').attr('id', 'prepa-promedioGeneral-' + prepaCount).attr('name', 'prepa-promedioGeneral-' + prepaCount);

                                    section.appendTo('#prepaSecction');

                                });
                            });
                        </script>

                        <form class="form-inline" role="form" method="POST" action="{{ route('postHelper') }}" accept-charset="UTF-8" id="login-nav">
                            @csrf

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-6">
                                    <label class="formLabel ">¿Con Quién Vives?:</label>
                                    <select id='conQuienVives' name='conQuienVives' style="width: 65%" class="form-control" required>
                                        @if($tutor)
                                            <option value='1'>{{$padre->titulo}} {{$padre->firstName}}</option>
                                            <option value='2'>{{$madre->titulo}} {{$madre->firstName}}</option>
                                            <option value='3' selected="selected">{{$tutor->titulo}} {{$tutor->firstName}}</option>
                                        @else
                                            @if($alumno->tutor == 1)
                                                <option value='1' selected="selected">{{$padre->titulo}} {{$padre->firstName}}</option>
                                                <option value='2'>{{$madre->titulo}} {{$madre->firstName}}</option>
                                            @else
                                                <option value='1'>{{$padre->titulo}} {{$padre->firstName}}</option>
                                                <option value='2' selected="selected">{{$madre->titulo}} {{$madre->firstName}}</option>
                                            @endif
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="formLabel ">¿Quién paga tus estudios?:</label>
                                    <select id='conQuienVives' name='conQuienVives' style="width:55%" class="form-control" required>
                                        @if($tutor)
                                            <option value='1'>{{$padre->titulo}} {{$padre->firstName}}</option>
                                            <option value='2'>{{$madre->titulo}} {{$madre->firstName}}</option>
                                            <option value='3' selected="selected">{{$tutor->titulo}} {{$tutor->firstName}}</option>
                                        @else
                                            @if($alumno->tutor == 1)
                                                <option value='1' selected="selected">{{$padre->titulo}} {{$padre->firstName}}</option>
                                                <option value='2'>{{$madre->titulo}} {{$madre->firstName}}</option>
                                            @else
                                                <option value='1'>{{$padre->titulo}} {{$padre->firstName}}</option>
                                                <option value='2' selected="selected">{{$madre->titulo}} {{$madre->firstName}}</option>
                                            @endif
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Tus padres estan?</label>
                                    <select name="situacionPadres" id="situacionPadres" class="form-control" style="width:83%" required>
                                        <option value="Casados">Casados</option>
                                        <option value="Separados">Separados</option>
                                        <option value="Divorciados">Divorciados</option>
                                        <option value="Viudo(a)">Viudo(a)</option>
                                        <option value="">Otro</option>
                                    </select>
                                </div>
                            </div>

                            <div id="brotherSecction">
                                <div id="brotherTemplate" class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px; width: 100%;">
                                    <div id="main" class="col-md-12">
                                        <label id="hermano" class="formLabel">Hermano:</label>
                                        <input name="Brother-nombre" id="Brother-nombre" class="form-control" placeholder="Nombre"  type="text" required>
                                        <select name="Brother-sex" id="Brother-sex" class="form-control" required>
                                            <option value="m">Masculino</option>
                                            <option value="f">Femenino</option>
                                        </select>
                                        <input name="Brother-edad" id="Brother-edad" class="form-control" placeholder="Edad" type="text" required>
                                        <input name="Brother-trabajoEstudio" id="Brother-trabajoEstudio" class="form-control" placeholder="Lugar donde trabaja o estudia" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px;">
                                <div id="container">
                                    <div id="left"></div>
                                    <div id="middle"></div>
                                    <div id="right" style="text-align: right; padding-right: 35px; padding-bottom: 30px; padding-top: 10px">
                                        <button id="duplicateB" class="btn btn-outline-primary">Agregar Hermano</button>
                                    </div>
                                </div>
                            </div>

                            <div id="primariaSecction">
                                <div id="primariaTemplate" class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                    <div id="main" class="col-md-12">
                                        <label id="primaria" class="formLabel">Primaria:</label>
                                        <input type="hidden" name="grado" value=1>
                                        <input name="primaria-nombre" id="primaria-nombre" class="form-control" placeholder="Nombre"  type="text" required>
                                        <input name="primaria-ciudad" id="primaria-ciudad" class="form-control" placeholder="Ciudad" type="text" required>
                                        <input name="primaria-promedioGeneral" id="primaria-promedioGeneral" class="form-control" placeholder="Promedio, Ejemplo 85" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div id="container">
                                    <div id="left"></div>
                                    <div id="middle"></div>
                                    <div id="right" style="text-align: right; padding-right: 35px; padding-bottom: 30px; padding-top: 10px">
                                        <button id="duplicateP" class="btn btn-outline-primary">Agregar Primaria</button>
                                    </div>
                                </div>
                            </div>

                            <div id="secundariaSecction">
                                <div id="secundariaTemplate" class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                    <div id="main" class="col-md-12">
                                        <label id="secundaria" class="formLabel">Secundaria:</label>
                                        <input type="hidden" name="grado" value=2>
                                        <input name="secundaria-nombre" id="secundaria-nombre" class="form-control" placeholder="Nombre"  type="text" required>
                                        <input name="secundaria-ciudad" id="secundaria-ciudad" class="form-control" placeholder="Ciudad" type="text" required>
                                        <input name="secundaria-promedioGeneral" id="secundaria-promedioGeneral" class="form-control" placeholder="Promedio, Ejemplo 85" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div id="container">
                                    <div id="left"></div>
                                    <div id="middle"></div>
                                    <div id="right" style="text-align: right; padding-right: 35px; padding-bottom: 30px; padding-top: 10px">
                                        <button id="duplicateS" class="btn btn-outline-primary">Agregar Secundaria</button>
                                    </div>
                                </div>
                            </div>

                            <div id="prepaSecction">
                                <div id="prepaTemplate" class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                    <div id="main" class="col-md-12">
                                        <label id="prepa" class="formLabel">Bachillerato:</label>
                                        <input type="hidden" name="grado" value=3>
                                        <input name="prepa-nombre" id="prepa-nombre" class="form-control" placeholder="Nombre"  type="text" required>
                                        <input name="prepa-ciudad" id="prepa-ciudad" class="form-control" placeholder="Ciudad" type="text" required>
                                        <input name="prepa-promedioGeneral" id="prepa-promedioGeneral" class="form-control" placeholder="Promedio, Ejemplo 85" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div id="container">
                                    <div id="left"></div>
                                    <div id="middle"></div>
                                    <div id="right" style="text-align: right; padding-right: 35px; padding-bottom: 30px; padding-top: 10px">
                                        <button id="duplicatePrepa" class="btn btn-outline-primary">Agregar Bachillerato</button>
                                    </div>
                                </div>
                            </div>

                            <div id="container">
                                <div id="left"></div>
                                <div id="middle"></div>
                                <div id="right" style="text-align: right; padding-right: 35px; padding-bottom: 30px; padding-top: 10px">
                                    <button id="saveASD" class="btn btn-outline-primary">Guardar</button>
                                </div>
                            </div>

                            <button id="saveB" type="submit" class="form-check " hidden="hidden"> Guardar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
