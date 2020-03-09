@extends('tasks.template')

@section('content')
    <div cass="text-center">
        <h1>ログイン</h1></h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6" offset-sm-3>
        
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('pasword', 'Password:') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('ログイン', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}
            
            <p class="mt-2">未登録？ → {!! link_to_route('signup.get', '新規登録') !!}</p>
        </div>
    </div>
@endsection