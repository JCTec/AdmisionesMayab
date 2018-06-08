@extends('layouts.napp')

@section('content')
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Datos de la Madre
                        </div>
                        <script>
                            $(document).ready(function () {

                            });
                        </script>

                        <form class="form-inline" role="form" method="POST" action="{{ route('postHelper') }}" accept-charset="UTF-8" id="login-nav">
                            @csrf

                            <div id="container">
                                <div id="left"></div>
                                <div id="middle"></div>
                                <div id="right" style="text-align: right; padding-right: 35px; padding-bottom: 30px; padding-top: 10px">
                                    <button id="saveASD" class="btn btn-outline-primary">Guardar</button>
                                </div>
                            </div>

                            <button id="saveB" type="submit" class="form-check " hidden="hidden"> Guardar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
