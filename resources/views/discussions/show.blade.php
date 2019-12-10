@extends('layouts.app')

@section('content')

<div class="card" style="background-color:lightblue">
    @include('partials.discussion-header')

    <div class="card-body">
        <div class="text-center" >
            <strong>{{$discussion->title}}</strong>
        </div>
        <hr>
        {!! $discussion->content !!}
        
        @if($discussion->bestReply)
            <div class="card bg-success my-5" style="color:#fff">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <img width="20px" height="20px" style="border-radius:50%" class="mr-2" src="{{Gravatar::src($discussion->bestReply->owner->email)}}" alt="">
                            <strong>
                                {{$discussion->bestReply->owner->name}}
                            </strong>
                        </div>
                        <div style="color:slateblue">
                            <strong>Best Reply</strong>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    {!! $discussion->bestReply->content !!}
                </div>
            </div>
        @endif

    </div>
</div>


<div class="card my-5">

    <div class="card-header">
        Add a reply
    </div>

    <div class="card-body">   
    @auth
        <form action="{{ route('replies.store',$discussion->slug) }}" method="POST">
        @csrf
            <input type="hidden" name="content" id="content">
            <trix-editor input="content"></trix-editor>

            <button type="submit" class="btn btn-sm btn-success my-2">
                    Add Reply
            </button>
        </form>
    
    @else
        <a href="{{ route('login') }}" class="btn btn-info">Sign in to add a reply</a>

    @endauth

    </div>
</div>
@foreach($discussion->replies()->orderBy('created_at','desc')->paginate(3) as $reply)

<div class="card my-5">

    <div class="card-header p-1">
        <div class="d-flex ">
            <img width="30px" height="30px" style="border-radius:50%" 
            src="{{Gravatar::src($reply->owner->email)}}" alt="">
            <strong class="ml-3" style="color:#1B09D4">{{$reply->owner->name}}</strong>
                <div class="offset-8"></div>
                <div class="mr-2">
                    @if(auth()->user()->id == $discussion->user_id)
                    <form action="{{route('discussions.best', ['discussion' =>$discussion->slug, 'reply' => $reply->id])}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-info">Best</button>
                    </form>
                    @endif
                </div>
                <p class="pull-right" style="color:lightslategrey">~ {{$reply->created_at->diffForHumans()}} </p>
                {{-- <span>{{$reply->owner->name}}</span> --}}
        </div>
    </div>

    <div class="card-body">
        {!! $reply->content !!}


    </div>
</div>
@endforeach

{{ $discussion->replies()->paginate(3)->links() }}




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