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

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Qué área cursas o cursaste en el último año de bachillerato?</label>
                                    <input type="text" id="AreaBachillerato" name="AreaBachillerato" style="width: 55%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-5">
                                    <label class="formLabel">¿Has estudiado en el extranjero?</label>
                                    <input type="checkbox" id="EstudioEnExtranjero" name="EstudioEnExtranjero" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="EstudioEnExtranjero" name="EstudioEnExtranjero" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                                <div class="col-md-7">
                                    <label class="formLabel">¿En dónde y por cuánto tiempo?</label>
                                    <input type="text" id="LugarEstudioExtranjero" name="LugarEstudioExtranjero" style="width: 54%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿En qué materias has obtenido las calificaciones más altas?</label>
                                    <input type="text" id="MejorMateria" name="MejorMateria" style="width: 56%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿En qué materias has obtenido las calificaciones más bajas?</label>
                                    <input type="text" id="PeorMateria" name="PeorMateria" style="width: 56%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-6">
                                    <label class="formLabel">¿Qué materias te gustan más?</label>
                                    <input type="text" id="MateriaFavorita" name="MateriaFavorita" style="width: 46%" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="formLabel">¿Qué materias te gustan menos?</label>
                                    <input type="text" id="MateriaDisgusto" name="MateriaDisgusto" style="width: 46%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-6">
                                    <label class="formLabel">¿Has presentado exámenes extraordinarios?</label>
                                    <input type="checkbox" id="ExamenesExtraordinarios" name="ExamenesExtraordinarios" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="ExamenesExtraordinarios" name="ExamenesExtraordinarios" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                                <div class="col-md-6">
                                    <label class="formLabel">¿Cuál(es)?</label>
                                    <input type="text" id="CualExamenExtraordinario" name="CualExamenExtraordinario" style="width: 76%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Por qué?</label>
                                    <input type="text" id="RazonExamenExtraordinario" name="RazonExamenExtraordinario" style="width: 89%" class="form-control" required>
                                </div>
                            </div>


                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-5">
                                    <label class="formLabel">¿Has reprobado algún año o semestre?</label>
                                    <input type="checkbox" id="ReprobarSemestre" name="ReprobarSemestre" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="ReprobarSemestre" name="ReprobarSemestre" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                                <div class="col-md-7">
                                    <label class="formLabel">¿Cuál(es)?</label>
                                    <input type="text" id="CualReprobarSemestre" name="CualReprobarSemestre" style="width: 80%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Por qué?</label>
                                    <input type="text" id="RazonReprobarSemestre" name="RazonReprobarSemestre" style="width: 89%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-6">
                                    <label class="formLabel">¿Has estado inscrito en alguna universidad?</label>
                                    <input type="checkbox" id="UniversidadPrevia" name="UniversidadPrevia" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="UniversidadPrevia" name="UniversidadPrevia" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Por qué la reprobastes o dejastes?</label>
                                    <input type="text" id="RazonUniversidadPrevia" name="RazonUniversidadPrevia" style="width: 73%" class="form-control" required>
                                </div>
                            </div>

                            <!--<div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-5">
                                    <label class="formLabel">¿Has tenido algún trabajo?</label>
                                    <input type="checkbox" id="TrabajoPrevio" name="TrabajoPrevio" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="TrabajoPrevio" name="TrabajoPrevio" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                                <div class="col-md-7">
                                    <label class="formLabel">¿Qué puesto desempeñaste?</label>
                                    <input type="text" id="PuestoTrabajoPrevio" name="PuestoTrabajoPrevio" style="width: 60%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-8">
                                    <label class="formLabel">¿Sientes que tu experiencia de trabajo te ayudó a elegir tu carrera?</label>
                                    <input type="checkbox" id="ExperienciaLaboralElegirCarrera" name="ExperienciaLaboralElegirCarrera" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="ExperienciaLaboralElegirCarrera" name="ExperienciaLaboralElegirCarrera" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Por qué?</label>
                                    <input type="text" id="RazonExperienciaLaboralElegirCarrera" name="RazonExperienciaLaboralElegirCarrera" style="width: 89%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-5">
                                    <label class="formLabel">¿Actualmente trabajas?</label>
                                    <input type="checkbox" id="TrabajoActual" name="TrabajoActual" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="TrabajoActual" name="TrabajoActual" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                                <div class="col-md-7">
                                    <label class="formLabel">¿Por qué motivo?</label>
                                    <input type="text" id="RazonTrabajoActual" name="RazonTrabajoActual" style="width: 72%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">Nombre de la organización o empresa:</label>
                                    <input type="text" id="EmpresaTrabajoActual" name="EmpresaTrabajoActual" style="width: 70%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px; width: 100%;">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Cuánto tiempo tienes trabajando ahí?</label>
                                    <input name="AñosTrabajoActual" id="AñosTrabajoActual" class="form-control" placeholder="Años"  type="text" required>
                                    <input name="MesesTrabajoActual" id="MesesTrabajoActual" class="form-control" placeholder="Meses"  type="text" required>
                                    <input name="HorarioTrabajoActual" id="HorarioTrabajoActual" style="width: 35%" class="form-control" placeholder="Horarios de Trabajo" type="text" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-6">
                                    <div class="h5 text-center">
                                        Dominio del idioma inglés
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="formLabel">Lee:</label>
                                            <input type="checkbox" id="LeerIngles" name="LeerIngles"  class="form-control checkbox-inline"> Básico
                                            <input type="checkbox" id="LeerIngles" name="LeerIngles"  class="form-control checkbox-inline"> Regular
                                            <input type="checkbox" id="LeerIngles" name="LeerIngles"  class="form-control checkbox-inline"> Avanzado
                                        </div>
                                        <div class="col-md-12">
                                            <label class="formLabel">Traduce:</label>
                                            <input type="checkbox" id="TraduceIngles" name="TraduceIngles"  class="form-control checkbox-inline"> Básico
                                            <input type="checkbox" id="TraduceIngles" name="TraduceIngles"  class="form-control checkbox-inline"> Regular
                                            <input type="checkbox" id="TraduceIngles" name="TraduceIngles"  class="form-control checkbox-inline"> Avanzado
                                        </div>
                                        <div class="col-md-12">
                                            <label class="formLabel">Habla:</label>
                                            <input type="checkbox" id="HablaIngles" name="HablaIngles"  class="form-control checkbox-inline"> Básico
                                            <input type="checkbox" id="HablaIngles" name="HablaIngles"  class="form-control checkbox-inline"> Regular
                                            <input type="checkbox" id="HablaIngles" name="HablaIngles"  class="form-control checkbox-inline"> Avanzado
                                        </div>
                                        <div class="col-md-12">
                                            <label class="formLabel">Escribe:</label>
                                            <input type="checkbox" id="EscribeIngles" name="EscribeIngles"  class="form-control checkbox-inline"> Básico
                                            <input type="checkbox" id="EscribeIngles" name="EscribeIngles"  class="form-control checkbox-inline"> Regular
                                            <input type="checkbox" id="EscribeIngles" name="EscribeIngles"  class="form-control checkbox-inline"> Avanzado
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="h5 text-center">
                                        Dominio de otro idioma(s)
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="formLabel">Lee:</label>
                                            <input type="checkbox" id="LeerOtroIdioma" name="LeerOtroIdioma"  class="form-control checkbox-inline"> Básico
                                            <input type="checkbox" id="LeerOtroIdioma" name="LeerOtroIdioma"  class="form-control checkbox-inline"> Regular
                                            <input type="checkbox" id="LeerOtroIdioma" name="LeerOtroIdioma"  class="form-control checkbox-inline"> Avanzado
                                        </div>
                                        <div class="col-md-12">
                                            <label class="formLabel">Traduce:</label>
                                            <input type="checkbox" id="TraduceOtroIdioma" name="TraduceOtroIdioma"  class="form-control checkbox-inline"> Básico
                                            <input type="checkbox" id="TraduceOtroIdioma" name="TraduceOtroIdioma"  class="form-control checkbox-inline"> Regular
                                            <input type="checkbox" id="TraduceOtroIdioma" name="TraduceOtroIdioma"  class="form-control checkbox-inline"> Avanzado
                                        </div>
                                        <div class="col-md-12">
                                            <label class="formLabel">Habla:</label>
                                            <input type="checkbox" id="HablaOtroIdioma" name="HablaOtroIdioma"  class="form-control checkbox-inline"> Básico
                                            <input type="checkbox" id="HablaOtroIdioma" name="HablaOtroIdioma"  class="form-control checkbox-inline"> Regular
                                            <input type="checkbox" id="HablaOtroIdioma" name="HablaOtroIdioma"  class="form-control checkbox-inline"> Avanzado
                                        </div>
                                        <div class="col-md-12">
                                            <label class="formLabel">Escribe:</label>
                                            <input type="checkbox" id="EscribeOtroIdioma" name="EscribeOtroIdioma"  class="form-control checkbox-inline"> Básico
                                            <input type="checkbox" id="EscribeOtroIdioma" name="EscribeOtroIdioma"  class="form-control checkbox-inline"> Regular
                                            <input type="checkbox" id="EscribeOtroIdioma" name="EscribeOtroIdioma"  class="form-control checkbox-inline"> Avanzado
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-8">
                                    <label class="formLabel">¿Te consideras una persona saludable?</label>
                                    <input type="checkbox" id="ConsiderarSaludable" name="ConsiderarSaludable" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="ConsiderarSaludable" name="ConsiderarSaludable" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Requieres asistencia como uso de rampas y/o elevadores para desplazarte dentro de la Universidad?</label>
                                    <input type="checkbox" id="NecesitaAsistencia" name="NecesitaAsistencia" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="NecesitaAsistencia" name="NecesitaAsistencia" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Qué tipo de asistencia requieres?</label>
                                    <input type="text" id="TipoAsistenciaNecesitada" name="TipoAsistenciaNecesitada" style="width: 72%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Requieres realizar exámenes en alguna modalidad que no sea escrita?</label>
                                    <input type="checkbox" id="NecesitaExamenesNoEscritos" name="NecesitaExamenesNoEscritos" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="NecesitaExamenesNoEscritos" name="NecesitaExamenesNoEscritos" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">Indica qué tipo de modalidad necesitas:</label>
                                    <input type="text" id="TipoDeExamenNecesitado" name="TipoDeExamenNecesitado" style="width: 68%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Tienes algún problema de salud que requiera atención médica continua?</label>
                                    <input type="checkbox" id="ProblemaContinuoSalud" name="ProblemaContinuoSalud" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="ProblemaContinuoSalud" name="ProblemaContinuoSalud" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Cuál?</label>
                                    <input type="text" id="TipoProblemaContinuoSalud" name="TipoProblemaContinuoSalud" style="width: 90%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Has recibido terapia de aprendizaje, de lenguaje, hábitos de estudio, emocional, dislexia, etc.?</label>
                                    <input type="checkbox" id="TerapiaRecibida" name="TerapiaRecibida" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="TerapiaRecibida" name="TerapiaRecibida" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Qué tipo de terapia has recibido?</label>
                                    <input type="text" id="TipoDeTerapiaRecibida" name="TipoDeTerapiaRecibida" style="width: 72%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Por qué tuviste que recibir la terapia?</label>
                                    <input type="text" id="RazonDeTerapiaRecibida" name="RazonDeTerapiaRecibida" style="width: 69%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Cómo describirías a tu familia?
                                    </div>
                                    <textarea id="DescripcionFamilia" name="DescripcionFamilia" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Con quién te llevas mejor?
                                    </div>
                                    <textarea id="MejorRelacionFamiliar" name="MejorRelacionFamiliar" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Si pudieras cambiar algo de tu familia qué sería?
                                    </div>
                                    <textarea id="CambioEnFamilia" name="CambioEnFamilia" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Qué características de personalidad admiras de tu padre?
                                    </div>
                                    <textarea id="AdmirarPersonalidadPadre" name="AdmirarPersonalidadPadre" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Qué defectos observas en él?
                                    </div>
                                    <textarea id="DefectosPersonalidadPadre" name="DefectosPersonalidadPadre" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Platicas tus problemas con él?
                                    </div>
                                    <textarea id="PlaticarProblemasConPadre" name="PlaticarProblemasConPadre" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Qué características de personalidad admiras de tu madre?
                                    </div>
                                    <textarea id="AdmirarPersonalidadMadre" name="AdmirarPersonalidadMadre" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Qué defectos observas en ella?
                                    </div>
                                    <textarea id="DefectosPersonalidadMadre" name="DefectosPersonalidadMadre" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Platicas tus problemas con ella?
                                    </div>
                                    <textarea id="PlaticarProblemasConMadre" name="PlaticarProblemasConMadre" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="h6 text-center">
                                        ¿Cómo es tu relación con tus hermanos?
                                    </div>
                                    <textarea id="RelacionConHermanos" name="RelacionConHermanos" class="form-control" rows="2" cols=65"></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Qué haces en tu tiempo libre?</label>
                                    <input type="text" id="Pasatiempos" name="Pasatiempos" style="width: 75%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-5">
                                    <label class="formLabel">¿Practicas algún deporte? </label>
                                    <input type="checkbox" id="PracticaDeporte" name="PracticaDeporte" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="PracticaDeporte" name="PracticaDeporte" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                                <div class="col-md-7">
                                    <label class="formLabel">¿Cuál(es)?</label>
                                    <input type="text" id="CualPracticaDeporte" name="CualPracticaDeporte" style="width: 80%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-8">
                                    <label class="formLabel">¿Participas en alguna organización que realice ayuda social?</label>
                                    <input type="checkbox" id="OrganizacionAyudaSocial" name="OrganizacionAyudaSocial" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="OrganizacionAyudaSocial" name="OrganizacionAyudaSocial" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Cuál(es)?</label>
                                    <input type="text" id="CualOrganizacionAyudaSocial" name="CualOrganizacionAyudaSocial" style="width: 89%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-8">
                                    <label class="formLabel">¿Has sido jefe o directivo de algún grupo o asociación?</label>
                                    <input type="checkbox" id="DirectivoGrupo" name="DirectivoGrupo" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="DirectivoGrupo" name="DirectivoGrupo" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿De cuál(es)?</label>
                                    <input type="text" id="CualDirectivoGrupo" name="CualDirectivoGrupo" style="width: 87%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-8">
                                    <label class="formLabel">¿Realizas alguna actividad cultural?</label>
                                    <input type="checkbox" id="ActividadCultural" name="ActividadCultural" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="ActividadCultural" name="ActividadCultural" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Cuál(es)?</label>
                                    <input type="text" id="CualActividadCultural" name="CualActividadCultural" style="width: 89%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-5">
                                    <label class="formLabel">¿Te gusta leer?</label>
                                    <input type="checkbox" id="GustoLectura" name="GustoLectura" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="GustoLectura" name="GustoLectura" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                                <div class="col-md-7">
                                    <label class="formLabel">¿Con qué frecuencia lees?</label>
                                    <input type="text" id="FrecuenciaLectura" name="FrecuenciaLectura" style="width: 63%" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Qué tipo de lectura prefieres?  </label>
                                    <input type="text" id="CualActividadCultural" name="CualActividadCultural" style="width: 76%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-5">
                                    <label class="formLabel">¿Utilizas Redes Sociales? </label>
                                    <input type="checkbox" id="UsaRedesSociales" name="UsaRedesSociales" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="UsaRedesSociales" name="UsaRedesSociales" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                                <div class="col-md-7">
                                    <label class="formLabel">¿Cuál(es)?</label>
                                    <input type="text" id="FrecuenciaLectura" name="FrecuenciaLectura" style="width: 81%" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Perteneces o has pertenecido a alguna organización de tipo social, deportivo, cultural, religioso, etc.?  </label>
                                    <input type="checkbox" id="ExperienciaOrganizaciones" name="ExperienciaOrganizaciones" style="width: 5%" class="form-control checkbox-inline"> Sí
                                    <input type="checkbox" id="ExperienciaOrganizaciones" name="ExperienciaOrganizaciones" style="width: 5%" class="form-control checkbox-inline"> No
                                </div>
                            </div>

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-12">
                                    <label class="formLabel">¿Cuál(es)?</label>
                                    <input type="text" id="CualExperienciaOrganizaciones" name="CualExperienciaOrganizaciones" style="width: 89%" class="form-control" required>
                                </div>
                            </div>-->

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
