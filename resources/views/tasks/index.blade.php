@extends('tasks.template')

@section('content')

    @if(count($task) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach($task as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '新規作成', [], ['class' => 'btn btn-primary']) !!}

@endsection