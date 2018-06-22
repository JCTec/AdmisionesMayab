<?php $__env->startSection('content'); ?>
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

                                var trabajoPrevio = parseInt("<?php echo e($ov->trabajoPrevio); ?>");
                                var experienciaLaboralElegirCarrera = parseInt("<?php echo e($ov->experienciaLaboralElegirCarrera); ?>");
                                var trabajoActual = parseInt("<?php echo e($ov->trabajoActual); ?>");
                                var considerarSaludable = parseInt("<?php echo e($ov->considerarSaludable); ?>");
                                var necesitaAsistencia = parseInt("<?php echo e($ov->necesitaAsistencia); ?>");
                                var necesitaExamenesNoEscritos = parseInt("<?php echo e($ov->necesitaExamenesNoEscritos); ?>");
                                var problemaContinuoSalud = parseInt("<?php echo e($ov->problemaContinuoSalud); ?>");
                                var terapiaRecibida = parseInt("<?php echo e($ov->terapiaRecibida); ?>");


                                if(trabajoPrevio == 1){
                                    $('#puestoTrabajoPrevio').attr('required', true);

                                    var $radios = $('input:radio[name=trabajoPrevio]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (trabajoPrevio == 0){
                                    $('#puestoTrabajoPrevio').attr('required', false);
                                    $('#puestoTrabajoPrevio').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=trabajoPrevio]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#puestoTrabajoPrevio').attr('required', true);

                                    var $radios = $('input:radio[name=trabajoPrevio]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(experienciaLaboralElegirCarrera == 1){
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=experienciaLaboralElegirCarrera]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (experienciaLaboralElegirCarrera == 0){
                                    $('#lugarEstudioExtranjero').attr('required', false);
                                    $('#lugarEstudioExtranjero').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=experienciaLaboralElegirCarrera]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=experienciaLaboralElegirCarrera]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(trabajoActual == 1){
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=trabajoActual]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (trabajoActual == 0){
                                    $('#lugarEstudioExtranjero').attr('required', false);
                                    $('#lugarEstudioExtranjero').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=trabajoActual]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=trabajoActual]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(considerarSaludable == 1){
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=considerarSaludable]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (considerarSaludable == 0){
                                    $('#lugarEstudioExtranjero').attr('required', false);
                                    $('#lugarEstudioExtranjero').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=considerarSaludable]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=considerarSaludable]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(necesitaAsistencia == 1){
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=necesitaAsistencia]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (necesitaAsistencia == 0){
                                    $('#lugarEstudioExtranjero').attr('required', false);
                                    $('#lugarEstudioExtranjero').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=necesitaAsistencia]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=necesitaAsistencia]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(necesitaExamenesNoEscritos == 1){
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=necesitaExamenesNoEscritos]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (necesitaExamenesNoEscritos == 0){
                                    $('#lugarEstudioExtranjero').attr('required', false);
                                    $('#lugarEstudioExtranjero').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=necesitaExamenesNoEscritos]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=necesitaExamenesNoEscritos]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(problemaContinuoSalud == 1){
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=problemaContinuoSalud]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (problemaContinuoSalud == 0){
                                    $('#lugarEstudioExtranjero').attr('required', false);
                                    $('#lugarEstudioExtranjero').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=problemaContinuoSalud]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=problemaContinuoSalud]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                if(terapiaRecibida == 1){
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=terapiaRecibida]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }else if (terapiaRecibida == 0){
                                    $('#lugarEstudioExtranjero').attr('required', false);
                                    $('#lugarEstudioExtranjero').hide(200).prev().hide(200);

                                    var $radios = $('input:radio[name=terapiaRecibida]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=0]').prop('checked', true);
                                    }
                                }else{
                                    $('#lugarEstudioExtranjero').attr('required', true);

                                    var $radios = $('input:radio[name=terapiaRecibida]');
                                    if($radios.is(':checked') === false) {
                                        $radios.filter('[value=1]').prop('checked', true);
                                    }
                                }

                                $('input[type=radio][name=trabajoPrevio]').change(function() {
                                    if (this.value == 1) {
                                        $('#puestoTrabajoPrevio').attr('required', true);
                                        $('#puestoTrabajoPrevio').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#puestoTrabajoPrevio').attr('required', false);
                                        $('#puestoTrabajoPrevio').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=experienciaLaboralElegirCarrera]').change(function() {
                                    if (this.value == 1) {
                                        $('#razonExperienciaLaboralElegirCarrera').attr('required', true);
                                        $('#razonExperienciaLaboralElegirCarrera').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#razonExperienciaLaboralElegirCarrera').attr('required', false);
                                        $('#razonExperienciaLaboralElegirCarrera').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=trabajoActual]').change(function() {
                                    if (this.value == 1) {
                                        $('#razonTrabajoActual').attr('required', true);
                                        $('#razonTrabajoActual').show(200).prev().show(200);
                                        $('#empresaTrabajoActual').attr('required', true);
                                        $('#empresaTrabajoActual').show(200).prev().show(200);
                                        $('#añosTrabajoActual').attr('required', true);
                                        $('#añosTrabajoActual').show(200).prev().show(200);
                                        $('#mesesTrabajoActual').attr('required', true);
                                        $('#mesesTrabajoActual').show(200).prev().show(200);
                                        $('#horarioTrabajoActual').attr('required', true);
                                        $('#horarioTrabajoActual').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#razonTrabajoActual').attr('required', false);
                                        $('#razonTrabajoActual').hide(200).prev().hide(200);
                                        $('#empresaTrabajoActual').attr('required', false);
                                        $('#empresaTrabajoActual').hide(200).prev().hide(200);
                                        $('#añosTrabajoActual').attr('required', false);
                                        $('#añosTrabajoActual').hide(200).prev().hide(200);
                                        $('#mesesTrabajoActual').attr('required', false);
                                        $('#mesesTrabajoActual').hide(200).prev().hide(200);
                                        $('#horarioTrabajoActual').attr('required', false);
                                        $('#horarioTrabajoActual').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=considerarSaludable]').change(function() {
                                    if (this.value == 1) {

                                    }
                                    else if (this.value == 0) {

                                    }
                                });

                                $('input[type=radio][name=necesitaAsistencia]').change(function() {
                                    if (this.value == 1) {
                                        $('#tipoAsistenciaNecesitada').attr('required', true);
                                        $('#tipoAsistenciaNecesitada').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#tipoAsistenciaNecesitada').attr('required', false);
                                        $('#tipoAsistenciaNecesitada').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=necesitaExamenesNoEscritos]').change(function() {
                                    if (this.value == 1) {
                                        $('#tipoDeExamenNecesitado').attr('required', true);
                                        $('#tipoDeExamenNecesitado').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#tipoDeExamenNecesitado').attr('required', false);
                                        $('#tipoDeExamenNecesitado').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=problemaContinuoSalud]').change(function() {
                                    if (this.value == 1) {
                                        $('#tipoProblemaContinuoSalud').attr('required', true);
                                        $('#tipoProblemaContinuoSalud').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#tipoProblemaContinuoSalud').attr('required', false);
                                        $('#tipoProblemaContinuoSalud').hide(200).prev().hide(200);
                                    }
                                });

                                $('input[type=radio][name=terapiaRecibida]').change(function() {
                                    if (this.value == 1) {
                                        $('#tipoDeTerapiaRecibida').attr('required', true);
                                        $('#tipoDeTerapiaRecibida').show(200).prev().show(200);
                                        $('#razonDeTerapiaRecibida').attr('required', true);
                                        $('#razonDeTerapiaRecibida').show(200).prev().show(200);
                                    }
                                    else if (this.value == 0) {
                                        $('#tipoDeTerapiaRecibida').attr('required', false);
                                        $('#tipoDeTerapiaRecibida').hide(200).prev().hide(200);
                                        $('#razonDeTerapiaRecibida').attr('required', false);
                                        $('#razonDeTerapiaRecibida').hide(200).prev().hide(200);
                                    }
                                });

                                $('#back').on('click', function (e) {
                                    e.preventDefault();
                                    window.location = "<?php echo e(route('backOV')); ?>";
                                });

                            });
                        </script>

                        <div class="card-body">
                            <form role="form" method="POST" action="<?php echo e(route('user.createOV')); ?>" accept-charset="UTF-8" id="login-nav">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label class="formLabel">¿Has tenido algún trabajo?</label>
                                        <input type="radio" id="trabajoPrevio" name="trabajoPrevio" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="trabajoPrevio" name="trabajoPrevio" class="form-control checkbox-inline" value=0> No
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <label class="formLabel">¿Qué puesto desempeñaste?</label>
                                        <input type="text" id="puestoTrabajoPrevio" name="puestoTrabajoPrevio" class="form-control"  value="<?php echo e($ov->puestoTrabajoPrevio); ?>" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label class="formLabel">¿Sientes que tu experiencia de trabajo te ayudó a elegir tu carrera?</label>
                                        <input type="radio" id="experienciaLaboralElegirCarrera" name="experienciaLaboralElegirCarrera" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="experienciaLaboralElegirCarrera" name="experienciaLaboralElegirCarrera" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Por qué?</label>
                                        <input type="text" id="razonExperienciaLaboralElegirCarrera" name="razonExperienciaLaboralElegirCarrera" value="<?php echo e($ov->razonExperienciaLaboralElegirCarrera); ?>"  class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 form-group">
                                        <label class="formLabel">¿Actualmente trabajas?</label>
                                        <input type="radio" id="trabajoActual" name="trabajoActual" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="trabajoActual" name="trabajoActual" class="form-control checkbox-inline" value=0> No
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <label class="formLabel">¿Por qué motivo?</label>
                                        <input type="text" id="razonTrabajoActual" name="razonTrabajoActual" class="form-control"  value="<?php echo e($ov->razonTrabajoActual); ?>" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Nombre de la organización o empresa:</label>
                                        <input type="text" id="empresaTrabajoActual" name="empresaTrabajoActual" class="form-control" value="<?php echo e($ov->empresaTrabajoActual); ?>"  required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group form-inline">
                                        <label class="formLabel">¿Cuánto tiempo tienes trabajando ahí?</label>
                                        <input name="añosTrabajoActual" id="añosTrabajoActual" class="form-control" placeholder="Años"  type="text" value="<?php echo e($ov->añosTrabajoActual); ?>"  required>
                                        <input name="mesesTrabajoActual" id="mesesTrabajoActual" class="form-control" placeholder="Meses"  type="text" value="<?php echo e($ov->mesesTrabajoActual); ?>"  required>
                                        <input name="horarioTrabajoActual" id="horarioTrabajoActual" class="form-control" placeholder="Horarios de Trabajo" type="text" value="<?php echo e($ov->horarioTrabajoActual); ?>"  required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label class="formLabel">¿Te consideras una persona saludable?</label>
                                        <input type="radio" id="considerarSaludable" name="considerarSaludable" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="considerarSaludable" name="considerarSaludable" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Requieres asistencia como uso de rampas y/o elevadores para desplazarte dentro de la Universidad?</label>
                                        <input type="radio" id="necesitaAsistencia" name="necesitaAsistencia" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="necesitaAsistencia" name="necesitaAsistencia" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Qué tipo de asistencia requieres?</label>
                                        <input type="text" id="tipoAsistenciaNecesitada" name="tipoAsistenciaNecesitada" class="form-control" value="<?php echo e($ov->tipoAsistenciaNecesitada); ?>"  required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Requieres realizar exámenes en alguna modalidad que no sea escrita?</label>
                                        <input type="radio" id="necesitaExamenesNoEscritos" name="necesitaExamenesNoEscritos" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="necesitaExamenesNoEscritos" name="necesitaExamenesNoEscritos" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Indica qué tipo de modalidad necesitas:</label>
                                        <input type="text" id="tipoDeExamenNecesitado" name="tipoDeExamenNecesitado" class="form-control" value="<?php echo e($ov->tipoDeExamenNecesitado); ?>"  required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Tienes algún problema de salud que requiera atención médica continua?</label>
                                        <input type="radio" id="problemaContinuoSalud" name="problemaContinuoSalud" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="problemaContinuoSalud" name="problemaContinuoSalud" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Cuál?</label>
                                        <input type="text" id="tipoProblemaContinuoSalud" name="tipoProblemaContinuoSalud" class="form-control" value="<?php echo e($ov->tipoProblemaContinuoSalud); ?>"  required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Has recibido terapia de aprendizaje, de lenguaje, hábitos de estudio, emocional, dislexia, etc.?</label>
                                        <input type="radio" id="terapiaRecibida" name="terapiaRecibida" class="form-control checkbox-inline" value=1> Sí
                                        <input type="radio" id="terapiaRecibida" name="terapiaRecibida" class="form-control checkbox-inline" value=0> No
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Qué tipo de terapia has recibido?</label>
                                        <input type="text" id="tipoDeTerapiaRecibida" name="tipoDeTerapiaRecibida" class="form-control" value="<?php echo e($ov->tipoDeTerapiaRecibida); ?>"  required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">¿Por qué tuviste que recibir la terapia?</label>
                                        <input type="text" id="razonDeTerapiaRecibida" name="razonDeTerapiaRecibida" class="form-control" value="<?php echo e($ov->razonDeTerapiaRecibida); ?>"  required>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.napp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>