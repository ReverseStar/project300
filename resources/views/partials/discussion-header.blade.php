<div class="card-header p-1" style="background-color:cadetblue">
        <div class="d-flex justify-content-between">
            <div>
                <img width="30px" height="30px" style="border-radius:50%"
                    src="{{Gravatar::src($discussion->author->email)}}" alt="">
                <strong class="ml-2" style="color:darkred">{{$discussion->author->name}}</strong>
            </div>

            <div>
                <a href="{{route('discussions.show',$discussion->slug)}}" class="btn btn-success btn-sm">View</a>
            </div>
        </div>
        <!-- <img width="30px" height="30px" style="border-radius:50%" src="{{Gravatar::src($discussion->author->email)}}" alt="">
                    <strong class="ml-2" style="color:darkred">{{$discussion->author->name}}</strong>  -->
    </div>