@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>New Tasklist Page</h1>
 <div class="row">
    <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
        {!! Form::model($task, ['route'=>'tasks.store']) !!}
            <div class="form-group">
                {!! Form::label('content', 'task') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'status') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection