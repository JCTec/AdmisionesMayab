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

                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('postHelper') }}" accept-charset="UTF-8" id="login-nav">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Cómo describirías a tu familia?
                                        </div>
                                        <textarea id="DescripcionFamilia" name="DescripcionFamilia" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Con quién te llevas mejor?
                                        </div>
                                        <textarea id="MejorRelacionFamiliar" name="MejorRelacionFamiliar" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Si pudieras cambiar algo de tu familia qué sería?
                                        </div>
                                        <textarea id="CambioEnFamilia" name="CambioEnFamilia" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Qué características de personalidad admiras de tu padre?
                                        </div>
                                        <textarea id="AdmirarPersonalidadPadre" name="AdmirarPersonalidadPadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Qué defectos observas en él?
                                        </div>
                                        <textarea id="DefectosPersonalidadPadre" name="DefectosPersonalidadPadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Platicas tus problemas con él?
                                        </div>
                                        <textarea id="PlaticarProblemasConPadre" name="PlaticarProblemasConPadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Qué características de personalidad admiras de tu madre?
                                        </div>
                                        <textarea id="AdmirarPersonalidadMadre" name="AdmirarPersonalidadMadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Qué defectos observas en ella?
                                        </div>
                                        <textarea id="DefectosPersonalidadMadre" name="DefectosPersonalidadMadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Platicas tus problemas con ella?
                                        </div>
                                        <textarea id="PlaticarProblemasConMadre" name="PlaticarProblemasConMadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Cómo es tu relación con tus hermanos?
                                        </div>
                                        <textarea id="RelacionConHermanos" name="RelacionConHermanos" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Qué haces en tu tiempo libre?</label>
                                        <input type="text" id="Pasatiempos" name="Pasatiempos" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label class="formLabel">¿Practicas algún deporte? </label>
                                        <input type="radio" id="PracticaDeporte" name="PracticaDeporte" class="form-control checkbox-inline"> Sí
                                        <input type="radio" id="PracticaDeporte" name="PracticaDeporte" class="form-control checkbox-inline"> No
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="CualPracticaDeporte" name="CualPracticaDeporte" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label class="formLabel">¿Participas en alguna organización que realice ayuda social?</label>
                                        <input type="radio" id="OrganizacionAyudaSocial" name="OrganizacionAyudaSocial" class="form-control checkbox-inline"> Sí
                                        <input type="radio" id="OrganizacionAyudaSocial" name="OrganizacionAyudaSocial" class="form-control checkbox-inline"> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="CualOrganizacionAyudaSocial" name="CualOrganizacionAyudaSocial" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label class="formLabel">¿Has sido jefe o directivo de algún grupo o asociación?</label>
                                        <input type="radio" id="DirectivoGrupo" name="DirectivoGrupo" class="form-control checkbox-inline"> Sí
                                        <input type="radio" id="DirectivoGrupo" name="DirectivoGrupo" class="form-control checkbox-inline"> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿De cuál(es)?</label>
                                        <input type="text" id="CualDirectivoGrupo" name="CualDirectivoGrupo" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label class="formLabel">¿Realizas alguna actividad cultural?</label>
                                        <input type="radio" id="ActividadCultural" name="ActividadCultural" class="form-control checkbox-inline"> Sí
                                        <input type="radio" id="ActividadCultural" name="ActividadCultural" class="form-control checkbox-inline"> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="CualActividadCultural" name="CualActividadCultural" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label class="formLabel">¿Te gusta leer?</label>
                                        <input type="radio" id="GustoLectura" name="GustoLectura" class="form-control checkbox-inline"> Sí
                                        <input type="radio" id="GustoLectura" name="GustoLectura" class="form-control checkbox-inline"> No
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <label class="formLabel">¿Con qué frecuencia lees?</label>
                                        <input type="text" id="FrecuenciaLectura" name="FrecuenciaLectura" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Qué tipo de lectura prefieres?  </label>
                                        <input type="text" id="CualActividadCultural" name="CualActividadCultural" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label class="formLabel">¿Utilizas Redes Sociales? </label>
                                        <input type="radio" id="UsaRedesSociales" name="UsaRedesSociales" class="form-control checkbox-inline"> Sí
                                        <input type="radio" id="UsaRedesSociales" name="UsaRedesSociales" class="form-control checkbox-inline"> No
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="FrecuenciaLectura" name="FrecuenciaLectura" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Perteneces o has pertenecido a alguna organización de tipo social, deportivo, cultural, religioso, etc.?  </label>
                                        <input type="radio" id="ExperienciaOrganizaciones" name="ExperienciaOrganizaciones" class="form-control checkbox-inline"> Sí
                                        <input type="radio" id="ExperienciaOrganizaciones" name="ExperienciaOrganizaciones" class="form-control checkbox-inline"> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="CualExperienciaOrganizaciones" name="CualExperienciaOrganizaciones" class="form-control" required>
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

