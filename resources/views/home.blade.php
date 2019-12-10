@extends('layouts.app')

@section('content')

<div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
                        {{$discussions->links()}}
                    @else
                        <div class="alert alert-danger text-center">
                            No data found
                        </div>
                    @endif
                </div>
            </div>
@endsection
