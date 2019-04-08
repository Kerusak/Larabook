@extends('layouts.master')
@section('menu')
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                @foreach($topics as $topic)
                    <li class="list-group-item"><a href="{{url("topic/$topic->id")}}">
                            {{$topic->topicname}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-9">
            @if ($id != 0)
            <div class="card-columns">
                @foreach($blocks as $block)
                    <div class="card">
                        <img src="{{asset($block->image_path)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$block->title}}</h5>
                            <p class="card-text">{{$block->content}}</p>
                            <a href="#" class="btn btn-primary">Read more...</a>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
@endsection