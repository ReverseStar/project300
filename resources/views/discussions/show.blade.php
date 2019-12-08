@extends('layouts.app')

@section('content')

<div class="card">
    @include('partials.discussion-header')

    <div class="card-body">
        <div class="text-center" >
            <strong>{{$discussion->title}}</strong>
        </div>
        <hr>
        {!! $discussion->content !!}
    </div>
</div>

<div class="card my-5">
    <div class="card-header">
        Add a reply
    </div>
    <div class="card-body">
    <trix-editor></trix-editor>
    </div>
</div>

@endsection