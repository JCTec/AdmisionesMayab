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

