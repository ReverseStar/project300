@extends('layouts.app')

@section('content')



<div class="card">
    <div class="card-header">Add Discussion</div>

    <div class="card-body">
        <form action="{{route('discussions.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="">
            </div>

            <div class="form-group">
                <label for="content">content</label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>
            </div>

            <div class="form-group">
                <label for="channel">Channels</label>
                <select name="channel" id="channel" class="form-control">
                    @foreach($channels as $channel)
                    <option value="{{$channel->id}}">{{$channel->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Discussion Create" id="submit">
        </form>

    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
<!-- <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#submit').click(function(e){
            alert("The button is working alright");
        });
    });
</script> -->
@endsection