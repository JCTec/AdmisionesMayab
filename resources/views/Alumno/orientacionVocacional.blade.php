@extends('layouts.napp')

@section('content')
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Cuestionario de Orientación Vocacional
                        </div>
                        <script>
                            $(document).ready(function () {

                                var conQuienVives = parseInt("{{$ov->conQuienVives}}");
                                var quienPagaTusEstudios = parseInt("{{$ov->quienPagaTusEstudios}}");
                                var situacionPadres = "{{$ov->situacionPadres}}";

                                if(conQuienVives){
                                    $("#conQuienVives").val(conQuienVives);
                                }

                                if(quienPagaTusEstudios){
                                    $("#quienPagaTusEstudios").val(quienPagaTusEstudios);
                                }

                                if(situacionPadres){
                                    $("#situacionPadres").val(situacionPadres);
                                }

                                var estudioEnExtranjero = parseInt("{{$ov->estudioEnExtranjero}}");
                                var examenesExtraordinarios = parseInt("{{$ov->examenesExtraordinarios}}");
                                var reprobarSemestre = parseInt("{{$ov->reprobarSemestre}}");
                                var universidadPrevia = parseInt("{{$ov->universidadPrevia}}");

                                if(estudioEnExtranjero == 1){
                                    var $radios = $('input:radio[name=estudioEnExtranjero]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (estudioEnExtranjero == 0){
                                    var $radios = $('input:radio[name=estudioEnExtranjero]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    var $radios = $('input:radio[name=estudioEnExtranjero]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(examenesExtraordinarios == 1){
                                    var $radios = $('input:radio[name=examenesExtraordinarios]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (examenesExtraordinarios == 0){
                                    var $radios = $('input:radio[name=examenesExtraordinarios]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    var $radios = $('input:radio[name=examenesExtraordinarios]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(reprobarSemestre == 1){
                                    var $radios = $('input:radio[name=reprobarSemestre]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (reprobarSemestre == 0){
                                    var $radios = $('input:radio[name=reprobarSemestre]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    var $radios = $('input:radio[name=reprobarSemestre]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(universidadPrevia == 1){
                                    var $radios = $('input:radio[name=universidadPrevia]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (universidadPrevia == 0){
                                    var $radios = $('input:radio[name=universidadPrevia]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    var $radios = $('input:radio[name=universidadPrevia]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }


                                $('#removeP').hide();
                                $('#removeS').hide();
                                $('#removePrepa').hide();

                                var sectionsCount = 1;
                                var primariaCount = 1;
                                var secundariaCount = 1;
                                var prepaCount = 1;

                                var template = $('#brotherTemplate').clone();
                                var primaria = $('#primariaTemplate').clone();
                                var secundaria = $('#secundariaTemplate').clone();
                                var prepa = $('#prepaTemplate').clone();

                                $('#brotherSecction').children().last().remove();

                                var section = template.clone();

                                section.find('#Brother-nombre').attr('id', 'Brother-' + sectionsCount + '[nombre]').attr('name', 'Brother-' + sectionsCount + '[nombre]');
                                section.find('#Brother-sex').attr('id', 'Brother-' + sectionsCount + '[sex]').attr('name', 'Brother-' + sectionsCount + '[sex]');
                                section.find('#Brother-edad').attr('id', 'Brother-' + sectionsCount + '[edad]').attr('name', 'Brother-' + sectionsCount + '[edad]');
                                section.find('#Brother-trabajoEstudio').attr('id', 'Brother-' + sectionsCount + '[trabajoEstudio]').attr('name', 'Brother-' + sectionsCount + '[trabajoEstudio]');

                                section.appendTo('#brotherSecction');

                                $('#primariaSecction').children().last().remove();

                                var section = primaria.clone();

                                section.find('#primaria-nombre').attr('id', 'Primaria-' + primariaCount + '[nombre]').attr('name', 'Primaria-' + primariaCount + '[nombre]');
                                section.find('#primaria-ciudad').attr('id', 'Primaria-' + primariaCount + '[ciudad]').attr('name', 'Primaria-' + primariaCount + '[ciudad]');
                                section.find('#primaria-promedioGeneral').attr('id', 'Primaria-' + primariaCount + '[promedioGeneral]').attr('name', 'Primaria-' + primariaCount + '[promedioGeneral]');

                                section.appendTo('#primariaSecction');

                                $('#secundariaSecction').children().last().remove();

                                var section = secundaria.clone();

                                section.find('#secundaria-nombre').attr('id', 'Secundaria-' + secundariaCount + '[nombre]').attr('name', 'Secundaria-' + secundariaCount + '[nombre]');
                                section.find('#secundaria-ciudad').attr('id', 'Secundaria-' + secundariaCount + '[ciudad]').attr('name', 'Secundaria-' + secundariaCount + '[ciudad]');
                                section.find('#secundaria-promedioGeneral').attr('id', 'Secundaria-' + secundariaCount + '[promedioGeneral]').attr('name', 'Secundaria-' + secundariaCount + '[promedioGeneral]');

                                section.appendTo('#secundariaSecction');

                                $('#prepaSecction').children().last().remove();

                                var section = prepa.clone();

                                section.find('#prepa-nombre').attr('id', 'Preparatoria-' + prepaCount + '[nombre]').attr('name', 'Preparatoria-' + prepaCount + '[nombre]');
                                section.find('#prepa-ciudad').attr('id', 'Preparatoria-' + prepaCount + '[ciudad]').attr('name', 'Preparatoria-' + prepaCount + '[ciudad]');
                                section.find('#prepa-promedioGeneral').attr('id', 'Preparatoria-' + prepaCount + '[promedioGeneral]').attr('name', 'Preparatoria-' + prepaCount + '[promedioGeneral]');

                                section.appendTo('#prepaSecction');



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

                                    section.find('#Brother-nombre').attr('id', 'Brother-' + sectionsCount + '[nombre]').attr('name','Brother-' + sectionsCount + '[nombre]');
                                    section.find('#Brother-sex').attr('id', 'Brother-' + sectionsCount + '[sex]').attr('name', 'Brother-' + sectionsCount + '[sex]');
                                    section.find('#Brother-edad').attr('id', 'Brother-' + sectionsCount + '[edad]').attr('name', 'Brother-' + sectionsCount + '[edad]');
                                    section.find('#Brother-trabajoEstudio').attr('id', 'Brother-' + sectionsCount + '[trabajoEstudio]').attr('name', 'Brother-' + sectionsCount + '[trabajoEstudio]');


                                    section.appendTo('#brotherSecction');

                                    $('#removeB').show(200);

                                });

                                $('#duplicateP').on('click', function (e) {
                                    e.preventDefault();

                                    primariaCount += 1;

                                    var section = primaria.clone();

                                    section.find('#primaria-nombre').attr('id', 'Primaria-' + primariaCount + '[nombre]').attr('name', 'Primaria-' + primariaCount + '[nombre]');
                                    section.find('#primaria-ciudad').attr('id', 'Primaria-' + primariaCount + '[ciudad]').attr('name', 'Primaria-' + primariaCount + '[ciudad]');
                                    section.find('#primaria-promedioGeneral').attr('id', 'Primaria-' + primariaCount + '[promedioGeneral]').attr('name', 'Primaria-' + primariaCount + '[promedioGeneral]');

                                    section.appendTo('#primariaSecction');

                                    $('#removeP').show(200);

                                });

                                $('#duplicateS').on('click', function (e) {
                                    e.preventDefault();

                                    secundariaCount += 1;

                                    var section = secundaria.clone();

                                    section.find('#secundaria-nombre').attr('id', 'Secundaria-' + secundariaCount + '[nombre]').attr('name', 'Secundaria-' + secundariaCount + '[nombre]');
                                    section.find('#secundaria-ciudad').attr('id', 'Secundaria-' + secundariaCount + '[ciudad]').attr('name', 'Secundaria-' + secundariaCount + '[ciudad]');
                                    section.find('#secundaria-promedioGeneral').attr('id', 'Secundaria-' + secundariaCount + '[promedioGeneral]').attr('name', 'Secundaria-' + secundariaCount + '[promedioGeneral]');

                                    section.appendTo('#secundariaSecction');

                                    $('#removeS').show(200);


                                });

                                $('#duplicatePrepa').on('click', function (e) {
                                    e.preventDefault();

                                    prepaCount += 1;

                                    var section = prepa.clone();

                                    section.find('#prepa-nombre').attr('id', 'Preparatoria-' + prepaCount + '[nombre]').attr('name', 'Preparatoria-' + prepaCount + '[nombre]');
                                    section.find('#prepa-ciudad').attr('id', 'Preparatoria-' + prepaCount + '[ciudad]').attr('name', 'Preparatoria-' + prepaCount + '[ciudad]');
                                    section.find('#prepa-promedioGeneral').attr('id', 'Preparatoria-' + prepaCount + '[promedioGeneral]').attr('name', 'Preparatoria-' + prepaCount + '[promedioGeneral]');

                                    section.appendTo('#prepaSecction');

                                    $('#removePrepa').show(200);

                                });

                                $('#removeB').on('click', function (e) {
                                    e.preventDefault();

                                    if(sectionsCount > 0){
                                        sectionsCount -= 1;

                                        $('#brotherSecction').children().last().remove();
                                    }

                                    if(sectionsCount == 0){
                                        $('#removeB').hide(200);
                                    }

                                });

                                $('#removeP').on('click', function (e) {
                                    e.preventDefault();

                                    if(primariaCount > 1){
                                        primariaCount -= 1;

                                        $('#primariaSecction').children().last().remove();
                                    }

                                    if(primariaCount == 1){
                                        $('#removeP').hide(200);
                                    }

                                });

                                $('#removeS').on('click', function (e) {
                                    e.preventDefault();

                                    if(secundariaCount > 1){
                                        secundariaCount -= 1;

                                        $('#secundariaSecction').children().last().remove();
                                    }

                                    if(secundariaCount == 1){
                                        $('#removeS').hide(200);
                                    }

                                });

                                $('#removePrepa').on('click', function (e) {
                                    e.preventDefault();

                                    if(prepaCount > 1){
                                        prepaCount -= 1;

                                        $('#prepaSecction').children().last().remove();
                                    }

                                    if(prepaCount == 1){
                                        $('#removePrepa').hide(200);
                                    }

                                });

                            });
                        </script>

                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('user.createOV') }}" accept-charset="UTF-8" id="login-nav">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel ">¿Con Quién Vives?:</label>
                                        <select id='conQuienVives' name='conQuienVives' class="form-control" required>
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
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel ">¿Quién paga tus estudios?:</label>
                                        <select id='quienPagaTusEstudios' name='quienPagaTusEstudios' class="form-control" required>
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

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Tus padres estan?</label>
                                        <select name="situacionPadres" id="situacionPadres" class="form-control" required>
                                            <option value="Casados">Casados</option>
                                            <option value="Separados">Separados</option>
                                            <option value="Divorciados">Divorciados</option>
                                            <option value="Viudo(a)">Viudo(a)</option>
                                            <option value="">Otro</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="brotherSecction">
                                    <div id="brotherTemplate" class="row">
                                        <div id="main" class="col-md-12 form-group form-inline">
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

                                <div class="row">
                                    <div class="col-md-6" style="text-align: left">
                                        <button id="removeB" class="btn btn-outline-primary">Quitar Hermano</button>
                                    </div>
                                    <div class="col-md-6" style="text-align: right">
                                        <button id="duplicateB" class="btn btn-outline-primary">Agregar Hermano</button>
                                    </div>
                                </div>

                                <div id="primariaSecction">
                                    <div id="primariaTemplate" class="row">
                                        <div id="main" class="form-group col-md-12 form-inline">
                                            <label id="primaria" class="formLabel">Primaria:</label>
                                            <input name="primaria-nombre" id="primaria-nombre" class="form-control" placeholder="Nombre"  type="text" required>
                                            <input name="primaria-ciudad" id="primaria-ciudad" class="form-control" placeholder="Ciudad" type="text" required>
                                            <input name="primaria-promedioGeneral" id="primaria-promedioGeneral" class="form-control" placeholder="Promedio, Ejemplo 85" type="text" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6" style="text-align: left">
                                        <button id="removeP" class="btn btn-outline-primary">Quitar Primaria</button>
                                    </div>
                                    <div class="col-md-6" style="text-align: right">
                                        <button id="duplicateP" class="btn btn-outline-primary">Agregar Primaria</button>
                                    </div>
                                </div>

                                <div id="secundariaSecction">
                                    <div id="secundariaTemplate" class="row">
                                        <div id="main" class="form-group col-md-12 form-inline">
                                            <label id="secundaria" class="formLabel">Secundaria:</label>
                                            <input name="secundaria-nombre" id="secundaria-nombre" class="form-control" placeholder="Nombre"  type="text" required>
                                            <input name="secundaria-ciudad" id="secundaria-ciudad" class="form-control" placeholder="Ciudad" type="text" required>
                                            <input name="secundaria-promedioGeneral" id="secundaria-promedioGeneral" class="form-control" placeholder="Promedio, Ejemplo 85" type="text" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6" style="text-align: left">
                                        <button id="removeS" class="btn btn-outline-primary">Quitar Secundaria</button>
                                    </div>
                                    <div class="col-md-6" style="text-align: right">
                                        <button id="duplicateS" class="btn btn-outline-primary">Agregar Secundaria</button>
                                    </div>
                                </div>

                                <div id="prepaSecction">
                                    <div id="prepaTemplate" class="row">
                                        <div id="main" class="form-group col-md-12 form-inline">
                                            <label id="prepa" class="formLabel">Bachillerato:</label>
                                            <input name="prepa-nombre" id="prepa-nombre" class="form-control" placeholder="Nombre"  type="text" required>
                                            <input name="prepa-ciudad" id="prepa-ciudad" class="form-control" placeholder="Ciudad" type="text" required>
                                            <input name="prepa-promedioGeneral" id="prepa-promedioGeneral" class="form-control" placeholder="Promedio, Ejemplo 85" type="text" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6" style="text-align: left">
                                        <button id="removePrepa" class="btn btn-outline-primary">Quitar Bachillerato</button>
                                    </div>
                                    <div class="col-md-6" style="text-align: right">
                                        <button id="duplicatePrepa" class="btn btn-outline-primary">Agregar Bachillerato</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="formLabel">¿Qué área cursas o cursaste en el último año de bachillerato?</label>
                                        <input type="text" id="areaBachillerato" name="areaBachillerato" class="form-control" required value="{{$ov->areaBachillerato}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-5">
                                        <label class="formLabel">¿Has estudiado en el extranjero?</label>
                                        <input type="radio" id="estudioEnExtranjero" name="estudioEnExtranjero" value=1> Sí
                                        <input type="radio" id="estudioEnExtranjero" name="estudioEnExtranjero" value=0> No
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label class="formLabel">¿En dónde y por cuánto tiempo?</label>
                                        <input type="text" id="lugarEstudioExtranjero" name="lugarEstudioExtranjero" class="form-control" required value="{{$ov->lugarEstudioExtranjero}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="formLabel">¿En qué materias has obtenido las calificaciones más altas?</label>
                                        <input type="text" id="mejorMateria" name="mejorMateria" class="form-control" required  value="{{$ov->mejorMateria}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="formLabel">¿En qué materias has obtenido las calificaciones más bajas?</label>
                                        <input type="text" id="peorMateria" name="peorMateria" class="form-control" required  value="{{$ov->peorMateria}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="formLabel">¿Qué materias te gustan más?</label>
                                        <input type="text" id="materiaFavorita" name="materiaFavorita" class="form-control" required value="{{$ov->materiaFavorita}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="formLabel">¿Qué materias te gustan menos?</label>
                                        <input type="text" id="materiaDisgusto" name="materiaDisgusto" class="form-control" required value="{{$ov->materiaDisgusto}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="formLabel">¿Has presentado exámenes extraordinarios?</label>
                                        <input type="radio" id="examenesExtraordinarios" name="examenesExtraordinarios" value=1> Sí
                                        <input type="radio" id="examenesExtraordinarios" name="examenesExtraordinarios" value=0> No
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="cualExamenExtraordinario" name="cualExamenExtraordinario" class="form-control" required value="{{$ov->cualExamenExtraordinario}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="formLabel">¿Por qué?</label>
                                        <input type="text" id="razonExamenExtraordinario" name="razonExamenExtraordinario" class="form-control" required value="{{$ov->razonExamenExtraordinario}}">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-md-5">
                                        <label class="formLabel">¿Has reprobado algún año o semestre?</label>
                                        <input type="radio" id="reprobarSemestre" name="reprobarSemestre" value=1> Sí
                                        <input type="radio" id="reprobarSemestre" name="reprobarSemestre" value=0> No
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="cualReprobarSemestre" name="cualReprobarSemestre" class="form-control" required value="{{$ov->cualReprobarSemestre}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="formLabel">¿Por qué?</label>
                                        <input type="text" id="razonReprobarSemestre" name="razonReprobarSemestre" class="form-control" required value="{{$ov->razonReprobarSemestre}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="formLabel">¿Has estado inscrito en alguna universidad?</label>
                                        <input type="radio" id="universidadPrevia" name="universidadPrevia" value=1> Sí
                                        <input type="radio" id="universidadPrevia" name="universidadPrevia" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="formLabel">¿Por qué la reprobastes o dejastes?</label>
                                        <input type="text" id="razonUniversidadPrevia" name="razonUniversidadPrevia" class="form-control" required value="{{$ov->razonUniversidadPrevia}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12" style="text-align: right">
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
