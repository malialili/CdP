<?php

?>

@extends('default')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Add Your Task</h2>

    {!! Form::open(['url'=>route('taches.taches.store',$id)]) !!}

    <div class="form-group">
        {!! Form::label('code','Code')  !!}
        {!! Form::text('code',null, ['class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description')  !!}
        <textarea class = "form-control" type ="text" name="description" id="description"></textarea>
    </div>

    <div class="form-group">
        {!! Form::label('start_date','Start Date')  !!}
        {!! Form::input('date','start_date', null , ['class' => 'form-control' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('end_date','end_date')  !!}
        {!! Form::input('date','end_date', null , ['class' => 'form-control' ]) !!}

    </div>

    <div class="form-group">
        {!! Form::label('us_story_id','us_story_id')  !!}
        {!! Form::text('us_story_id', null , ['class' => 'form-control' ]) !!}
    </div>


    <div class="form-group">
        {!! Form::label('predecessors','predecessors')  !!}
        {!! Form::text('predecessors', null , ['class' => 'form-control' ]) !!}
    </div>

    <button class="btn btn-primary">Send</button>

    {!! Form::close() !!}




@stop




