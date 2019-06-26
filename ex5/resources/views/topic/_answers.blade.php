<div class="card">
    <div class="card-body">        
            @foreach($topic->answers->sortByDesc('created_at') as $answer)
                @if(Auth::user()->id==$answer->user_id)
                <h6 class="card-title"><span class="badge badge-secondary"> Respondido ás {{$answer->created_at->format('Y-m-d G:i:s')}}</span></h6>
                <div class="card-body">
                     {{$answer->answer}}
                </div>
                @else
                <h6 class="card-title"><span class="badge badge-secondary"> {{$answer->user_name}} respondeu ás {{$answer->created_at->format('Y-m-d G:i:s')}}</span></h6>
                @endif
            @endforeach       

    </div>
</div>