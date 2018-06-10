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

                        <form class="form-inline" role="form" method="POST" action="{{ route('postHelper') }}" accept-charset="UTF-8" id="login-nav">
                            @csrf

                            <div class="form-group col-md-12" style="padding-top: 10px; padding-bottom: 10px">
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
