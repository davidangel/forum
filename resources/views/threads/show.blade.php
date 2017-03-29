@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><a href="">{{ $thread->creator->name }}</a> posted: {{ $thread->title }}</strong></div>
                <div class="panel-body">
                    {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach($thread->replies as $reply)
            @include('threads.reply')
            @endforeach
        </div>
    </div>

    @if(auth()->check())
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="POST" action="{{ $thread->path() . '/replies' }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" id="body" class="form-control" placeholder="{{ auth()->user()->name }} replies..." rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Post</button>
            </form>
        </div>
    </div>
    @else
        <p class="text-center">Please <a href="{{ route('register') }}">register</a> or <a href="{{ route('login') }}">login</a> to participate in the conversation.</p>
    @endif
</div>
@endsection