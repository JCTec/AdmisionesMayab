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
                            $(document).on('change', '.idiomasC', function () {
                                var selected = $(this).children().find('option:selected');

                                $('.idiomasC').find('optgroup').children().not(selected).each(function () {
                                    if(selected.val() == $(this).val()){
                                        $(this).attr('disabled', true);
                                    }
                                });

                                $('#idiomaChange').val(1);

                            });

                            $(document).on('change', '.inputIdioma', function () {

                                $('#idiomaChange').val(1);
                            });

                            $(document).ready(function () {

                                var template = $('#idomasTemplate').clone();
                                var sectionsCount = 1;

                                $('#idiomasSecction').children().last().remove();

                                <?php if(isset($idiomas) && count($idiomas) != 0): ?>
                                    <?php $__currentLoopData = $idiomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($idioma->idioma == 'en'): ?>

                                            var section = template.clone();

                                            section.find('legend').text('Dominio de Ingles');
                                            section.find('#idiomas').children().each(function () {
                                                $(this).children().each(function () {
                                                    if($(this).val() == 'en'){
                                                        $(this).attr('selected', true);
                                                    }
                                                });
                                            });
                                            section.val('en');

                                            section.find('#idiomaRow').hide();

                                            section.find('#leerOtroIdioma[value=<?php echo e($idioma->leer); ?>]').prop('checked', true);
                                            section.find('#traduceOtroIdioma[value=<?php echo e($idioma->traduce); ?>]').prop('checked', true);
                                            section.find('#hablaOtroIdioma[value=<?php echo e($idioma->habla); ?>]').prop('checked', true);
                                            section.find('#escribeOtroIdioma[value=<?php echo e($idioma->escribe); ?>]').prop('checked', true);

                                            section.find('#idiomas').attr('id', 'Idioma-' + sectionsCount + '[idioma]').attr('name', 'Idioma-' + sectionsCount + '[idioma]').val("<?php echo e($idioma->idioma); ?>");
                                            section.find('#leerOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[leer]').attr('name', 'Idioma-' + sectionsCount + '[leer]').val("<?php echo e($idioma->leer); ?>");
                                            section.find('#traduceOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[traduce]').attr('name', 'Idioma-' + sectionsCount + '[traduce]').val("<?php echo e($idioma->traduce); ?>");
                                            section.find('#hablaOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[habla]').attr('name', 'Idioma-' + sectionsCount + '[habla]').val("<?php echo e($idioma->habla); ?>");
                                            section.find('#escribeOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[escribe]').attr('name', 'Idioma-' + sectionsCount + '[escribe]').val("<?php echo e($idioma->escribe); ?>");

                                            section.appendTo('#idiomasSecction');

                                            sectionsCount += 1;
                                        <?php else: ?>
                                            var section = template.clone();

                                            $('.idiomasC').each(function () {

                                                var selected = $(this).val();

                                                section.find('#idiomas').children().each(function () {
                                                    $(this).children().each(function () {
                                                        if(selected == $(this).val()){
                                                            $(this).attr('disabled', true);
                                                        }
                                                    });
                                                });
                                            });

                                            section.find('#leerOtroIdioma[value=<?php echo e($idioma->leer); ?>]').prop('checked', true);
                                            section.find('#traduceOtroIdioma[value=<?php echo e($idioma->traduce); ?>]').prop('checked', true);
                                            section.find('#hablaOtroIdioma[value=<?php echo e($idioma->habla); ?>]').prop('checked', true);
                                            section.find('#escribeOtroIdioma[value=<?php echo e($idioma->escribe); ?>]').prop('checked', true);

                                            section.find('#idiomas').attr('id', 'Idioma-' + sectionsCount + '[idioma]').attr('name', 'Idioma-' + sectionsCount + '[idioma]').val("<?php echo e($idioma->idioma); ?>");
                                            section.find('#leerOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[leer]').attr('name', 'Idioma-' + sectionsCount + '[leer]').val("<?php echo e($idioma->leer); ?>");
                                            section.find('#traduceOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[traduce]').attr('name', 'Idioma-' + sectionsCount + '[traduce]').val("<?php echo e($idioma->traduce); ?>");
                                            section.find('#hablaOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[habla]').attr('name', 'Idioma-' + sectionsCount + '[habla]').val("<?php echo e($idioma->habla); ?>");
                                            section.find('#escribeOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[escribe]').attr('name', 'Idioma-' + sectionsCount + '[escribe]').val("<?php echo e($idioma->escribe); ?>");

                                            section.appendTo('#idiomasSecction');

                                            sectionsCount += 1;
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    var section = template.clone();

                                    section.find('legend').text('Dominio de Ingles');
                                    section.find('#idiomas').children().each(function () {
                                        $(this).children().each(function () {
                                            if($(this).val() == 'en'){
                                                $(this).attr('selected', true);
                                            }
                                        });
                                    });
                                    section.val('en');

                                    section.find('#idiomaRow').hide();

                                    section.find('#idiomas').attr('id', 'Idioma-' + sectionsCount + '[idioma]').attr('name', 'Idioma-' + sectionsCount + '[idioma]');
                                    section.find('#leerOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[leer]').attr('name', 'Idioma-' + sectionsCount + '[leer]');
                                    section.find('#traduceOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[traduce]').attr('name', 'Idioma-' + sectionsCount + '[traduce]');
                                    section.find('#hablaOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[habla]').attr('name', 'Idioma-' + sectionsCount + '[habla]');
                                    section.find('#escribeOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[escribe]').attr('name', 'Idioma-' + sectionsCount + '[escribe]');

                                    section.appendTo('#idiomasSecction');

                                    sectionsCount += 1;
                                <?php endif; ?>


                                $(document).on('click', '.removeP', function (e) {
                                    e.preventDefault();

                                    $('#idiomaChange').val(1);

                                    var ThisVal = $(this).parent().parent().parent().find('select').val();

                                    $('.idiomasC').each(function () {
                                        $(this).children().each(function () {
                                            $(this).children().each(function () {
                                                if(ThisVal == $(this).val()){
                                                    $(this).attr('disabled', false);
                                                }
                                            });
                                        });
                                    });

                                    $(this).parent().parent().parent().remove();
                                });

                                $(document).on('click', '.duplicateP', function (e) {
                                    e.preventDefault();
                                    var section = template.clone();

                                    $('#idiomaChange').val(1);

                                    $('.idiomasC').each(function () {

                                        var selected = $(this).val();

                                        section.find('#idiomas').children().each(function () {
                                            $(this).children().each(function () {
                                                if(selected == $(this).val()){
                                                    $(this).attr('disabled', true);
                                                }
                                            });
                                        });
                                    });

                                    section.find('#idiomas').attr('id', 'Idioma-' + sectionsCount + '[idioma]').attr('name', 'Idioma-' + sectionsCount + '[idioma]');
                                    section.find('#leerOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[leer]').attr('name', 'Idioma-' + sectionsCount + '[leer]');
                                    section.find('#traduceOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[traduce]').attr('name', 'Idioma-' + sectionsCount + '[traduce]');
                                    section.find('#hablaOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[habla]').attr('name', 'Idioma-' + sectionsCount + '[habla]');
                                    section.find('#escribeOtroIdioma').attr('id', 'Idioma-' + sectionsCount + '[escribe]').attr('name', 'Idioma-' + sectionsCount + '[escribe]');

                                    section.appendTo('#idiomasSecction');

                                    sectionsCount += 1;
                                });

                                $('#back').on('click', function (e) {
                                    e.preventDefault();
                                    window.location = "<?php echo e(route('backOV')); ?>";
                                });


                            });
                        </script>

                        <div class="card-body">
                            <form role="form" method="POST" action="<?php echo e(route('user.createIdiomas')); ?>" accept-charset="UTF-8" id="login-nav">
                                <?php echo csrf_field(); ?>

                                <input type="hidden" id="idiomaChange" name="idiomaChange" value=0>

                                <div id="idiomasSecction">
                                    <div id="idomasTemplate">
                                        <fieldset>
                                            <legend id="legend">
                                                Dominio de otros idomas
                                            </legend>
                                            <div id="idiomaRow" class="row">
                                                <div class="col-md form-group">
                                                    <label class="formLabel">Idioma:</label>
                                                    <select id='idiomas' name='idiomas' class="form-control idiomasC" required>
                                                        <option>Seleccionar</option>

                                                        <optgroup>
                                                            <option value='en'>Ingles</option>
                                                            <option value='es'>Español</option>
                                                            <option value='fr'>Frances</option>
                                                        </optgroup>
                                                        <optgroup label="_______________________________">
                                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($idioma["name"] != "English" && $idioma["name"] != "Español" && $idioma["name"] != "French"): ?>
                                                                    <option value='<?php echo e($key); ?>'><?php echo e($idioma["name"]); ?></option>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md form-group">
                                                    <label class="formLabel">Lee:</label>
                                                    <input type="radio" id="leerOtroIdioma" name="leerOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Básico"> Básico
                                                    <input type="radio" id="leerOtroIdioma" name="leerOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Regular"> Regular
                                                    <input type="radio" id="leerOtroIdioma" name="leerOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Avanzado"> Avanzado
                                                </div>
                                                <div class="col-md form-group">
                                                    <label class="formLabel">Traduce:</label>
                                                    <input type="radio" id="traduceOtroIdioma" name="traduceOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Básico"> Básico
                                                    <input type="radio" id="traduceOtroIdioma" name="traduceOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Regular"> Regular
                                                    <input type="radio" id="traduceOtroIdioma" name="traduceOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Avanzado"> Avanzado
                                                </div>
                                                <div class="col-md form-group">
                                                    <label class="formLabel">Habla:</label>
                                                    <input type="radio" id="hablaOtroIdioma" name="hablaOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Básico"> Básico
                                                    <input type="radio" id="hablaOtroIdioma" name="hablaOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Regular"> Regular
                                                    <input type="radio" id="hablaOtroIdioma" name="hablaOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Avanzado"> Avanzado
                                                </div>
                                                <div class="col-md form-group">
                                                    <label class="formLabel">Escribe:</label>
                                                    <input type="radio" id="escribeOtroIdioma" name="escribeOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Básico"> Básico
                                                    <input type="radio" id="escribeOtroIdioma" name="escribeOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Regular"> Regular
                                                    <input type="radio" id="escribeOtroIdioma" name="escribeOtroIdioma" class="form-control checkbox-inline inputIdioma" value="Avanzado"> Avanzado
                                                </div>
                                            </div>

                                        </fieldset>

                                        <div class="row" style="padding-top: 10px;padding-bottom: 10px">
                                            <div class="col-md-12" style="text-align: left">
                                                <button class="removeP btn btn-outline-primary">Quitar Idioma</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 10px">
                                    <div class="col-md-12" style="text-align: right">
                                        <button class="duplicateP btn btn-outline-primary">Agregar Idioma</button>
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