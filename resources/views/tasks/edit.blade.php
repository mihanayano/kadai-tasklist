@extends('layouts.app')

@section('content')

<div class="container">
<h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
<div class="row">
    
    <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        <div class="form-group">
        {!! Form::label('status', 'status') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
         </div>
        <div class="form-group">
        {!! Form::label('content', 'tasklist') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('refresh') !!}

    {!! Form::close() !!}
        </div>
</div>
</div>
@endsection