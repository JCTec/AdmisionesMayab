@extends('layouts.napp')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">¡Bienvenido {{Auth::user()->name}}!</div>

                <div class="card-body">
                    <div class="card-body text-justify">
                        Bienvenido al sistema de Admisiones de la Universidad Anáhuac Mayab, a partir de este momento empiezas tu camino
                        como aspirante a estudiar en esta prestigiosa institución. <br> <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut augue nunc. Mauris porttitor diam leo. In ut
                        sapien dignissim, lobortis massa non, aliquam risus. Donec dictum, risus sit amet facilisis sodales, purus erat
                        pharetra lectus, vitae ullamcorper nisl dui ac urna. In eu dolor cursus, feugiat quam in, maximus nisi. Nam
                        porttitor elit mi, sodales maximus ex pharetra id. In risus justo, porta eu ipsum sed, sodales rhoncus turpis.
                        Sed id neque vitae augue venenatis vestibulum. Quisque quis varius erat. Fusce mattis maximus orci at dapibus.
                        Cras efficitur enim vel scelerisque bibendum. Vestibulum dui ex, congue nec urna sed, ullamcorper commodo tortor.
                        Vivamus ultricies et purus in pretium. In ut molestie dolor. Curabitur sit amet interdum justo, eget condimentum ex.

                        <div id="menuJC">
                            <ul>
                                <p class="divider">
                                    <span><li><a href="#">Link</a>
                                    </li></span>
                                    <span class="divider"></span>
                                    <span><li><a href="#">Link</a>
                                    </li></span>
                                    <span class="divider"></span>
                                    <span><li><a href="#">Link</a>
                                    </li></span>
                                    <span class="divider"></span>
                                    <span><li><a href="#">Link</a>
                                    </li></span>
                                    <span class="divider"></span>
                                    <span><li><a href="#">Link</a>
                                    </li></span>
                                </p>
                            </ul>
                        </div>

                    </div>

                    <!-- <nav>
                         <ul class="ul-li-nav ul-nav">
                             <li><a class="a-li a-ul-li-nav" href="#">Registra tus datos basicos</a></li>
                             <li><a class="a-li a-ul-li-nav" href="#">Paga tu examen de admisión</a></li>
                             <li><a class="a-li a-ul-li-nav" href="#">Completa tu ficha de aspirante completa</a></li>
                             <li><a class="a-li a-ul-li-nav" href="#">Completa tu cuestionario de orientación vocacional</a></li>
                         </ul>
                     </nav>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
