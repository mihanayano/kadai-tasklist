@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>New Tasklist Page</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}

@endsection