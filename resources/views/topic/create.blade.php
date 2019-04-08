@extends('layouts.master')
@section('menu')
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="label label-info">
            {{$page}}
            {{--@if (session('errors') > 0)--}}
            {{--<div class="alert alert-danger">--}}
            {{--@foreach(session('errors')->all() as $err)--}}
            {{--{{$err}}</br>--}}
            {{--@endforeach--}}
            {{--</div>--}}
            {{--@endif--}}
            {{--@if (session('message'))--}}
            {{--<div class="alert alert-success">--}}
            {{--{{session('message')}}--}}
            {{--</div>--}}
            {{--@endif--}}
        </div>
    </div>
    <div class="row">
        {!! Form::model($topic, ['action'=>'TopicController@store']) !!}
        <div class="form-group">
            {!! Form::label('topicname', 'Topic name') !!}
            {!! Form::text('topicname', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Add Topic</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection