@extends('layouts.master')
@section('menu')
    @parent
@endsection
@section('content')
    <div class="label lable-info">
        {{$page}}
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    {!! Form::model($block, ['action'=>'BlockController@store', 'files'=>true, 'class'=>'form']) !!}
    <div class="form-group">
        {!! Form::label('topic_id', 'Select Topic') !!}
        {!! Form::select('topic_id', $topics, '', ['class'=>'form-control']) !!}
        <br>
        <a href="{{url('topic/create')}}" class="btn btn-primary" type="submit">Add new Topic</a>
    </div>
    <div class="form-group">
        {!! Form::label('title', 'Block Title') !!}
        {!! Form::text('title', '', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Add Content') !!}
        {!! Form::textarea('content', '', ['class'=>'form-control']) !!}
    </div>
    <div class="custom-file mb-3">
        {!! Form::label('imagepath', 'Add Image', ['class'=>'custom-file-label']) !!}
        {!! Form::file('imagepath', ['class'=>'custom-file-input']) !!}
    </div>
    <button class="btn btn-success" type="submit">Add Block</button>
    {!! Form::close() !!}
@endsection