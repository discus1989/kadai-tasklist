@extends('tasks.template')

@section('content')
    <h1>タスク一覧</h1>
    
    @if(count($task) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach($task as $t)
                <tr>
                    <td>{!! link_to_route('tasks.show', $t->id,['id' => $t->id]) !!}</td>
                    <td>{{ $t->content }}</td>
                    <td>{{ $t->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '新規作成', [], ['class' => 'btn btn-primary']) !!}

@endsection