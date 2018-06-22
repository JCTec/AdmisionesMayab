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
                                var practicaDeporte = parseInt("{{$ov->practicaDeporte}}");
                                var organizacionAyudaSocial = parseInt("{{$ov->organizacionAyudaSocial}}");
                                var directivoGrupo = parseInt("{{$ov->directivoGrupo}}");
                                var actividadCultural = parseInt("{{$ov->actividadCultural}}");
                                var gustoLectura = parseInt("{{$ov->gustoLectura}}");
                                var usaRedesSociales = parseInt("{{$ov->usaRedesSociales}}");
                                var experienciaOrganizaciones = parseInt("{{$ov->experienciaOrganizaciones}}");

                                if(practicaDeporte == 1){
                                    $('#cualPracticaDeporte').attr('required', true);

                                    var $radios = $('input:radio[name=practicaDeporte]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (practicaDeporte == 0){
                                    $('#cualPracticaDeporte').attr('required', false);
                                    $('#cualPracticaDeporte').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=practicaDeporte]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#cualPracticaDeporte').attr('required', true);

                                    var $radios = $('input:radio[name=practicaDeporte]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(organizacionAyudaSocial == 1){
                                    $('#cualOrganizacionAyudaSocial').attr('required', true);

                                    var $radios = $('input:radio[name=organizacionAyudaSocial]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (organizacionAyudaSocial == 0){
                                    $('#cualOrganizacionAyudaSocial').attr('required', false);
                                    $('#cualOrganizacionAyudaSocial').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=organizacionAyudaSocial]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#cualOrganizacionAyudaSocial').attr('required', true);

                                    var $radios = $('input:radio[name=organizacionAyudaSocial]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(directivoGrupo == 1){
                                    $('#cualDirectivoGrupo').attr('required', true);

                                    var $radios = $('input:radio[name=directivoGrupo]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (directivoGrupo == 0){
                                    $('#cualDirectivoGrupo').attr('required', false);
                                    $('#cualDirectivoGrupo').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=directivoGrupo]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#cualDirectivoGrupo').attr('required', true);

                                    var $radios = $('input:radio[name=directivoGrupo]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(actividadCultural == 1){
                                    $('#cualActividadCultural').attr('required', true);

                                    var $radios = $('input:radio[name=actividadCultural]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (actividadCultural == 0){
                                    $('#cualActividadCultural').attr('required', false);
                                    $('#cualActividadCultural').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=actividadCultural]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#cualActividadCultural').attr('required', true);

                                    var $radios = $('input:radio[name=actividadCultural]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(gustoLectura == 1){
                                    $('#frecuenciaLectura').attr('required', true);
                                    $('#cualLectura').attr('required', true);

                                    var $radios = $('input:radio[name=gustoLectura]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (gustoLectura == 0){
                                    $('#frecuenciaLectura').attr('required', false);
                                    $('#frecuenciaLectura').hide(200).prev().hide(200);
                                    $('#cualLectura').attr('required', false);
                                    $('#cualLectura').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=gustoLectura]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#frecuenciaLectura').attr('required', true);
                                    $('#cualLectura').attr('required', true);

                                    var $radios = $('input:radio[name=gustoLectura]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(usaRedesSociales == 1){
                                    $('#cualRedesSociales').attr('required', true);

                                    var $radios = $('input:radio[name=usaRedesSociales]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (usaRedesSociales == 0){
                                    $('#cualRedesSociales').attr('required', false);
                                    $('#cualRedesSociales').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=usaRedesSociales]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#cualRedesSociales').attr('required', true);

                                    var $radios = $('input:radio[name=usaRedesSociales]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(experienciaOrganizaciones == 1){
                                    $('#cualExperienciaOrganizaciones').attr('required', true);

                                    var $radios = $('input:radio[name=experienciaOrganizaciones]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (experienciaOrganizaciones == 0){
                                    $('#cualExperienciaOrganizaciones').attr('required', false);
                                    $('#cualExperienciaOrganizaciones').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=experienciaOrganizaciones]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#cualExperienciaOrganizaciones').attr('required', true);

                                    var $radios = $('input:radio[name=experienciaOrganizaciones]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                $('input[type=radio][name=practicaDeporte]').change(function() {
                                    if (this.value == 1) {
                                        $('#cualPracticaDeporte').attr('required', true);
                                        $('#cualPracticaDeporte').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#cualPracticaDeporte').attr('required', false);
                                        $('#cualPracticaDeporte').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=organizacionAyudaSocial]').change(function() {
                                    if (this.value == 1) {
                                        $('#cualOrganizacionAyudaSocial').attr('required', true);
                                        $('#cualOrganizacionAyudaSocial').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#cualOrganizacionAyudaSocial').attr('required', false);
                                        $('#cualOrganizacionAyudaSocial').hide(200).prev().hide(200);
                                    }
                                });


                                $('input[type=radio][name=directivoGrupo]').change(function() {
                                    if (this.value == 1) {
                                        $('#cualDirectivoGrupo').attr('required', true);
                                        $('#cualDirectivoGrupo').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#cualDirectivoGrupo').attr('required', false);
                                        $('#cualDirectivoGrupo').hide(200).prev().hide(200);
                                    }
                                });


                                $('input[type=radio][name=actividadCultural]').change(function() {
                                    if (this.value == 1) {
                                        $('#cualActividadCultural').attr('required', true);
                                        $('#cualActividadCultural').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#cualActividadCultural').attr('required', false);
                                        $('#cualActividadCultural').hide(200).prev().hide(200);
                                    }
                                });


                                $('input[type=radio][name=gustoLectura]').change(function() {
                                    if (this.value == 1) {
                                        $('#frecuenciaLectura').attr('required', true);
                                        $('#frecuenciaLectura').show(200).prev().show(200);
                                        $('#cualLectura').attr('required', true);
                                        $('#cualLectura').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#frecuenciaLectura').attr('required', false);
                                        $('#frecuenciaLectura').hide(200).prev().hide(200);
                                        $('#cualLectura').attr('required', false);
                                        $('#cualLectura').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=usaRedesSociales]').change(function() {
                                    if (this.value == 1) {
                                        $('#cualRedesSociales').attr('required', true);
                                        $('#cualRedesSociales').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#cualRedesSociales').attr('required', false);
                                        $('#cualRedesSociales').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=experienciaOrganizaciones]').change(function() {
                                    if (this.value == 1) {
                                        $('#cualExperienciaOrganizaciones').attr('required', true);
                                        $('#cualExperienciaOrganizaciones').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#cualExperienciaOrganizaciones').attr('required', false);
                                        $('#cualExperienciaOrganizaciones').hide(200).prev().hide(200);
                                    }
                                });

                                $('#back').on('click', function (e) {
                                    e.preventDefault();
                                    window.location = "{{route('backOV')}}";
                                });

                            });
                        </script>

                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('user.createOV') }}" accept-charset="UTF-8" id="login-nav">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Cómo describirías a tu familia?
                                        </div>
                                        <textarea id="descripcionFamilia" name="descripcionFamilia" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Con quién te llevas mejor?
                                        </div>
                                        <textarea id="mejorRelacionFamiliar" name="mejorRelacionFamiliar" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Si pudieras cambiar algo de tu familia qué sería?
                                        </div>
                                        <textarea id="cambioEnFamilia" name="cambioEnFamilia" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Qué características de personalidad admiras de tu padre?
                                        </div>
                                        <textarea id="admirarPersonalidadPadre" name="admirarPersonalidadPadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Qué defectos observas en él?
                                        </div>
                                        <textarea id="defectosPersonalidadPadre" name="defectosPersonalidadPadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Platicas tus problemas con él?
                                        </div>
                                        <textarea id="platicarProblemasConPadre" name="platicarProblemasConPadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Qué características de personalidad admiras de tu madre?
                                        </div>
                                        <textarea id="admirarPersonalidadMadre" name="admirarPersonalidadMadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Qué defectos observas en ella?
                                        </div>
                                        <textarea id="defectosPersonalidadMadre" name="defectosPersonalidadMadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Platicas tus problemas con ella?
                                        </div>
                                        <textarea id="platicarProblemasConMadre" name="platicarProblemasConMadre" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="h6 text-center">
                                            ¿Cómo es tu relación con tus hermanos?
                                        </div>
                                        <textarea id="relacionConHermanos" name="relacionConHermanos" class="form-control" rows="2" cols=65"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Qué haces en tu tiempo libre?</label>
                                        <input type="text" id="pasatiempos" name="pasatiempos" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label class="formLabel">¿Practicas algún deporte? </label>
                                        <input type="radio" id="practicaDeporte" name="practicaDeporte" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="practicaDeporte" name="practicaDeporte" class="form-control checkbox-inline" value=0> No
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="cualPracticaDeporte" name="cualPracticaDeporte" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label class="formLabel">¿Participas en alguna organización que realice ayuda social?</label>
                                        <input type="radio" id="organizacionAyudaSocial" name="organizacionAyudaSocial" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="organizacionAyudaSocial" name="organizacionAyudaSocial" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="cualOrganizacionAyudaSocial" name="cualOrganizacionAyudaSocial" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label class="formLabel">¿Has sido jefe o directivo de algún grupo o asociación?</label>
                                        <input type="radio" id="directivoGrupo" name="directivoGrupo" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="directivoGrupo" name="directivoGrupo" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿De cuál(es)?</label>
                                        <input type="text" id="cualDirectivoGrupo" name="cualDirectivoGrupo" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label class="formLabel">¿Realizas alguna actividad cultural?</label>
                                        <input type="radio" id="actividadCultural" name="actividadCultural" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="actividadCultural" name="actividadCultural" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="cualActividadCultural" name="cualActividadCultural" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label class="formLabel">¿Te gusta leer?</label>
                                        <input type="radio" id="gustoLectura" name="gustoLectura" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="gustoLectura" name="gustoLectura" class="form-control checkbox-inline" value=0> No
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <label class="formLabel">¿Con qué frecuencia lees?</label>
                                        <input type="text" id="frecuenciaLectura" name="frecuenciaLectura" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Qué tipo de lectura prefieres?  </label>
                                        <input type="text" id="cualLectura" name="cualLectura" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label class="formLabel">¿Utilizas Redes Sociales? </label>
                                        <input type="radio" id="usaRedesSociales" name="usaRedesSociales" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="usaRedesSociales" name="usaRedesSociales" class="form-control checkbox-inline" value=0> No
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="cualRedesSociales" name="cualRedesSociales" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Perteneces o has pertenecido a alguna organización de tipo social, deportivo, cultural, religioso, etc.?  </label>
                                        <input type="radio" id="experienciaOrganizaciones" name="experienciaOrganizaciones" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="experienciaOrganizaciones" name="experienciaOrganizaciones" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Cuál(es)?</label>
                                        <input type="text" id="cualExperienciaOrganizaciones" name="cualExperienciaOrganizaciones" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button id="back" class="btn btn-outline-primary">Atras</button>
                                    </div>
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

