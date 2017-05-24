@if(Auth::check())
    @if(Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route'=> ['favorite.del',$micropost->id],'method'=>'delete']) !!}
            {!! Form::submit('お気に入り解除',['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route'=> ['favorite.add',$micropost->id]]) !!}
            {!! Form::submit('お気に入り追加',['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif