@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a New Thread</div>
                    <div class="panel-body">
                        <form action="/threads" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input name="title" type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="title">Channel:</label>
                                <select name="channel_id" id="channel" class="form-control">
                                    @foreach(\App\Channel::all() as $channel)
                                        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea name="body" type="text" class="form-control" id="body" rows="8"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection