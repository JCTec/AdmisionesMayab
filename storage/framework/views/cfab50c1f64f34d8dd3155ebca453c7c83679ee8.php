<?php $__env->startSection('content'); ?>
    <main>
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Datos Generales
                        </div>

                        <div class="card-body" style="background: .winter-neva-gradient;text-align: center">
                            <script>
                                $(document).ready(function () {
                                    <?php if(isset($pp)): ?>
                                        var isSetImage = true;
                                    <?php else: ?>
                                        var isSetImage = false;
                                    <?php endif; ?>

                                    if(isSetImage){
                                        $('#pp').attr('src', "<?php echo e($pp->base64); ?>");
                                    }

                                    var coll = document.getElementsByClassName("collapsible");
                                    var i;

                                    for (i = 0; i < coll.length; i++) {
                                        coll[i].addEventListener("click", function() {
                                            this.classList.toggle("active");
                                            var content = this.nextElementSibling;
                                            if (content.style.maxHeight){
                                                content.style.maxHeight = null;
                                            } else {
                                                content.style.maxHeight = content.scrollHeight + "px";
                                            }
                                        });
                                    }
                                });
                            </script>

                            <div class="row">
                                <div class="col-md">
                                    <img id="pp" style="border-radius: 20px" src="<?php echo e(asset('img/ppPlaceHolder.png')); ?>" class="img-circle" width="150" height="150">
                                </div>
                            </div>

                            <div class="row" style="margin: 10px">
                                <div class="col-md">
                                    <h3><?php echo e($user->alumno->firstName); ?> <?php echo e($user->alumno->secondName); ?></h3>
                                </div>
                            </div>
                            <div class="row" style="margin: 10px">
                                <div class="col-md">
                                    <h4><?php echo e($user->alumno->firstLastName); ?> <?php echo e($user->alumno->secondLastName); ?></h4>
                                </div>
                            </div>

                            <div class="row" style="margin: 10px">
                                <div class="col-md">
                                    <h2><?php echo e($programa); ?></h2>
                                </div>
                            </div>


                            <hr>

                            <button class="collapsible">
                                Informacion Basica
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>

                                <div class="row">
                                    <div class="col-md">
                                        <label>
                                            Preparatoria:
                                        </label>

                                        <?php if($user->alumno->preparatoria != 159): ?>
                                            <?php echo e($preparatoria); ?> (ID: <?php echo e($user->alumno->preparatoria); ?>)
                                        <?php else: ?>
                                            <?php echo e($user->alumno->otraPreparatoria); ?>

                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Fecha de Nacimiento:
                                        </label>
                                        <?php echo e($user->alumno->day); ?>/<?php echo e($user->alumno->month); ?>/<?php echo e($user->alumno->year); ?>

                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Sexo:
                                        </label>
                                        <?php if($user->alumno->sex == "m"): ?>
                                            Masculino
                                        <?php else: ?>
                                            Femenino
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label>
                                            Email:
                                        </label>
                                        <?php echo e($user->alumno->finalEmail); ?>

                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Teléfono:
                                        </label>
                                        <?php echo e($user->alumno->telefonoInt); ?> <?php echo e($user->alumno->telefono); ?>

                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Celular:
                                        </label>
                                        <?php echo e($user->alumno->celularInt); ?> <?php echo e($user->alumno->celular); ?>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <label>
                                            Dirección:
                                        </label>
                                        <?php echo e($user->alumno->direccion); ?>

                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Codigo Postal:
                                        </label>
                                        <?php echo e($user->alumno->postal); ?>

                                    </div>

                                    <div class="col-md">
                                        <label>
                                            Ciudad:
                                        </label>
                                        <?php echo e($user->alumno->city); ?>

                                    </div>
                                </div>
                            </div>

                            <hr>

                            <button class="collapsible">
                                Datos Familiares
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>

                                <?php $__currentLoopData = $familiares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $familiar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <fieldset>
                                        <legend id="legend">
                                            <?php if($familiar->relacion == 1): ?>
                                                Padre
                                            <?php elseif($familiar->relacion == 2): ?>
                                                Madre
                                            <?php else: ?>
                                                Tutor
                                            <?php endif; ?>
                                        </legend>

                                        <div class="row">
                                            <div class="col-md">
                                                <?php echo e($familiar->titulo); ?>

                                            </div>

                                            <div class="col-md">
                                                <?php echo e($familiar->firstName); ?> <?php echo e($familiar->secondName); ?>

                                            </div>

                                            <div class="col-md">
                                                <?php echo e($familiar->firstLastName); ?> <?php echo e($familiar->secondLastName); ?>

                                            </div>

                                            <?php if(!$familiar->isAlive): ?>
                                                <div class="col-md">
                                                    Fallecido
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <label>
                                                    Teléfono:
                                                </label>
                                                <?php echo e($familiar->telefonoInt); ?> <?php echo e($familiar->telefono); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Celular:
                                                </label>
                                                <?php echo e($familiar->celularInt); ?> <?php echo e($familiar->celular); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    ¿Egresado de la Mayab?:
                                                </label>
                                                <?php if($familiar->isEgresado): ?>
                                                    Si
                                                <?php else: ?>
                                                    No
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <label>
                                                    Email:
                                                </label>
                                                <?php echo e($familiar->email); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Dirección:
                                                </label>
                                                <?php echo e($familiar->direccion); ?>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <label>
                                                    Empresa:
                                                </label>
                                                <?php echo e($familiar->empresa); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Puesto:
                                                </label>
                                                <?php echo e($familiar->puesto); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Giro:
                                                </label>
                                                <?php echo e($familiar->giro); ?>

                                            </div>
                                        </div>
                                    </fieldset>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $brothers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brother): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <fieldset>
                                        <legend id="legend">
                                            Hermano
                                        </legend>

                                        <div class="row">
                                            <div class="col-md">
                                                <?php echo e($brother->nombre); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Sexo:
                                                </label>
                                                <?php if($brother->sex == 'f'): ?>
                                                    Femenino
                                                <?php else: ?>
                                                    Masculino
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Edad:
                                                </label>
                                                <?php echo e($brother->edad); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Trabajo o Estudio:
                                                </label>
                                                <?php echo e($brother->trabajoEstudio); ?>

                                            </div>

                                        </div>

                                    </fieldset>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                            <hr>

                            <button class="collapsible">
                                Contacto de Emergencia
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>


                            </div>

                            <hr>

                            <button class="collapsible">
                                Idiomas
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>

                                <?php $__currentLoopData = $idiomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <fieldset>
                                        <legend id="legend">
                                            <?php echo e($idioma->idioma); ?>

                                        </legend>

                                        <div class="row">

                                            <div class="col-md">
                                                <label>
                                                    Lee:
                                                </label>
                                                <?php echo e($idioma->leer); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Traduce:
                                                </label>
                                                <?php echo e($idioma->traduce); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Habla:
                                                </label>
                                                <?php echo e($idioma->habla); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Escribe:
                                                </label>
                                                <?php echo e($idioma->escribe); ?>

                                            </div>

                                        </div>

                                    </fieldset>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                            <hr>

                            <button class="collapsible">
                                Historial Academico
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>

                                <?php $__currentLoopData = $historialAcademico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $escuela): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <fieldset>
                                        <legend id="legend">
                                            <?php if($escuela->grado == 1): ?>
                                                Primaria
                                            <?php elseif($escuela->grado == 2): ?>
                                                Secundaria
                                            <?php else: ?>
                                                Preparatoria
                                            <?php endif; ?>
                                        </legend>

                                        <div class="row">

                                            <div class="col-md">
                                                <?php echo e($escuela->nombre); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Ciudad:
                                                </label>
                                                <?php echo e($escuela->ciudad); ?>

                                            </div>

                                            <div class="col-md">
                                                <label>
                                                    Promedio:
                                                </label>
                                                <?php echo e($escuela->promedio); ?>

                                            </div>

                                        </div>

                                    </fieldset>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                            <hr>

                            <button class="collapsible">
                                Orientación Vocacional
                            </button>

                            <div class="content">

                                <div class="row" style="margin: 10px"></div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($admin ? 'layouts.app' : 'layouts.napp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>