@extends('layouts.napp')

@section('content')
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            Pago de derecho a examen de admisión
                        </div>
                        <script>
                            $(document).ready(function () {
                                $('#saveASD').on('click', function (e) {
                                   e.preventDefault();

                                    window.location = "{{route('dummy')}}";
                                });
                            });
                        </script>

                        <div class="card-body">
                            <div class="row" style="margin: 20px">
                                <div class="col-xl-12" style="text-align: center">
                                    <button id="saveASD" class="btn btn-outline-primary">Pagar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection