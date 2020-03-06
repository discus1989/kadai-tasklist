@extends('tasks.template')

@section('content')
    @include('users.users', ['users' => $users]);
@endsection