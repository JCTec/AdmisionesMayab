<?php $__env->startSection('content'); ?>
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Subir Archivos
                        </div>

                        <script>
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#actaDeNacimiento').attr('src', e.target.result);
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#actaDeNacimiento').show(150);
                                }
                            }

                            function readURL2(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#certificadoDePrepa').attr('src', e.target.result);
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#certificadoDePrepa').show(150);
                                }
                            }

                            function readURL3(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#imagenDePerfil').attr('src', e.target.result);
                                    }

                                    reader.readAsDataURL(input.files[0]);

                                    $('#imagenDePerfil').show(150);
                                }
                            }

                            $(document).ready(function () {

                                <?php if(isset($acta)): ?>
                                    var isSetActa = true;
                                <?php else: ?>
                                    var isSetActa = false;
                                <?php endif; ?>

                                <?php if(isset($prepa)): ?>
                                    var isSetPrepa = true;
                                <?php else: ?>
                                    var isSetPrepa = false;
                                <?php endif; ?>

                                <?php if(isset($image)): ?>
                                    var isSetImage = true;
                                <?php else: ?>
                                    var isSetImage = false;
                                <?php endif; ?>


                                if(isSetActa){
                                    <?php if(isset($acta->base64)): ?>
                                        $('#actaDeNacimiento').attr('src', "<?php echo e($acta->base64); ?>");
                                    <?php endif; ?>

                                    <?php if(isset($acta->aprobado)): ?>
                                        <?php if($acta->aprobado): ?>
                                            $('#stateActa').attr('src', "<?php echo e(URL::asset("img/tickW.png")); ?>");
                                        <?php else: ?>
                                            $('#stateActa').attr('src', "<?php echo e(URL::asset("img/crossW.png")); ?>");
                                        <?php endif; ?>
                                    <?php else: ?>
                                        $('#stateActa').attr('src', "<?php echo e(URL::asset("img/reloj.png")); ?>");
                                    <?php endif; ?>
                                }else{
                                    $('#stateActa').hide();
                                }

                                if(isSetPrepa){
                                    <?php if(isset($prepa->base64)): ?>
                                        $('#certificadoDePrepa').attr('src', "<?php echo e($prepa->base64); ?>");
                                    <?php endif; ?>

                                    <?php if(isset($prepa->aprobado)): ?>
                                        <?php if($prepa->aprobado): ?>
                                            $('#statePrepa').attr('src', "<?php echo e(URL::asset("img/tickW.png")); ?>");
                                        <?php else: ?>
                                            $('#statePrepa').attr('src', "<?php echo e(URL::asset("img/crossW.png")); ?>");
                                        <?php endif; ?>
                                    <?php else: ?>
                                        $('#statePrepa').attr('src', "<?php echo e(URL::asset("img/reloj.png")); ?>");
                                    <?php endif; ?>
                                }else{
                                    $('#statePrepa').hide();
                                }

                                if(isSetImage){
                                    <?php if(isset($image->base64)): ?>
                                        $('#imagenDePerfil').attr('src', "<?php echo e($image->base64); ?>");
                                    <?php endif; ?>

                                    <?php if(isset($image->aprobado)): ?>
                                        <?php if($image->aprobado): ?>
                                            $('#stateImage').attr('src', "<?php echo e(URL::asset("img/tickW.png")); ?>");
                                        <?php else: ?>
                                            $('#stateImage').attr('src', "<?php echo e(URL::asset("img/crossW.png")); ?>");
                                        <?php endif; ?>
                                    <?php else: ?>
                                        $('#stateImage').attr('src', "<?php echo e(URL::asset("img/reloj.png")); ?>");
                                    <?php endif; ?>
                                }else{
                                    $('#stateImage').hide();
                                }

                                document.getElementById("actaDeNacimientoInput").onchange = function () {
                                    document.getElementById("actaDeNacimientoInputText").value = this.value;
                                    readURL(this);
                                };

                                document.getElementById("certificadoDePrepaInput").onchange = function () {
                                    document.getElementById("certificadoDePrepaInputText").value = this.value;
                                    readURL2(this);
                                };

                                document.getElementById("imagenDePerfilInput").onchange = function () {
                                    document.getElementById("imagenDePerfilInputText").value = this.value;
                                    readURL3(this);
                                };
                            });
                        </script>

                        <div class="card-body">
                            <form class="form" role="form" method="POST" action="<?php echo e(route('addFiles')); ?>" accept-charset="UTF-8" enctype="multipart/form-data" id="login-nav">
                                <?php echo csrf_field(); ?>
                                <div class="row" style="padding-bottom: 20px">
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="actaDeNacimiento" src="<?php echo e(URL::asset("img/documento.jpg")); ?>" width="80%" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">
                                            <img id="stateActa" src="<?php echo e(URL::asset("img/loading.gif")); ?>" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="actaDeNacimientoInputText" placeholder="Choose File" disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span style="">Acta de Nacimiento</span>
                                                <input id="actaDeNacimientoInput" name="actaDeNacimiento" type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="certificadoDePrepa" src="<?php echo e(URL::asset("img/documento.jpg")); ?>" width="80%" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">
                                            <img id="statePrepa" src="<?php echo e(URL::asset("img/loading.gif")); ?>" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="certificadoDePrepaInputText" placeholder="Choose File" disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span>Certificado de Prepa</span>
                                                <input id="certificadoDePrepaInput" name="certificadoDePrepa" type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm form-group" style="text-align: center;">
                                        <img class="archive" id="imagenDePerfil" src="<?php echo e(URL::asset("img/imagen.jpg")); ?>" width="100%" height="350px">

                                        <div style="vertical-align: bottom; padding-top: 20px;">
                                            <img id="stateImage" src="<?php echo e(URL::asset("img/loading.gif")); ?>" width="40px" height="40px" style="position: absolute; top: 0; right: 0;">
                                            <input class="archiveLabel" id="imagenDePerfilInputText" placeholder="Choose File" disabled="disabled" />
                                            <div style="width: 50%" class="fileUpload btn btn-primary">
                                                <span style="">Foto de Perfil</span>
                                                <input id="imagenDePerfilInput" type="file" name="imagenDePerfil" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6"></div>
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