@extends('layouts.napp')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">¡Bienvenido {{Auth::user()->name}}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
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
                        <!--<div class="row">
                            <div class="col-md-12 board">
                                <div class="board-inner">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <div class="liner"></div>
                                        <li class="active">
                                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab" title="User Experience">
                                              <span class="round-tabs one">
                                                      <i class="icon icon-profile-male"></i>
                                              </span>
                                            </a>
                                        </li>
                                        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" title="Sketch">
                                             <span class="round-tabs two">
                                                 <i class="icon icon-pencil"></i>
                                             </span>
                                            </a>
                                        </li>
                                        <li><a href="#prototyping" aria-controls="prototyping" role="tab" data-toggle="tab" title="Prototyping">
                                             <span class="round-tabs three">
                                                  <i class="icon icon-layers"></i>
                                             </span> </a>
                                        </li>

                                        <li><a href="#uidesign" aria-controls="uidesign" role="tab" data-toggle="tab" title="UI Design">
                                             <span class="round-tabs four">
                                                  <i class="icon icon-aperture"></i>
                                             </span>
                                            </a>
                                        </li>
                                        <li><a href="#doner" aria-controls="doner" role="tab" data-toggle="tab" title="Development">
                                             <span class="round-tabs five">
                                                  <i class="icon icon-tools-2"></i>
                                             </span> </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <!--Bienvenido {{Auth::user()->name}} al sistema de admisiones de la Universidad Anáhuac
                        <br>
                    <form class="form" role="form" method="POST" action="{{ route('login') }}" accept-charset="UTF-8" id="login-nav">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="formLabel ">Primer nombre:</label>
                                <input class="form-control" type="text" required>
                                <label class="formLabel">Primer apellido:</label>
                                <input class="form-control" type="text" required>
                                <label class="formLabel">Correo electrónico:</label>
                                <input class="form-control" type="email" required>
                                <label class="formLabel">Fecha de nacimiento:</label>
                                <form class="form-inline">
                                <label class="sr-only" for="inlineFormInput">Dia</label>
                                <input id="inlineFormInput" class="form-control" type="text" required>
                                <label class="sr-only" for="inlineFormInput">Mes</label>
                                <input  class="form-control" type="text" required>
                                <label class="sr-only" for="inlineFormInput">Año</label>
                                <input class="form-control" type="text" required>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Segundo nombre:</label>
                                <input class="form-control" type="text">
                                <label class="formLabel">Segundo apellido:</label>
                                <input class="form-control" type="text">
                                <label class="formLabel">Confirma tu correo electrónico:</label>
                                <input class="form-control" type="email" required>
                                <label class="formLabel">Sexo:</label>
                                <select class="form-control" required>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>HELICOPTERO DE COMBATE TIPO APACHE</option>
                                </select>
                                <label class="formLabel">Segundo apellido:</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Segundo nombre:</label>
                                <input class="form-control" type="text">
                                <label class="formLabel">Segundo apellido:</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <input type="submit">
                    </form>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
