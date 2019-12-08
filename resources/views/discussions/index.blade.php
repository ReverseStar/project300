@extends('layouts.app')

@section('content')


@if (count($discussions))
@foreach($discussions as $discussion)
<div class="card mb-3">
    @include('partials.discussion-header')

    <div class="card-body">
        <div class="text-center">
            <strong>{{$discussion->title}}</strong>
        </div>
    </div>
</div>
@endforeach

@else
<div class="alert alert-danger text-center">
    No data found
</div>


@endif

@endsection