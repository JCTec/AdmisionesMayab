@extends('layouts.napp')

@section('content')

        {!!  Form::open(array('url' => '/addFile/1','files'=>'true')) !!}
        {!!  Form::file('file') !!}
        {!!  Form::text('type', 'Acta de Nacimiento')  !!}
        {!!  Form::token() !!}
        {!!  Form::submit('Upload File') !!}
        {!!  Form::close() !!}

@endsection


