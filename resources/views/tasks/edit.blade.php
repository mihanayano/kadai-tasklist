@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のメッセージ編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::text('status') !!}

        
        {!! Form::label('content', 'tasklist:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('refresh') !!}

    {!! Form::close() !!}

@endsection