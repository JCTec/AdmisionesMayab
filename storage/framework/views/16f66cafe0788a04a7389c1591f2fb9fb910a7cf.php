<?php $__env->startSection('content'); ?>
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card align-middle mx-auto" style="width: 75%;">
                        <div class="card-header text-center">
                            Seleccionar Tutor
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

                                    redirect();
                                });
                            });

                            function redirect() {
                                var selectElem = document.getElementById('tutor');

                                var id = selectElem.options[selectElem.selectedIndex].value;

                                if(id == 3){
                                    window.location = "familiar/tutor/info";
                                }else{
                                    window.location = ("familiar/setTutor/" + id);
                                }
                            }

                        </script>

                        <div class="card-body">
                            <div style="padding-bottom: 20px;">
                                <select id="tutor" class="form-control">
                                    <option value=1>Padre</option>
                                    <option value=2>Madre</option>
                                    <option value=3>Otro</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <a id="back" style="color: #007bff" class="btn btn-outline-primary">Atras</a>
                                </div>
                                <div class="col-sm-6" style="text-align: right">
                                    <button id="saveASD" class="btn btn-outline-primary">Guardar</button>
                                </div>
                            </div>

                            <button id="saveB" type="submit" class="form-check " hidden="hidden"> Guardar </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.napp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>