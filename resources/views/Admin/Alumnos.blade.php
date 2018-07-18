@extends('layouts.app')

@section('content')
    <main>
        <script>
            function showProfile(id) {
                $('#userID').val(parseInt(id));

                $('#perfil').submit();
            }
        </script>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Fecha de Creación</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Estatus</th>
                @if ($role->u)
                    <th>Acciones</th>
                @endif
            </tr>
            </thead>
            <tbody>

                @foreach($usuarios as $user)
                    <tr>
                        @if ($role->u)
                            <td><a href="#"><img src="{{asset('img/ppPlaceHolder.png')}}" class="avatar" alt="Avatar" width="40px" height="40px"> {{$user->alumno->firstName}} {{$user->alumno->secondName}}</a></td>
                            <td>{{$user->alumno->created_at}}</td>
                            <td>{{$user->alumno->finalEmail}}</td>
                            <td>{{$user->alumno->telefonoInt}} {{$user->alumno->telefono}}</td>

                            <td>
                                @if($user->transaction)
                                    <span class="status text-success">&bull;</span>
                                    Pagado
                                @else
                                    <span class="status text-danger">&bull;</span>
                                    Sin Pagar
                                @endif
                            </td>

                            <td>
                                <a onclick="showProfile('{{$user->id}}')" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                            </td>
                        @else
                            <td>{{$user->alumno->firstName}} {{$user->alumno->secondName}}</td>
                            <td>{{$user->alumno->created_at}}</td>
                            <td>{{$user->alumno->finalEmail}}</td>
                            <td>{{$user->alumno->telefonoInt}} {{$user->alumno->telefono}}</td>
                            <td>
                                @if($user->transaction)
                                    <span class="status text-success">&bull;</span>
                                    Pagado
                                @else
                                    <span class="status text-danger">&bull;</span>
                                    Sin Pagar
                                @endif
                            </td>
                        @endif
                    </tr>

                @endforeach

            </tbody>
        </table>

        <form role="form" method="POST" action="{{ route('perfil') }}" accept-charset="UTF-8" id="perfil">
            @csrf

            <input id="userID" name="userID" type="hidden" value="">
        </form>
    </main>
@endsection