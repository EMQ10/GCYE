
    @foreach($ticket->comments as $comment)
        <div class="panel panel-@if($ticket->user->id === $comment->user_id){{"default"}}@else{{"success"}}@endif">
     
           
            <div class="notice-list">
              
                <div class="post-date bg-light-sea-green">{{ $comment->user->name }} - <span class="float-right">{{ $comment->created_at->format('Y-m-d') }}</span></div>
                <h6 class="notice-title">{{ $comment->comment }}</h6>
            
                {{-- <div class="entry-meta">  Jennyfar Lopez / <span>{{ $comment->created_at->format('h-m-s') }}</span></div> --}}
            </div>
        </div>



    @endforeach

