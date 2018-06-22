<?php $__env->startSection('content'); ?>
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Datos Generales
                        </div>

                        <div class="card-body">
                            <script>
                                $(document).ready(function () {

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

                                    <?php if(!isset($Alumno->preparatoria) || $Alumno->preparatoria == 159): ?>
                                        $('#otraPrepa').show();
                                        $('#otraPrepa').attr('required', true)
                                    <?php else: ?>
                                        $('#otraPrepa').hide();
                                        $('#otraPrepa').attr('required', false)
                                    <?php endif; ?>

                                    $('#preparatoria').change(function(){
                                        var option = $(this).children(":selected").text();

                                        if($.trim(option).toLowerCase() == "otro"){
                                            $('#otraPrepa').show(500);
                                            $('#otraPrepa').attr('required', true);
                                        }else{
                                            $('#otraPrepa').hide(500);
                                            $('#otraPrepa').attr('required', false);
                                        }

                                    });

                                    $('.required').prop('required', function(){
                                        return  $(this).is(':visible');
                                    });

                                    $('form :input').change(function() {
                                        if($('#finalEmail').val() == $('#finalEmail2').val()){

                                            var day = parseInt($('#day').val(), 10);

                                            if(day > 0 && day <= 31){

                                                var month = parseInt($('#month').val(), 10);

                                                if(month > 0 && month <= 12){
                                                    var year = parseInt($('#year').val(), 10);

                                                    if(year > (parseInt("<?php echo e(date("Y")); ?>")-100) && year < parseInt("<?php echo e(date("Y")); ?>")){
                                                        $('#saveASD').attr('disabled', false);
                                                    }else{
                                                        $('#saveASD').attr('disabled', true);
                                                    }

                                                }else{
                                                    $('#saveASD').attr('disabled', true);
                                                }
                                            }else{
                                                $('#saveASD').attr('disabled', true);
                                            }
                                        }else{
                                            $('#saveASD').attr('disabled', true);
                                        }
                                    });

                                    $('#saveASD').on('click', function (e) {
                                        $('#basicData').submit();
                                    });
                                });
                            </script>

                            <form role="form" method="POST" action="<?php echo e(route('user.saveAlumno')); ?>" accept-charset="UTF-8" id="basicData">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel ">Primer nombre:</label>
                                        <input name="firstName" id="firstName" class="form-control" placeholder="Primer Nombre" type="text" value="<?php echo e($Alumno->firstName); ?>" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Segundo nombre:</label>
                                        <input name="secondName" id="secondName" class="form-control" placeholder="Segundo Nombre" type="text" value="<?php echo e($Alumno->secondName); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Primer apellido:</label>
                                        <input name="firstLastName" id="firstLastName" class="form-control" placeholder="Primer Apellido" type="text" value="<?php echo e($Alumno->firstLastName); ?>" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Segundo apellido:</label>
                                        <input name="secondLastName" id="secondLastName" class="form-control" placeholder="Segundo Apellido" type="text" value="<?php echo e($Alumno->secondLastName); ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Correo electrónico:</label>
                                        <input name="finalEmail" id="finalEmail" class="form-control" placeholder="Email"  type="email" value="<?php echo e($Alumno->finalEmail); ?>" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Confirma tu correo electrónico:</label>
                                        <input class="form-control" id="finalEmail2" type="email" placeholder="Email"  value="<?php echo e($Alumno->finalEmail); ?>" required>
                                    </div>
                                </div>

                                <label style="font-family: 'Roboto Slab';">Fecha de nacimiento:</label>
                                <div class="row">
                                    <div class="col-md-12 form-inline form-group">
                                        <label class="formLabel" style="padding-left: 10px">Día:</label>
                                        <input name="day" id="day" class="form-control" type="text" placeholder="dd" value="<?php echo e($Alumno->day); ?>" required>
                                        <label class="formLabel" style="padding-left: 10px">Mes:</label>
                                        <input name="month" id="month" class="form-control" placeholder="mm" type="text" value="<?php echo e($Alumno->month); ?>" required>
                                        <label class="formLabel" style="padding-left: 10px">Año:</label>
                                        <input name="year" id="year" class="form-control" placeholder="yyyy" type="text" value="<?php echo e($Alumno->year); ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Preparatoria:</label>
                                        <select id='preparatoria' name='preparatoria' class="form-control" required>
                                            <?php $__currentLoopData = $preparatorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prepa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($prepa["id"] == $Alumno->preparatoria): ?>
                                                    <option value='<?php echo e($prepa["id"]); ?>' selected="selected"><?php echo e($prepa["nombrePreparatoria"]); ?></option>
                                                <?php else: ?>
                                                    <option value='<?php echo e($prepa["id"]); ?>'><?php echo e($prepa["nombrePreparatoria"]); ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div id="otraPrepa" class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Otra Preparatoria:</label>
                                        <input name="otraPreparatoria" id="otraPreparatoria" class="form-control" type="text" placeholder="Nombre de la preparatoria" value="<?php echo e($Alumno->otraPreparatoria); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Carrera:</label>
                                        <select id='carrera' name='carrera' class="form-control" required>
                                            <option>Seleccionar</option>
                                            <?php $__currentLoopData = $programas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($programa["programa"] == $Alumno->carrera): ?>
                                                    <option value='<?php echo e($programa["programa"]); ?>' selected><?php echo e($programa["nombre"]); ?></option>
                                                <?php else: ?>
                                                    <option value='<?php echo e($programa["programa"]); ?>'><?php echo e($programa["nombre"]); ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label  class="formLabel">Sexo:</label>
                                        <select name="sex" id="sex" class="form-control" required>
                                            <option value="m">Masculino</option>
                                            <option value="f">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Teléfono:</label>
                                        <input name="telefono" id="telefono" class="form-control" type="tel" required>
                                        <input name="telefonoInt" id="telefonoInt" class="form-control" type="text" value="<?php echo e($Alumno->telefonoInt); ?>" hidden required>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Celular:</label>
                                        <input name="celular" id="celular" class="form-control" type="tel" required>
                                        <input name="celularInt" id="celularInt" class="form-control" type="text" value="<?php echo e($Alumno->celularInt); ?>" hidden required>
                                    </div>
                                    <script src="<?php echo e(asset('js/intlTelInput.js')); ?>"></script>
                                    <script>

                                        $('#telefono').intlTelInput({
                                            allowDropdown: true,
                                            utilsScript: "<?php echo e(asset('js/utils.js')); ?>",
                                            preferredCountries: ["mx", "sv"],
                                            initialCountry: "mx"
                                        });

                                        <?php if(isset($Alumno->telefono)): ?>
                                            $("#telefono").intlTelInput("setNumber", "<?php echo e($Alumno->telefonoInt); ?><?php echo e($Alumno->telefono); ?>");
                                        <?php else: ?>
                                            $('#telefonoInt').val("+52");
                                        <?php endif; ?>

                                        $('#celular').intlTelInput({
                                            allowDropdown: true,
                                            utilsScript: "<?php echo e(asset('js/utils.js')); ?>",
                                            preferredCountries: ["mx", "sv"],
                                            initialCountry: "mx"
                                        });

                                        <?php if(isset($Alumno->celular)): ?>
                                            $("#celular").intlTelInput("setNumber", "<?php echo e($Alumno->celularInt); ?><?php echo e($Alumno->celular); ?>");
                                        <?php else: ?>
                                            $('#celularInt').val("+52");
                                        <?php endif; ?>

                                        $('#telefono').on('countrychange', function (e, countrychange) {
                                            var code = ('+' + countrychange.dialCode);
                                            $('#telefonoInt').val(code);
                                        });

                                        $('#celular').on('countrychange', function (e, countrychange) {
                                            var code = ('+' + countrychange.dialCode);
                                            $('#celularInt').val(code);
                                        });
                                    </script>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Dirección:</label>
                                        <input name="direccion" id="direccion" class="form-control" placeholder="Dirección" type="text" value="<?php echo e($Alumno->direccion); ?>" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Codigo Postal:</label>
                                        <input name="postal" id="postal" class="form-control" placeholder="Codigo Postal" value="<?php echo e($Alumno->postal); ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Ciudad:</label>
                                        <input name="city" id="city" class="form-control" type="text" placeholder="Ciudad" value="<?php echo e($Alumno->city); ?>" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12" style="text-align: right">
                                        <button id="saveASD" class="btn btn-outline-primary">Guardar</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.napp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>