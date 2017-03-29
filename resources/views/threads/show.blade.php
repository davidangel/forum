@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>{{ $thread->title }}</strong></div>
                <div class="panel-body">
                    {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach($thread->replies as $reply)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="">{{ $reply->owner->name }}</a> said {{ $reply->created_at->diffForHumans() }}...
                </div>
                <div class="panel-body">
                    {{ $reply->body }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection