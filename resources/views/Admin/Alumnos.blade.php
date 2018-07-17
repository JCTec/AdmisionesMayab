@extends('layouts.app')

@section('content')
    <main>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Date Created</th>
                <th>Email</th>
                <th>Teléfono</th>
                @if ($u)
                    <th>Action</th>
                @endif
            </tr>
            </thead>
            <tbody>

                @foreach($alumnos as $alumno)
                    <tr>
                        @if ($u)
                            <td><a href="#"><img src="{{asset('img/ppPlaceHolder.png')}}" class="avatar" alt="Avatar" width="40px" height="40px"> {{$alumno->firstName}} {{$alumno->secondName}}</a></td>
                            <td>{{$alumno->created_at}}</td>
                            <td>{{$alumno->finalEmail}}</td>
                            <td>{{$alumno->telefonoInt}} {{$alumno->telefono}}</td>

                            <td>
                                <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                            </td>
                        @else
                            <td>{{$alumno->firstName}} {{$alumno->secondName}}</td>
                            <td>{{$alumno->created_at}}</td>
                            <td>{{$alumno->finalEmail}}</td>
                            <td>{{$alumno->telefonoInt}} {{$alumno->telefono}}</td>
                        @endif
                    </tr>

                @endforeach

            </tbody>
        </table>
    </main>
@endsection