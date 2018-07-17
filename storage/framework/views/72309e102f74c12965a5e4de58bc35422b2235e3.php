<?php $__env->startSection('content'); ?>
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Datos de la Tutor
                        </div>
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

                                $('#back').on('click', function () {
                                    window.location = "<?php echo e(route('back')); ?>";
                                });

                                $('#back').mouseenter(function () {
                                    $(this).css('color', '#ffffff');
                                }).mouseleave(function () {
                                    $(this).css('color', '#007bff');

                                });

                                $('#saveASD').on('click', function (e) {
                                    e.preventDefault();
                                    if($('#finalEmail').val() == $('#finalEmail2').val()){
                                        $("form").submit();
                                    }
                                });
                            });
                        </script>

                        <div class="card-body">
                            <form class="form" role="form" method="POST" action="<?php echo e(route('user.createFamiliar')); ?>" accept-charset="UTF-8" id="login-nav">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="relacion" value=3>

                                <?php if($familiar->id): ?>
                                    <input type="hidden" name="id" value="<?php echo e($familiar->id); ?>">
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Titulo:</label>
                                        <input name="titulo" id="titulo" class="form-control" placeholder="Ejemplo: Sr. Sra." type="text" value="<?php echo e($familiar->titulo); ?>" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel ">Primer nombre:</label>
                                        <input name="firstName" id="firstName" class="form-control" placeholder="Primer Nombre" type="text" value="<?php echo e($familiar->firstName); ?>" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Segundo nombre:</label>
                                        <input name="secondName" id="secondName" class="form-control" placeholder="Segundo Nombre" value="<?php echo e($familiar->secondName); ?>" type="text" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Primer apellido:</label>
                                        <input name="firstLastName" id="firstLastName" class="form-control" placeholder="Primer Apellido" value="<?php echo e($familiar->firstLastName); ?>" type="text" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Segundo apellido:</label>
                                        <input name="secondLastName" id="secondLastName" class="form-control" placeholder="Segundo Apellido" value="<?php echo e($familiar->secondLastName); ?>" type="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Teléfono:</label>
                                        <input name="telefono" id="telefono" class="form-control" type="tel" required>
                                        <input name="telefonoInt" id="telefonoInt" class="form-control" type="text" value="<?php echo e($familiar->telefonoInt); ?>" hidden required>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Celular:</label>
                                        <input name="celular" id="celular" class="form-control" type="tel" required>
                                        <input name="celularInt" id="celularInt" class="form-control" type="text" value="<?php echo e($familiar->celularInt); ?>" hidden required>
                                    </div>
                                    <script src="<?php echo e(asset('js/intlTelInput.js')); ?>"></script>
                                    <script>

                                        $('#telefono').intlTelInput({
                                            allowDropdown: true,
                                            utilsScript: "<?php echo e(asset('js/utils.js')); ?>",
                                            preferredCountries: ["mx", "sv"],
                                            initialCountry: "mx"
                                        });

                                        <?php if(isset($familiar->telefono)): ?>
                                        $("#telefono").intlTelInput("setNumber", "<?php echo e($familiar->telefonoInt); ?><?php echo e($familiar->telefono); ?>");
                                        <?php else: ?>
                                        $('#telefonoInt').val("+52");
                                        <?php endif; ?>

                                        $('#celular').intlTelInput({
                                            allowDropdown: true,
                                            utilsScript: "<?php echo e(asset('js/utils.js')); ?>",
                                            preferredCountries: ["mx", "sv"],
                                            initialCountry: "mx"
                                        });

                                        <?php if(isset($familiar->celular)): ?>
                                        $("#celular").intlTelInput("setNumber", "<?php echo e($familiar->celularInt); ?><?php echo e($familiar->celular); ?>");
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
                                        <label class="formLabel">¿Vive?</label>
                                        <?php if(!isset($familiar->isAlive) || $familiar->isAlive == true): ?>
                                            <input type="radio" name="isAlive" value=1 checked> Si<br>
                                            <input type="radio" name="isAlive" value=0> No<br>
                                        <?php else: ?>
                                            <input type="radio" name="isAlive" value=1> Si<br>
                                            <input type="radio" name="isAlive" value=0 checked> No<br>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">¿Es egresada de la Universidad Anáhuac?</label>
                                        <?php if(!isset($familiar->isEgresado) || $familiar->isEgresado == true): ?>
                                            <input type="radio" name="isEgresado" value=1 checked> Si<br>
                                            <input type="radio" name="isEgresado" value=0> No<br>
                                        <?php else: ?>
                                            <input type="radio" name="isEgresado" value=1> Si<br>
                                            <input type="radio" name="isEgresado" value=0 checked> No<br>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="formLabel">Domicilio permanente:</label>
                                        <input name="direccion" id="direccion" class="form-control" placeholder="Dirección" value="<?php echo e($familiar->direccion); ?>" type="text" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Correo electrónico:</label>
                                        <input name="email" id="email" class="form-control" placeholder="Email"  type="email" value="<?php echo e($familiar->email); ?>" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Empresa:</label>
                                        <input name="empresa" id="empresa" class="form-control" placeholder="Empresa" type="text" value="<?php echo e($familiar->empresa); ?>" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Giro:</label>
                                        <input name="giro" id="giro" class="form-control" placeholder="Giro" type="text" value="<?php echo e($familiar->giro); ?>" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="formLabel">Puesto:</label>
                                        <input name="puesto" id="puesto" class="form-control" placeholder="Puesto" type="text" value="<?php echo e($familiar->puesto); ?>" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a id="back" style="color: #007bff;" class="btn btn-outline-primary">Atras</a>
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